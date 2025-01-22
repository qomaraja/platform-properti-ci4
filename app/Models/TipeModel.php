<?php

namespace App\Models;

use CodeIgniter\Model;

class TipeModel extends Model
{
    protected $table      = 'data_tipe';
    protected $primaryKey = 'tipe_id';
    protected $allowedFields = ['tipe_nm'];
    protected $useTimestamps = true;

    public function semuaTipe()
    {
        return $this
            ->orderBy('updated_at', 'DESC')
            ->findAll();
    }

    public function hitungSemuaTipe()
    {
        return $this
            ->countAllResults();
    }

    public function getTipeById($tipe_id)
    {
        return $this
            ->find($tipe_id);
    }
}
