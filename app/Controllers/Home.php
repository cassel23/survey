<?php

namespace App\Controllers;

use App\Models\ChoiceModel;
use App\Models\PertanyaanModel;

class Home extends BaseController
{
    private $surveyModel;
    private $pertanyaanModel;
    private $choiceModel;

    public function __construct() {
        $this->surveyModel = new \App\Models\SurveyModel();
        $this->pertanyaanModel = new PertanyaanModel();
        $this->choiceModel = new ChoiceModel();
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
        $data['survey'] = $this->surveyModel
        ->select("survey.*, count(pertanyaan.survey_id) as jumlah_pertanyaan")
        ->join("pertanyaan", "survey.id = pertanyaan.survey_id", "left")
        ->groupBy("survey.id")
        ->find();
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
        }elseif (!empty($this->request->getPost("quest_range"))) {
            $data = [
                'jenis' => 'range',
                'pertanyaan' => $this->request->getPost("quest_range"),
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
        }elseif (!empty($this->request->getPost("quest_single_choice"))) {
            // dd($this->request->getPost());
            $data = [
                'survey_id' => $id,
                'pertanyaan' => $this->request->getPost("quest_single_choice"),
                'jenis' => 'single-choice',
            ];
            $this->pertanyaanModel->insert($data);
            $pertanyaan_id = $this->pertanyaanModel->getInsertID();
            // dd($pertanyaan_id);
            $choice = [];
            foreach ($this->request->getPost("opt_single[]") as $val) {
                if (!empty($val)) {
                    $choice[] = [
                        'pilihan' => $val,
                        'pertanyaan_id' => $pertanyaan_id
                    ];
                }
                
            }
            $this->choiceModel->insertBatch($choice);
        }elseif (!empty($this->request->getPost("quest_multiple_choice"))) {
                // dd($this->request->getPost());
                $data = [
                    'survey_id' => $id,
                    'pertanyaan' => $this->request->getPost("quest_multiple_choice"),
                    'jenis' => 'multiple-choice',
                ];
                $this->pertanyaanModel->insert($data);
                $pertanyaan_id = $this->pertanyaanModel->getInsertID();
                // dd($pertanyaan_id);
                $choice = [];
                foreach ($this->request->getPost("opt_multiple[]") as $val) {
                    if (!empty($val)) {
                        $choice[] = [
                            'pilihan' => $val,
                            'pertanyaan_id' => $pertanyaan_id
                        ];
                    }
                }
                $this->choiceModel->insertBatch($choice);
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
            $data['pertanyaan'] = $this->pertanyaanModel->find($id);
            $data['choice'] = $this->choiceModel->where("pertanyaan_id", $id)->find();
            // dd($data['pertanyaan','pilihan']);
            return view('edit', $data);
    }

    public function pertanyaan($id)
    {
        $pertanyaan = $this->pertanyaanModel->find($id);
        if (!empty($this->request->getPost("quest_text"))) {
            $data = [
                'id' => $id,
                'pertanyaan' => $this->request->getPost("quest_text")
            ];
            $this->pertanyaanModel->save($data);
        }elseif (!empty($this->request->getPost("quest_range"))) {
            $data = [
                'id' => $id,
                'pertanyaan' => $this->request->getPost("quest_range")
            ];
            $this->pertanyaanModel->save($data);
        }elseif (!empty($this->request->getPost("quest_email"))) {
            $data = [
                'id' => $id,
                'pertanyaan' => $this->request->getPost("quest_email"),
            ];
            $this->pertanyaanModel->save($data);
        }elseif (!empty($this->request->getPost("quest_image"))) {
            $data = [
                'id' => $id,
                'pertanyaan' => $this->request->getPost("quest_image"),
            ];
            $this->pertanyaanModel->save($data);
        }elseif (!empty($this->request->getPost("quest_date"))) {
            $data = [
                'id' => $id,
                'pertanyaan' => $this->request->getPost("quest_date"),
            ];
            $this->pertanyaanModel->save($data);
        }elseif (!empty($this->request->getPost("quest_emoticon"))) {
            $data = [
                'id' => $id,
                'pertanyaan' => $this->request->getPost("quest_emoticon"),
            ];
            $this->pertanyaanModel->save($data);
        }elseif (!empty($this->request->getPost("quest_single_choice"))) {
            $data = [
                'id' => $id,
                'pertanyaan' => $this->request->getPost("quest_single_choice"),
            ];
            $this->pertanyaanModel->save($data);
         }elseif (!empty($this->request->getPost("opt_single[]"))) {
            $data = [
                'id' => $id,
                'pertanyaan' => $this->request->getPost("opt_single[]"),
            ];
            $this->pertanyaanModel->save($data);
        }
        return redirect()->to('/choice/' . $pertanyaan['survey_id']);
    }


    public function publish($id)
    {
        $this->surveyModel->save(
            [
                'id' => $id,
                'status' => 'PUBLISHED',
                'published_at' => date("Y-m-d H:i:s")
            ]
        );
        return redirect()->to('/choice/' . $id);
    }
}