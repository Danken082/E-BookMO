<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;

class SignupController extends ResourceController
{
    public function __construct()
    {
        $this->user = new \App\Models\UserModel();
    }
    public function index()
    {
        helper(['form']);
        $data = [];
        return view('signup', $data);

    }

    public function insert()
    {
        helper(['from']);
        $validation = [
            'LastName' => 'required|min_length[2]|max_length[50]',
            'FirstName' => 'required|min_length[2]|max_length[50]',
            'ContactNo' => 'required|min_length[11]|max_length[14]',
            'username' => 'required|min_length[5]|max_length[50]',
            'email' => 'required|min_length[5]|max_length[50]|valid_email|is_unique[usertbl.email]',
            'password' => 'required|min_length[5]|max_length[50]',
            
        ];

        if($this->validate($validation))
        {
            $json = $this->request->getJson();
            $data= 
            [
                'LastName' => $json->LastName,
                'FirstName' => $json->FirstName,
                'ContactNo' => $json->ContactNo,
                'username' => $json->username,
                'email' => $json->email,
                'password' => password_hash($json->password, PASSWORD_DEFAULT),
            ];
            $save = $this->user->save($data);
            return $this->respond($save, 400);
        }
        else{
            $data['validation'] = $this->validator;
            echo view('signup', $data);

        }
    }
    // public function try(){
    //     return view('signup');
    // } 
}
