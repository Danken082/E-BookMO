<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ItcModel;
use App\Models\RoomModel;
class RoomController extends ResourceController
{
    
    // private $room;
    // private $itc;
    // public function __construct()
    // {
    //     $this->room = new \App\Models\RoomModel();
    //     $this->itc = new  \App\Models\ItcModel();
    // }
    public function index()
    {
        $room = new RoomModel();
        $data = $room->findAll();
    return $this->respond($data, 200);
    }
    public function room(){
        $room = new RoomModel();
        $data = $room->findAll();
        return $this->respond($data, 200);
    }

    public function insertRoom()
    {
        $room = new RoomModel();
        $json = $this->request->getJSON();
        $data = [
            'roomNo' => $json->roomNo,
            'roomType' => $json->roomType,
            'Price ' => $json->Price,
            'File' => $json->file,
            'MaxPerson' => $json->MaxPerson,
            'Status' => $json->Status,
        ];
            $room->save($data);
        return $this->respond(  $room->save($data), 200);
    }
    public function try(){
        $json = $this->request->getJSON();
        $data =  [
            'name' => $json->name,
            'username' => $json->username,
        ];
        $itc = new ItcModel();
         $itc->save($data); 

    }
}
