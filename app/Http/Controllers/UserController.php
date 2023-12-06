<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Http\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $room;

    public function __construct(UserService $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        $users = $this->user->getUser();

        return UserResource::collection($users)->response();
    }
}
