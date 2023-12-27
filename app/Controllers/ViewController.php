<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use App\Models\RoomModel;
class ViewController extends ResourceController
{
    private $room;
    public function __construct(){
        $this->room = new RoomModel();
    }
        public function roomCount()
        {
            $data= $this->room->countAll();
            return $this->respond($data, 200);

        }

        public function Transient(){
            $data = $this->room->selectCount('RoomCateg')->where('RoomCateg', 'Transient')->first();
                return $this->respond($data, 200);
        }

        public function Appartment(){
            $data = $this->room->selectCount('RoomCateg')->where('RoomCateg', 'Appartment')->first();
            return $this->respond($data, 200);
        }

        public function countAvarooms(){
            $data = $this->room->select("Count(Status) as available")->where('Status', 'Available')->first();
            return $this->respond($data, 200);
        }
        public function countUnrooms(){
            $data = $this->room->select("Count(Status) as unvailable")->where('Status', 'Unavailable')->first();
            return $this->respond($data, 200);
        }

}
