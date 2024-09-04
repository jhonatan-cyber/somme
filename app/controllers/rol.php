<?php

namespace app\controllers;

use app\config\controller;
use app\models\rolModel;
use app\config\response;
use app\config\seguridad;
use  app\config\view;
use Exception;

class rol extends controller
{
    private $model;

    public function __construct()
    {
        /* if (session_status() === PHP_SESSION_NONE) {
            session_start();
        } */
        parent::__construct();
        $this->model = new rolModel();
    }
    public function index()
    {
        if ($this->method !== 'GET') {
            return $this->response(Response::estado405());
        }

        try {
            $view = new view();
            /* session_regenerate_id(true);
            if (!empty($_SESSION['activo'])) { */
            echo $view->render('admin/rol', 'index');
            /* } else {
                echo $view->render('admin/auth', 'index');
            } */
        } catch (Exception $e) {
            return $this->response(Response::estado404($e));
        }
    }

    public function getRoles()
    {
        if ($this->method !== 'GET') {
            return $this->response(Response::estado405());
        }

        try {
            $roles = $this->model->getRoles();
            if (empty($roles)) {
                return $this->response(Response::estado204());
            }
            return $this->response(Response::estado200($roles));
        } catch (Exception $e) {
            return $this->response(Response::estado404($e));
        }
    }

    public function getRol($id)
    {
        if ($this->method !== 'GET') {
            return $this->response(Response::estado405());
        }

        try {
            $rol = $this->model->getRol($id);
            if (empty($rol)) {
                return $this->response(Response::estado204());
            }
            return $this->response(Response::estado200($rol));
        } catch (Exception $e) {
            return $this->response(Response::estado404($e));
        }
    }
}
