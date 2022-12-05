<?php

namespace App\Models;

use CodeIgniter\Model;

class ResponModel extends Model
{
    protected $table      = 'respon';
    protected $allowedFields = ['pertanyaan_id', 'jawaban', 'responden', 'waktu'];
}