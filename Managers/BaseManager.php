<?php

namespace Managers;

use Interfaces\IDatabase;
use Traits\MyTraits;

abstract class BaseManager
{
    protected \PDO $pdo;

    public function __construct (IDatabase $factory)
    {
        $this->pdo = $factory->connect();
    }
}