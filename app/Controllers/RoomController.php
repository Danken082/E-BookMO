<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
class RoomController extends ResourceController
{
    
    private $room;
    private $itc;
    public function __construct()
    {
        $this->room = new \App\Models\RoomModel();
        $this->itc = new  \App\Models\ItcModel();
    }
    public function index()
    {
        $data['room'] = $this->room->findAll();
        return view('UserLogin/reservation', $data);
    }
    public function room(){
        $data = $this->room->findAll();
        return $this->respond($data, 200);
    }

    public function insertRoom(){
        $json = $this->request->getJSON();
        $data = [
            'roomNo' => $json->roomNo,
            'roomType' => $json->roomType,
            'Price ' => $json->Price,
            'file' => $json->file,
            'MaxPerson' => $json->MaxPeson,
            'Status' => $json->Status,
        ];
        return $this->room->save($data);
        return $this->respond(['message' => 'Inserted Successfully'], 200);
    }
    public function try(){
        $json = $this->request->getJSON();
        $data = 
        [
            'name' => $json->name,
            'username' => $json->username,
        ];
        return $this->itc->save($data); 
    }
}
