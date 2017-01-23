<?php
class Route
{

    static public function start()
    {
        // контроллер и действие по умолчанию
        $controllerName = 'main';
        $actionName = 'index';
        $parameters = [];

        $routes = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

        // получаем имя контроллера
        $controllerName = array_shift($routes);

        // получаем имя экшена
        if (!empty($routes[0])) {
            $actionName = array_shift($routes);
        }
        // получаем параметры
        if (!empty($routes[0])) {
            $parameters = $routes;
        }

        $controllerName = ucfirst($controllerName);
        $actionName = 'action' . ucfirst($actionName);


        if (!file_exists(__DIR__ . '/../Controllers/' . $controllerName . '.php')) {
            Route::ErrorPage404();
        }

        // подцепляем файл с классом контроллера
        $controllerFile = '\\application\\Controllers\\' . $controllerName;

        // создаем контроллер
        $controllerObject = new $controllerFile;
        if (!method_exists($controllerObject, $actionName)) {
            Route::ErrorPage404();
        }

        call_user_func_array([$controllerObject, $actionName], $parameters);

        /*if (method_exists($controller, $action)) {
            // вызываем действие контроллера
            $controller->$action();
        } else {
            Route::ErrorPage404();
        }*/

    }

    public function ErrorPage404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header('Status: 404 Not Found');
        header('Location:' . $host . 'error404');
    }
}
