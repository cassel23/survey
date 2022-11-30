<?php

namespace App\Controllers;

use App\Models\PertanyaanModel;

class Home extends BaseController
{
    private $surveyModel;
    private $pertanyaanModel;

    public function __construct() {
        $this->surveyModel = new \App\Models\SurveyModel();
        $this->pertanyaanModel = new PertanyaanModel();
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
        $data['pertanyaan'] = $this->pertanyaanModel->where("survey_id", $id)->find();
        // dd($data['pertanyaan']);
        return view('choice', $data);
    }
    public function profil()
    {
        return view('profil');
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
        return redirect()->to("/choice/1")->with("success", "Data berhasil disimpan");
    }

    public function setChoice($id)
    {
        if (!empty($this->request->getPost("quest_text"))) {
            $data = [
                'jenis' => 'text',
                'pertanyaan' => $this->request->getPost("quest_text"),
                'survey_id' => $id
            ];
            $this->pertanyaanModel->insert($data);
        }elseif (!empty($this->request->getPost("quest_email"))) {
            $data = [
                'jenis' => 'email',
                'pertanyaan' => $this->request->getPost("quest_email"),
                'survey_id' => $id
            ];
            $this->pertanyaanModel->insert($data);
        }elseif (!empty($this->request->getPost("quest_image"))) {
            $data = [
                'jenis' => 'image',
                'pertanyaan' => $this->request->getPost("quest_image"),
                'survey_id' => $id
            ];
            $this->pertanyaanModel->insert($data);
        }elseif (!empty($this->request->getPost("quest_date"))) {
            $data = [
                'jenis' => 'date',
                'pertanyaan' => $this->request->getPost("quest_date"),
                'survey_id' => $id
            ];
            $this->pertanyaanModel->insert($data);
        }elseif (!empty($this->request->getPost("quest_emoticon"))) {
            $data = [
                'jenis' => 'emoticon',
                'pertanyaan' => $this->request->getPost("quest_emoticon"),
                'survey_id' => $id
            ];
            $this->pertanyaanModel->insert($data);
        }
        return redirect()->to('/choice/' . $id);
    }

    public function add()
    {
        $data = [
            'jenis' => null,
            'pertanyaan' => $this ->request-> getPost("pertanyaan") 
        ];
        $this->surveyModel->insert($data);
        return redirect()->to("/choice/1")->with("success", "Data berhasil disimpan");
    }

    public function editpertanyaan($id)
    {
            $data['pertanyaan'] = $this->pertanyaanModel->where("pertanyaan_id", $id)->find();
            // dd($data['pertanyaan']);
            return view('edit', $data);
    }
}