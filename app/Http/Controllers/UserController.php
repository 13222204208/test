<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\UserRepositoryInterface;

class UserController extends Controller
{
    public function __construct(UserRepositoryInterface $users)
    {
        $this->users = $users;
    }
  
    public function getIndex()
    {
        $users=$this->users->all();
        dd($users);
    }
}
