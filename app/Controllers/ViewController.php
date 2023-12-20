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
            $data = $this->room->select('Count(*) as transient')->where('RoomCateg', 'Transient')->findAll();
                return $this->respond($data, 200);
        }

        public function Appartment(){
            $data = $this->room->where('RoomCateg', 'Appartment')->countAll();
            return $this->respond($data, 200);
        }

        public function countAvarooms(){
            $data = $this->room->select("Count(*) as available")->where('Status', 'Available')->findAll();
            return $this->respond($data, 200);
        }
        public function countUnrooms(){
            $data = $this->room->select("Count(Status) as unvailable")->where('Status', 'Unavailable')->findAll();
            return $this->respond($data, 200);
        }

}
