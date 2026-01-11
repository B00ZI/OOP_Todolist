<?php

require_once 'StorageInterface.php';
require 'Task.php';


class Tasklist
{

    public function __construct(
        public StorageInterface $storage,
        private array $tasks = []

    ) {
        $this->tasks =  $this->storage->load();
    }

    public function addTask(Task $task): void
    {

        $this->tasks[] = $task;
        $this->storage->save($this->tasks);
    }

    public function getAllTasks(): array
    {
        return $this->tasks;
    }

    public  function getPendingTasks(): array
    {



        return array_filter($this->tasks, function ($x) {


            return !$x->isDone();
        });
    }
}
