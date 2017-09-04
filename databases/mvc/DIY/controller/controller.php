<?php

require_once('model/model.php');
require_once('views/view.html.php');

class Controller
{

    public $request;

    public $model;

    public $view;

    /**
     * Controller constructor. constructors always get parsed first
     * @param array $config
     */
    public function __construct($config = array())
    {
        $this->request = $config['request'];

        $this->model = new Model();
        $this->model->setState($this->request);

        $this->view = new ViewHelper();
        $this->view->setModel($this->model);
    }

    public function execute($action)
    {
        $method = 'action' . $action;
        if (is_callable(array($this, $method))){
            $this->$method();
        }else{
            $this->actionFetch();
        }
    }

    //here you will create your actionGET

    //here you will create your actionPOST

    //here you will create your actionDELETE

}