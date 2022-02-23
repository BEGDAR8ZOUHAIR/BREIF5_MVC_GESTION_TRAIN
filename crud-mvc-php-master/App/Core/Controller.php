<?php 

class Controller 
{
    //load model
    public function model($model){
        require_once '../app/Models/'. $model   . '.php';

        return new $model();
    }
    
    protected $view;

    protected function view($template,$params=[])
    {
        $this->view = new View($template,$params);
        return $this->view;
    }
}