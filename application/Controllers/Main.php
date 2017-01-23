<?php
namespace application\Controllers;

use application\Core\Controller;

class Main extends Controller
{
    
    public function actionIndex()
    {
        $this->view->generate('main.php', 'template.php', 'Main');
    }
}
