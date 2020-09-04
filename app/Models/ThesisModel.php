<?php

namespace App\Models;

use CodeIgniter\Model;

class ThesisModel extends Model
{
    protected $table = "tbl_mhs";
    protected $primaryKey = 'mhs_id';

    protected $useTimestamps = true;
    protected $allowedFields = ['mhs_name', 'mhs_nim'];

    public function search($keyword)
    {
        
        return $this->table('tbl_mhs')->like('mhs_thesis',$keyword);

    }
}
