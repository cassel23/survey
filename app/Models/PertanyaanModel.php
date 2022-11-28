<?php

namespace App\Models;

use CodeIgniter\Model;

class PertanyaanModel extends Model
{
    protected $table      = 'pertanyaan';
    protected $allowedFields = ['jenis', 'pertanyaan', 'survey_id'];
}