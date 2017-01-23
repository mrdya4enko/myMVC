<?php
namespace application\Core;

use application\Core\View;

class Controller
{
    public $model;
    public $view;

    public function __construct()
    {
        $this->view = new View();
    }

    private function actionIndex()
    {
    }
}
