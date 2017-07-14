<?php

namespace Clouds\Modules\Admin\Controllers;

class IndexController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->disable();
        var_dump("passando");
    }

}

