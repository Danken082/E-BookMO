<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SignupController extends BaseController
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
            $data= 
            [
                'LastName' => $this->request->getVar('LastName'),
                'FirstName' => $this->request->getVar('FirstName'),
                'ContactNo' => $this->request->getVar('ContactNo'),
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];
            $this->user->save($data);
            return redirect()->to('/login');
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
