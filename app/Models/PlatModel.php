<?php

namespace App\Models;

use CodeIgniter\Model;

class PlatModel extends Model
{
    protected $table      = 'data_plat';
    protected $primaryKey = 'plat_id';
    protected $allowedFields = ['plat_nm'];
    protected $useTimestamps = true;

    public function semuaPlat()
    {
        return $this
            ->orderBy('updated_at', 'DESC')
            ->findAll();
    }

    public function hitungSemuaPlat()
    {
        return $this->countAllResults();
    }

    public function getPlatById($plat_id)
    {
        return $this
            ->find($plat_id);
    }
}
