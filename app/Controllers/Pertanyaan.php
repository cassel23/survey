<?php

namespace App\Controllers;

use App\Models\ChoiceModel;
use App\Models\ResponModel;

class Pertanyaan extends BaseController
{

    private $surveyModel;
    private $pertanyaanModel;
    private $choiceModel;
    private $responModel;

    public function __construct() {
        $this->surveyModel = new \App\Models\SurveyModel();
        $this->pertanyaanModel = new \App\Models\PertanyaanModel();
        $this->choiceModel = new \App\Models\ChoiceModel();
        $this->responModel = new ResponModel();
    }

    public function hasilpertanyaan($id)
    {
        $data['survey'] = $this->surveyModel->find($id);
        $data['pertanyaan'] = $this->pertanyaanModel->where("survey_id", $id)->find();
        $data['choice'] = $this->choiceModel
        ->select("choice.*")
        ->join("pertanyaan", "pertanyaan.id = choice.pertanyaan_id")
        ->where("survey_id", $id)->find();
        // dd($data['choice']);
        
        return view('hasilpertanyaan', $data);

        foreach($this->request->getPost("opt_single[]") as $key => $val) {
            if (!empty($val)) {
                $this->choiceModel->set('pilihan', $val)
                ->where('id', $this->request->getPost("pilihan_id[]")[$key])
                ->update();
            }
        }    
    }
    public function simpanRespon($id)
    {
        $pertanyaan = $this->pertanyaanModel->where("survey_id", $id)->find();
        helper("text");
        $responden = random_string();
        $data = [];
        foreach ($pertanyaan as $val) {
            if (!empty($this->request->getPost($val['id']))) {
                $data[] = [
                    'pertanyaan_id' => $val['id'],
                    'jawaban' => is_array($this->request->getPost($val['id'])) ? implode("-", $this->request->getPost($val['id'])) : $this->request->getPost($val['id']),
                    'responden' => $responden
                ];
            }
        }
        $this->responModel->insertBatch($data);
        echo "Berhasil disimpan";
        die;
        return redirect()->to('/hasilpertanyaan/' . $id);
    }


}