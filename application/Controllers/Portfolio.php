<?php
namespace application\Controllers;

use application\Core\Controller;
use application\Models\Portfolio as ModelPortfolio;

class Portfolio extends Controller
{

    public function actionIndex()
    {
        $porfolioModel = new ModelPortfolio();
        $data = $porfolioModel->getData();
        $this->view->generate('portfolio.php', 'template.php', 'Portfolio', $data);
    }

    public function actionInfo($category, $id)
    {
        $this->view->generate('info.php', 'template.php', 'Portfolio');
        echo '  CATEGORY:  ' . $category . '  ID:  ' . $id;
    }
}
