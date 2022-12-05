<?php

namespace App\Controllers;

use App\Models\ChoiceModel;

class Pertanyaan extends BaseController
{

    private $surveyModel;
    private $pertanyaanModel;
    private $choiceModel;

    
    public function __construct() {
        $this->surveyModel = new \App\Models\SurveyModel();
        $this->pertanyaanModel = new \App\Models\PertanyaanModel();
        $this->choiceModel = new \App\Models\ChoiceModel();
    }

    public function hasilpertanyaan($id)
    {
        $data['survey'] = $this->surveyModel->find($id);
        $data['pertanyaan'] = $this->pertanyaanModel->where("survey_id", $id)->find();
        $data['choice'] = $this->choiceModel->where("pertanyaan_id", $id)->find();
        // dd($data['pertanyaan']);
        
        return view('hasilpertanyaan', $data);

        foreach($this->request->getPost("opt_single[]") as $key => $val) {
            if (!empty($val)) {
                $this->choiceModel->set('pilihan', $val)
                ->where('id', $this->request->getPost("pilihan_id[]")[$key])
                ->update();
            }
        }    
    }
    public function submit()
    {
    
    }


}