<?php
namespace application\Core;

class View
{
    
    public function generate($contentView, $templateView, $controllerName = null, $data = null)
    {
        /*
        if(is_array($data)) {
            // преобразуем элементы массива в переменные
            extract($data);
        }
        */

        include 'application/Views/' . $templateView;
    }
}
