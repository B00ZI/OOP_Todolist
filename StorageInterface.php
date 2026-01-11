<?php 

interface StorageInterface{

public function save(array $tasks):void;
public function load():array;
}