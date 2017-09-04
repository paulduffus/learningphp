<?php

require_once('model/model.php');
require_once('views/view.html.php');

class Controller {

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

    /**
     * actionPOST can relate two things
     * we POST a new row
     * we POST to update an existing row
     * the model determines this based on id
     */
    public function actionPost()
    {
        $this->model->actionSave();

        header("Location: /databases/mvc/example.php");
    }

    /**
     * actionGet relates to two potential views
     * we GET the adminlist OR
     * we GET the edit view
     * we determine in the view which layout to display to the user
     */
    public function actionGet()
    {
        $view = $this->request->query->filter('view', 'users');

        $this->view->assign(array('view' => $view));

        $this->view->display();
    }

    /**
     * This is where the controller determines whether we should delete or not
     * If an id is passed in then, ask the model to delete
     */
    public function actionDelete()
    {
        $id = $this->request->query->filter('id', '', FILTER_SANITIZE_NUMBER_INT);

        if ($id){
            $this->model->actionDelete();
        }
    }
}