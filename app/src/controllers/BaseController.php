<?php

namespace App\Siscopuig;

class BaseController
{

    protected $container;


    public function __construct($container)
    {
        $this->container = $container;
    }
}
