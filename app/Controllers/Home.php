<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $userModel;

    public function __construct() {
        $this->userModel = new \App\Models\UserModel();
    }
    
    public function index()
    {
        return view('welcome_message');
    }
    public function survey()
    {
        return view('survey');
    }
    public function choice()
    {
        return view('choice');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function mysurvey()
    {
        return view('mysurvey');
    }
}
