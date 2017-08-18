<?php

class ViewHelper
{
    private $data=array();

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
        foreach($array as $key => $value){
            $this->data[$key] = $value;
        }
    }

    public function display()
    {
        $view = $this->data['view'];
        $layout = 'default.html.php';

        if ($view == 'users') {
            $this->users = $this->_model->actionFetch();
        }
        else
        {
            $layout = 'edit.html.php';
            $this->user = $this->_model->actionGet();
        }

        $view = 'views/' . $view . "/tmpl/" .$layout;

        include_once $view;
    }
}
?>