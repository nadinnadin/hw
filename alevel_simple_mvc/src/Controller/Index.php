<?php

namespace Controller;

use Framework\Controller\AbstractController;

class Index extends AbstractController
{
    public function index()
    {
        $content = "<img src=\"https://www.ivi.ru/titr/uploads/2017/10/04/d3722f263e3f589b8416f6a87be3df45.jpg/1400x0\">
                    <h2><a href='/textPage'>Go next</a></h2>";

        return $this->view->generate('framework/index.phtml', ['content' => $content]);
    }
}