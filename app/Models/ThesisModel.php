<?php

namespace App\Models;

use CodeIgniter\Model;

class ThesisModel extends Model
{
    protected $table = "tbl_mhs";
    protected $useTimestamps = true;
    protected $allowedFields = ['mhs_name', 'mhs_nim'];
}
