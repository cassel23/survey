<?php

namespace App\Controllers;

class Pertanyaan extends BaseController
{

    private $surveyModel;
    private $pertanyaanModel;

    public function __construct() {
        $this->surveyModel = new \App\Models\SurveyModel();
        $this->pertanyaanModel = new \App\Models\PertanyaanModel();
    }

    public function hasilpertanyaan($id)
    {
        $data['survey'] = $this->surveyModel->find($id);
        $data['pertanyaan'] = $this->pertanyaanModel->where("survey_id", $id)->find();
        // dd($data['pertanyaan']);
        return view('hasilpertanyaan', $data);
    }

}