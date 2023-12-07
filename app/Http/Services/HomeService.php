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

    /**
     * Get the users list exclube auth user
     * @return mixed
     */
    public function getOtherUsers()
    {
        return $this->users->getOtherUsers(['id', 'name', 'email']);
    }

    /**
     * Get room information
     * @return mixed
     */
    public function getRooms()
    {
        return $this->rooms->getAll(['id', 'name', 'description','user_id']);
    }

    /**
     * Get the room with users
     *
     * @param $id
     * @return mixed
     */
    public function getRoomWithUsers($id)
    {
        return $this->rooms->getRoomWithUsers($id, ['id', 'name', 'description', 'user_id']);
    }
}
