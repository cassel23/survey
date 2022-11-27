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
    public function choice($id)
    {
        $data['survey'] = $this->surveyModel->find($id);
        return view('choice', $data);
    }
    public function dashboard()
    {
        $data['survey'] = $this->surveyModel->find();
        return view('dashboard', $data);
    }
    public function mysurvey()
    {
        $data['survey'] = $this->surveyModel->find();
        return view('mysurvey', $data);
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
            'creator'=> null
        ];
        $this->surveyModel->insert($data);
        return redirect()->to("/survey")->with("success", "Data berhasil disimpan");
    }

    public function setChoice($id)
    {
        dd($this->request->getPost());
    }
}
