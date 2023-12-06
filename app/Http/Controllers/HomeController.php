<?php

namespace App\Http\Controllers;

use App\Http\Services\HomeService;


class HomeController extends Controller
{
    private $home;

    public function __construct(HomeService $home)
    {
        $this->home = $home;
    }
   public function index()
   {
       $users = $this->home->getUsers();
       $rooms = $this->home->getRooms();

       return view('home', compact('users','rooms'));

   }
}
