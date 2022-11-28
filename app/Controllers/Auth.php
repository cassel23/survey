<?php

namespace App\Controllers;

class Auth extends BaseController
{

    private $userModel;

    public function __construct() {
        $this->userModel = new \App\Models\UserModel();
    }

    public function login()
    {
        if (!$this->validate([
            'email' => 'required',
            'password' => 'required'
        ])) {
            return redirect()->to('/login')->withInput();
        }
        $password = $this->request->getPost("password");
        $email = $this->request->getPost("email");
        $user = $this->userModel->where(['email' => $email])->first();
        if (is_null($user)) {
            return redirect()->to('/login')->with('error', 'Akun anda tidak terdaftar!');
        }
        if (password_verify($password, $user['password'])) {
            $data = [
                'id_user' => $user['id'],
                'isloggedin' => true
            ];
            session()->set($data);
            session()->setFlashdata('success', 'Anda Berhasil Login!');
            return redirect()->to('/');
        } else {
            return redirect()->to('/login')->withInput()->with('error', 'Password anda salah!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
