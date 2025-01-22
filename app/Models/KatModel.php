<?php

namespace App\Models;

use CodeIgniter\Model;

class KatModel extends Model
{
    protected $table      = 'data_kat';
    protected $primaryKey = 'kat_id';
    protected $allowedFields = ['kat_nm'];
    protected $useTimestamps = true;

    public function semuaKat()
    {
        return $this
            ->orderBy('updated_at', 'DESC')
            ->findAll();
    }

    public function hitungSemuaKat()
    {
        return $this->countAllResults();
    }

    public function getKatById($kat_id)
    {
        return $this
            ->find($kat_id);
    }
}
