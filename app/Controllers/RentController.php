<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController;
use App\Models\RoomModel;


class RentController extends ResourceController
{

    private $room;

    public function __construct(){
        $this->room = new RoomModel();
    }

    public function getRoom($id)
    {
        $data = $this->room->where('roomID', $id)->first();

       return $this->respond($data);
    }

    
}
