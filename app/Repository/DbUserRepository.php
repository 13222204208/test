<?php
namespace App\Repository;

use App\Models\User;
use App\Interfaces\UserRepositoryInterface;

class DbUserRepository implements UserRepositoryInterface
{
    public function all()
    {
        return User::all()->toArray();
    }
}