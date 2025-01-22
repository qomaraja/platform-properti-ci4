<?php

namespace App\Models;

use CodeIgniter\Model;

class TokoModel extends Model
{
    protected $table      = 'data_toko';
    protected $primaryKey = 'toko_id';
    protected $allowedFields = ['kat_id', 'plat_id', 'toko_jdl', 'toko_link', 'toko_hrg', 'toko_img'];
    protected $useTimestamps = true;

    public function getAllTokoWithKatAndPlat()
    {
        return $this
            ->select('data_toko.*, data_kat.*, data_plat.*, data_toko.updated_at as toko_updated_at')
            ->join('data_kat', 'data_kat.kat_id = data_toko.kat_id')
            ->join('data_plat', 'data_plat.plat_id = data_toko.plat_id')
            ->orderBy('toko_updated_at', 'DESC')
            ->findAll();
    }

    public function getAllToko(int $perPage = null, $order = 'terbaru', $kat = null, $plat = null, $keyword = null): array
    {
        // Mengatur join dan select, termasuk tokoerti dari data_kat
        $this->select('data_toko.*, data_kat.kat_nm, data_plat.plat_nm, data_toko.updated_at as toko_updated_at')
            ->join('data_kat', 'data_kat.kat_id = data_toko.kat_id')
            ->join('data_plat', 'data_plat.plat_id = data_toko.plat_id');

        // Menentukan urutan berdasarkan parameter $order
        switch ($order) {
            case 'terlama':
                $this->orderBy('data_toko.created_at', 'ASC');
                break;
            case 'terbaru':
            default:
                $this->orderBy('data_toko.created_at', 'DESC');
                break;
        }

        // Filter berdasarkan kat jika parameter $kat tidak kosong atau bukan 'semua'
        if (!empty($kat) && $kat !== 'semua') {
            $this->where('data_toko.kat_id', $kat);
        }

        // Filter berdasarkan kat jika parameter $kat tidak kosong atau bukan 'semua'
        if (!empty($plat) && $plat !== 'semua') {
            $this->where('data_toko.plat_id', $plat);
        }

        // Filter berdasarkan keyword jika ada
        if (!empty($keyword)) {
            $this->groupStart() // Mulai group untuk `orLike`
                ->like('toko_jdl', $keyword)
                ->groupEnd(); // Akhiri group untuk `orLike`
        }

        // Menggunakan paginate untuk mengambil data dengan paginasi
        return [
            'news'  => $this->paginate($perPage, 'data_toko'),
            'pager' => $this->pager,
        ];
    }

    public function hitungSemuaToko()
    {
        return $this->countAllResults();
    }

    public function getTokoById($toko_id)
    {
        return $this
            ->find($toko_id);
    }

    public function getKatByTokoId($toko_id)
    {
        return $this->select('data_toko.*, data_kat.*')
            ->join('data_kat', 'data_kat.kat_id = data_toko.kat_id')
            ->where('data_toko.toko_id', $toko_id)
            ->first();
    }

    public function getPlatByTokoId($toko_id)
    {
        return $this->select('data_toko.*, data_plat.*')
            ->join('data_plat', 'data_plat.plat_id = data_toko.plat_id')
            ->where('data_toko.toko_id', $toko_id)
            ->first();
    }
}
