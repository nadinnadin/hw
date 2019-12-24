<?php

use Framework\Router\Router;
use Framework\Http\Request;
use Framework\View\PhpView;

class Application
{
    /**
     * @var Router
     */
    private $router;

    /**
     * @var Request
     */
    private $request;

    private $view;


    public function __construct()
    {
        $this->router = new Router();
        $this->view   = new PhpView();
        $this->request = new Request();
    }

    public function run()
    {
        $this->router->dispatch($this->request, $this->view);
    }
}