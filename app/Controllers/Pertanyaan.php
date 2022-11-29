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

    public function index()
    {
        return view('hasilpertanyaan');
    }

}