<?php

namespace Controllers;

abstract class Controller
{
    protected $model;
    protected $modelName = "\Models\Message";

    public function __construct()
    {
        $this->model = new $this->modelName();
    }
}
