<?php
namespace application\Controllers;

use application\Core\Controller;

class Error404 extends Controller
{
    
    public function actionIndex()
    {
        $this->view->generate('error404.php', 'template.php', 'Error404');
    }
}
