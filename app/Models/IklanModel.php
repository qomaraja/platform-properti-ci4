<?php

namespace App\Models;

use CodeIgniter\Model;

class IklanModel extends Model
{
    protected $table      = 'data_iklan';
    protected $primaryKey = 'iklan_id';
    protected $allowedFields = ['iklan_img', 'iklan_link'];
    protected $useTimestamps = true;

    public function semuaIklan()
    {
        return $this
            ->orderBy('updated_at', 'DESC')
            ->findAll();
    }

    public function hitungSemuaIklan()
    {
        return $this->countAllResults();
    }

    public function getIklanById($iklan_id)
    {
        return $this
            ->find($iklan_id);
    }
}
