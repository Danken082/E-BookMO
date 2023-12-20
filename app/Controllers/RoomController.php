<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ItcModel;
use App\Models\RoomModel;
class RoomController extends ResourceController
{
    
    private $room;
    private $itc;
    public function __construct()
    {
        $this->room = new RoomModel();
    }
    // public function index()
    // {
    //     $room = new RoomModel();
    //     $data = $room->findAll();
    // return $this->respond($data, 200);
    // }
    public function room(){
        $room = new RoomModel();
        $data = $room->findAll();
        return $this->respond($data, 200);
    }
   


    public function insertRoom()
    {
        try {
            // $file = $this->request->getFile('file');
            // $newfile = $file->getRandomName();
                $rules = [
                    'roomNo' => ['rules' => 'required|is_unique'],
                    'RoomCateg' => ['rules' => 'required'],
                    'roomType' => ['rules' => 'required'],
                    'Price' => ['rules' => 'required'],
                    'MaxPerson' => ['rules' => 'required'],
                    'Status' => ['rules' => 'required']
                ];
                if($this->validate($rules)){
            $data = [
                'roomNo' => $this->request->getVar('roomNo'),
                'RoomCateg' => $this->request->getVar('RoomCateg'),
                'roomType' => $this->request->getVar('roomType'),
                'Price' => $this->request->getVar('Price'),
                // 'file' => $newfile,
                'MaxPerson' => $this->request->getVar('MaxPerson'),
                'Status' => $this->request->getVar('Status')
            ];

            $save = $this->room->save($data);
                    return $this->respond($save, 200);
        }
        else{
            $response = [
                'errors' => $this->validator->getErrors(),
                'message' => 'Invalid Inputs'
            ];
            return $this->respond($response);
        }
        } catch (\Throwable $e) {
            return $this->respond(["message"=> "error: " . $e->getMessage()],);
        }

    }


    public function delRoom(){
        $json = $this->request->getJSON();
        $RoomID = $json->roomID;
        $room = $this->room->delete($RoomID);
        return $this->respond($room, 200);
    }
    public function update($id = null) { 
        $json = $this->request->getJSON(); 
        $data = [ 'title' => $json->title, 
        'price' => $json->price ]; 
        $findById = $this->room->find(['id' => $id]); 
        if(!$findById) return $this->fail('No Data Found', 404); 
        $room = $this->room->update($id, $data); 
        if(!$room) return $this->fail('Update failed', 400); 
        return $this->respond($room); 
    } 
    public function deleteRoom($roomID = null){
        try {
            //code...
        $find = $this->room->find(['roomID' => $roomID]);

        if(!$find) return $this->fail('No Data Found', 404); 
        $room = $this->room->delete($roomID); 
        if(!$room) return $this->fail('Failed Deleted', 400); 

        return $this->respond('Deleted Successful');
        
    } catch (\Throwable $e) {
        return $this->respond(["message"=> "error: " . $e->getMessage()],);
    }
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
