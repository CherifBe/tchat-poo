<?php

namespace Controllers;

abstract class Controller
{
    protected $repository;
    protected $repositoryName = "\Repository\Message";

    public function __construct()
    {
        $this->repository = new $this->repositoryName();
    }
}
