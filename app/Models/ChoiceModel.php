<?php

namespace App\Models;

use CodeIgniter\Model;

class ChoiceModel extends Model
{
    protected $table      = 'choice';
    protected $allowedFields = ['pilihan', 'pertanyaan_id'];
}