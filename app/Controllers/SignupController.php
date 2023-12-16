<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use \App\Models\UserModel;
class SignupController extends ResourceController
{
    private $user;
    public function __construct()
    {
        $this->user = new UserModel();
    }
  

public function hi(){
    echo 'hi';
}
    public function register()
    {
        try{
        $validation = [
            'LastName' => [ 'rules'=>'required|min_length[2]|max_length[50]'],
            'FirstName' => ['rules'=>'required|min_length[2]|max_length[50]'],
            'ContactNo' => ['rules'=>'required|min_length[11]|numeric|max_length[14]'],
            'username' => ['rules'=>'required|min_length[5]|max_length[50]'],
            'email' => ['rules'=>'required|min_length[5]|max_length[50]|valid_email|is_unique[usertbl.email]'],
            'password' => ['rules'=>'required|min_length[5]|max_length[50]'],
            
            
        ];

        if($this->validate($validation))
        {
       $data= 
            [
                'LastName' => $this->request->getVar('LastName'),
                'FirstName' => $this->request->getVar('FirstName'),
                'ContactNo' => $this->request->getVar('ContactNo'),
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            
           $save = $this->user->save($data);
            return $this->respond($save, 200);
        }
        else{
            $response = [
                'errors' => $this->validator->getErrors(),
                'message' => 'Invalid Inputs'
            ];
            return $this->respond($response);
        }
        }
        catch (\Throwable $e) {
            return $this->respond(["message" => "Error: " . $e->getMessage()],);
        }
    }
     
}
