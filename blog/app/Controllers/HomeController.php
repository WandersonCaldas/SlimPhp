<?php

namespace App\Controllers;

class HomeController extends Controller
{

    public function index($request, $response) 
    {
        //return $request->getParam('name');
        return $this->container->view->render($response, 'index.twig');
    }
}

?>