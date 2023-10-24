<?php

namespace Managers;

use Entities\User;
use Helper\PasswordHelper;
use Generator;

class UserManagers extends BaseManager
{

    public function getUsers(): ?Generator
    {
        
        $query = $this->pdo->query("SELECT * FROM users");

        while($data = $query->fetch(\PDO::FETCH_ASSOC)){
            yield new User($data);
        }

    }
}