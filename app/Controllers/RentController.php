<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController;
use App\Models\RoomModel;
use App\Models\BookingModel;


class RentController extends ResourceController
{
    private $booking;
    private $room;

    public function __construct(){
        $this->room = new RoomModel();
        $this->booking = new BookingModel();
    }

    public function getRoom($id)
    {
        $data = $this->room->where('roomID', $id)->first();

       return $this->respond($data);
    }

    public function rent(){
        try {
            $data = [
                'Customername' => $this->request->getVar('Customername'),
                'RoomCategory' => $this->request->getVar('RoomCategory'),
                'BookingDate' => $this->request->getVar('BookingDate'),
                'checkinDate' => $this->request->getVar('checkinDate'),
                'PaymentStatus' => $this->request->getVar('PaymentStatus')

            ];


           $save = $this->booking->save($data);
            return $this->respond($save, 200);
        } catch (\Throwable $e) {
            return $this->respond(["message" => "Error: " . $e->getMessage()],);
        }
    }

    
}
