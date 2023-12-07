<?php

namespace App\Http\Controllers;

use App\Http\Services\HomeService;
use App\Models\Room;


class HomeController extends Controller
{
    private $home;

    public function __construct(HomeService $home)
    {
        $this->home = $home;
    }

    public function index()
    {
        $users = $this->home->getOtherUsers();
        $rooms = $this->home->getRooms();

        return view('home', compact('users', 'rooms'));
    }


    public function getRoom(Room $room)
    {
        $users = $this->home->getOtherUsers();
        $rooms = $this->home->getRooms();
        $room = $this->home->getRoomWithUsers($room->id);

        return view('rooms.show', compact('users', 'rooms', 'room'));
    }
}
