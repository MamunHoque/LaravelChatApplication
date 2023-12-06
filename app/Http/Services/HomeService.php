<?php

namespace App\Http\Services;


use App\Http\Repositories\RoomRepository;
use App\Http\Repositories\UserRepository;


class HomeService
{

    /**
     * @var UserRepository
     */
    private $users;
    private $rooms;


    public function __construct()
    {
        $this->users = new UserRepository();
        $this->rooms = new RoomRepository();
    }

    public function getUsers()
    {
        return $this->users->getAll(['id','name','email']);
    }

    public function getRooms()
    {
        return $this->rooms->getAllWithUsers(['id','name','description']);
    }

}
