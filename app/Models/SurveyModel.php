<?php

namespace App\Models;

use CodeIgniter\Model;

class SurveyModel extends Model
{
    protected $table      = 'survey';
    protected $allowedFields = ['title', 'description', 'creator', 'status', 'published_at'];
}