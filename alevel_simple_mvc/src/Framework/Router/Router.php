<?php

namespace Framework\Router;

use Framework\Controller\NotFoundController;
use Framework\Http\Request;
use Framework\View\PhpView;

class Router
{
    public function match($url)
    {
        $controller = 'index';
        $action     = 'index';

        $parts = explode('?', $url);

        $uriParts = explode('/', $parts[0]);

        if (!empty($uriParts[1])) {
            $controller = $uriParts[1];
        }

        if (!empty($uriParts[2])) {
            $action = $uriParts[2];
        }

        return [
            'controller' => $controller,
            'action'     => $action
        ];
    }

    public function dispatch(Request $request, PhpView $view)
    {
        $data = $this->match($request->getRequestUri());

        $controller = sprintf("Controller\\%s", ucfirst($data['controller']));
        $action = $data['action'];

        if (class_exists($controller)) {
            $controller = new $controller($request, $view);
        } else {
            $controller = new NotFoundController($request, $view);
        }

        $response = $controller->$action();

        echo $response;
    }

    private function parseRequestUri()
    {
        $requestUri = $this->params['REQUEST_URI'];
    }
}