<?php

namespace Framework\Controller;

use Framework\Http\Request;
use Framework\View\PhpView;

class AbstractController
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * @var PhpView
     */
    protected $view;

    public function __construct(Request $request, PhpView $view)
    {
        $this->request = $request;
        $this->view    = $view;
    }

    /**
     * @return Request
     */
    protected function getRequest()
    {
        return $this->request;
    }
}