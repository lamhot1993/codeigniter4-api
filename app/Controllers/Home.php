<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function getUsers(){
        $userModel = new \App\Models\UserModel();

        return json_encode($userModel->findAll());
    }

    public function addUser(){
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');

        $data = [
            'name' => $name,
            'email'    => $email,
        ];
        $userModel = new \App\Models\UserModel();
        // Inserts data and returns inserted row's primary key
         return $userModel->insert($data);
    }

    public function updateUser(){
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $id = $this->request->getPost('id');

        $data = [
            'name' => $name,
            'email'    => $email,
        ];

        $userModel = new \App\Models\UserModel();
        return $userModel->update($id, $data);
    }

    public function deleteUser(){
        $userModel = new \App\Models\UserModel();
        $id = $this->request->getPost('id');

        return $userModel->where('id', $id)->delete();
    }
}
