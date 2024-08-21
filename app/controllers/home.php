<?php

namespace app\controllers;

use app\config\controller;
use app\models\homeModel;
use app\config\response;
use app\config\view;

class home extends controller
{
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new homeModel();
    }
    public function index()
    {
        if ($this->method !== 'GET') {
            return $this->response(response::estado405());
        }
        $view = new view();
        echo $view->render('admin/home', 'index');
    }
}
