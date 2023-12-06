<?php

namespace App\Http\Services;


use App\Http\Repositories\UserRepository;


class UserService
{

    /**
     * @var UserRepository
     */
    private $users;


    public function __construct(?UserRepository $repo = null)
    {
        $this->users = $repo ?: new UserRepository();
    }

    public function getUser()
    {
        return $this->users->getAll(['id','name','email']);
    }

}
