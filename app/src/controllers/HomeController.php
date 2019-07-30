<?php

namespace App\Siscopuig;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class HomeController extends BaseController
{

    public function index(Request $request, Response $response)
    {
        return $this->container->views->render($response, 'home.twig');
    }
}
