<?php


namespace Framework\Controller;


class NotFoundController extends AbstractController
{
    public function index()
    {
        return $this->view->generate('framework/404.phtml');
    }
}