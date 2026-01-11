<?php
class Task
{

    public function __construct(
        private string $title,
        private ?string $description = null,
        private bool $done = false
    ) {}

    public function markDone(){
        $this->done= true ; 
    }
    public function markUndone(){
        $this ->done= false ; 
    }   
    public function isDone(){
        return  $this-> done ;
    }
    public function getTitle(){
        return $this->title;
    }
}
