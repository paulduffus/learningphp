<?php

class ViewHelper
{
    private $data = array();

    private $_model;


    public function __construct()
    {
        $this->_model = new Model();
    }

    public function setModel($model)
    {
        $this->_model = $model;
    }

    public function assign($array)
    {
        foreach ($array as $key => $value) {
            $this->data[$key] = $value;
        }
    }

    //here you will create your display function
}