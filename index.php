<?php
require_once 'LocalStorage.php';
require_once 'Tasklist.php';
require_once 'Task.php';

$tasks = [
    "Finish PHP project",
    "Read documentation",
    "Test API endpoints",
    "Deploy to production"
];

$storage = new LocalStorage();
$tasklist = new Tasklist($storage);

$task = new Task("Finish PHP project 1" , "finich the projict detailes bla bla");
$task1 = new Task("Finish  project 2" , "finich the projict  bla bla" );
$task2 = new Task("Finish PHP  3" , "finich the projict detailes bla bla" );
$task3 = new Task('Test API endpoints  4', "finich the projict detailes bla bla" );



$tasklist->addTask($task);
$tasklist->addTask($task1);
$tasklist->addTask($task2);
$tasklist->addTask($task3);