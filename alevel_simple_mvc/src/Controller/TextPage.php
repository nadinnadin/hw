<?php


namespace Controller;


use Framework\Controller\AbstractController;
use Model\TextModel;

class TextPage extends AbstractController
{

    public function index(){
        $text_model = new TextModel();
        $text_from_db =  $text_model->getList();
        $content = "<h2>$text_from_db</h2>";
        return $this->view->generate('framework/index.phtml', ['content' => $content]);
    }
}