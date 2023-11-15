<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RoomController extends BaseController
{
    public function __construct()
    {
        $this->room = new \App\Models\RoomModel();
    }
    public function index()
    {
        $data['room'] = $this->room->findAll();
        return view('UserLogin/reservation', $data);
    }
}
