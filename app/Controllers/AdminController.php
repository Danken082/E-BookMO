<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RoomModels;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
class AdminController extends ResourceController
{
    use ResponseTrait;
    public function index()
    {
        //
    }
    public function InsertRoom()
    {
        // $room = new RoomModels();

        // helper(['form']);

        // $validation {
        
        // }
    }
    public function home(){
        return view('dashboard/home');
    }

    
    public function booked()
    {
        return view('dashboard/booked');
    }

    public function Chart(){
        $data = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'datasets' => [
                [
                    'label' => 'My First Dataset',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                    'data' => [65, 59, 80, 81, 56],
                ],
            ],
        ];

        return $this->respond($data);
    }



    }

