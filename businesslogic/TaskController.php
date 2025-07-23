<?php
include_once __DIR__ . '/../database/Task.php';

//Task Controller - Business Logic Layer

class TaskController{
    private $taskModel;

    public function __construct($db){
        $this->taskModel = new Task($db);
        // $this->taskModel-> createTable(); //create db table
    }
    public function index(){
        require_once __DIR__ .'/../presentation/layout.php';
    }

    public function create(){
        require_once __DIR__.'/../presentation/layout.php';
    }

    public function store(){}

    public function edit(){}

    public function update(){}

    public function delete()  {}
}