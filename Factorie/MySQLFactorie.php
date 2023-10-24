<?php

namespace Factories;
use Interfaces\IDatabase;

//make a Factory class using PDO using the interface
class MySQLFactory implements IDatabase
{
    private $pdo;
    private string $host;
    private string $user;
    private string $password;
    private string $database;

    public function __construct(string $host = "127.0.0.1", string $user = "root", string $password = "Pikachu2003!", string $database = "hetic_websocket")
                                
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        
    }

    public function connect() : \PDO
    {
        $this->pdo = new \PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password);
        return $this->pdo;      
    }

     
}

    
