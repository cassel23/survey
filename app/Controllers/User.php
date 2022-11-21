<?php

namespace App\Controllers;

class User extends BaseController
{

    private $userModel;

    public function __construct() {
        $this->userModel = new \App\Models\UserModel();
    }

    public function index()
    {
        return view('user');
    }

    public function signin()
    {
        return view('signin');
    }

    public function create()
    {
        $data = [
            'name' => $this->request->getPost("name"),
            'email' => $this->request->getPost("email"),
            'password' => password_hash($this->request->getPost("password"), PASSWORD_DEFAULT),
        ];

        $this->userModel->insert($data);
        return redirect()->to("/user/signin")->with("success", "Data berhasil disimpan");
    }
}
