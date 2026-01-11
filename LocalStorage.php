<?php

require_once 'StorageInterface.php';

class LocalStorage implements StorageInterface
{

    public function __construct(private string $filePath = "tasks.json")
    {
        // 
    }

    public function save(array $tasks): void
    {
        $data =  serialize($tasks);
        file_put_contents($this->filePath,  $data,  LOCK_EX);
    }


    public function load(): array
    {

        if (!file_exists($this->filePath)) {

            return [];
        }

        $data = file_get_contents($this->filePath);

        if (trim($data) === "") {

            return [];
        }

        return unserialize($data);
    }
}
