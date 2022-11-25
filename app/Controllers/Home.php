<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $surveyModel;

    public function __construct() {
        $this->surveyModel = new \App\Models\SurveyModel();
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
    public function resultsurvey()
    {
        return view('resultsurvey');
    }

    public function new()
    {
        $data = [
            'title' => $this->request->getPost("title"),
            'description' => $this->request->getPost("description"),
            'creator'=> $this->request->getPost('creator'),
            'company' => $this->request->getPost("company"),
        ];

        $this->surveyModel->insert($data);
        return redirect()->to("/survey")->with("success", "Data berhasil disimpan");
    }
}
