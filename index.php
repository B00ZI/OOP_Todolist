<?php
require 'LocalStorage.php';

$tasks = [
    "Finish PHP project",
    "Read documentation",
    "Test API endpoints",
    "Deploy to production"
];

$stor = new LocalStorage();
$stor->save($tasks);
$data = $stor->load();
echo $data;