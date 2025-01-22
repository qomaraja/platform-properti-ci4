<?php

namespace App\Models;

use CodeIgniter\Model;

class PropModel extends Model
{
    protected $table      = 'data_prop';
    protected $primaryKey = 'prop_id';
    protected $allowedFields = [
        'tipe_id',
        'prop_nm',
        'prop_slug',
        'prop_lb',
        'prop_lt',
        'prop_kt',
        'prop_km',
        'prop_almt',
        'prop_kd_almt',
        'prop_isi',
        'prop_hrg',
        'prop_kpr',
        'prop_bunga',
        'prop_info_kpr',
        'prop_img1',
        'prop_img2',
        'prop_img3',
        'prop_img4',
        'prop_img5',
        'prop_img6',
    ];
    protected $useTimestamps = true;

    public function getAllPropWithTipe(): array
    {
        return $this
            ->select('data_prop.*, data_tipe.*, data_prop.updated_at as prop_updated_at')
            ->join('data_tipe', 'data_tipe.tipe_id = data_prop.tipe_id')
            ->orderBy('prop_updated_at', 'DESC')
            ->findAll();
    }

    public function getAllProp(int $perPage = null, $order = 'terbaru', $tipe = null, $minHarga = null, $maxHarga = null, $minLuas = null, $maxLuas = null, $keyword = null): array
    {
        // Menentukan urutan berdasarkan parameter $order
        switch ($order) {
            case 'terlama':
                $this->orderBy('data_prop.created_at', 'ASC');
                break;
            case 'termurah':
                $this->orderBy('data_prop.prop_hrg', 'ASC');
                break;
            case 'termahal':
                $this->orderBy('data_prop.prop_hrg', 'DESC');
                break;
            case 'terbaru':
            default:
                $this->orderBy('data_prop.created_at', 'DESC');
                break;
        }

        // Filter berdasarkan tipe jika parameter $tipe tidak kosong atau bukan 'semua'
        if (!empty($tipe) && $tipe !== 'semua') {
            $this->where('data_prop.tipe_id', $tipe);
        }

        // Filter berdasarkan harga minimum dan maksimum
        if (!empty($minHarga)) {
            $this->where('data_prop.prop_hrg >=', $minHarga);
        }
        if (!empty($maxHarga)) {
            $this->where('data_prop.prop_hrg <=', $maxHarga);
        }

        // Filter berdasarkan luas tanah minimum dan maksimum
        if (!empty($minLuas)) {
            $this->where('data_prop.prop_lt >=', $minLuas);
        }
        if (!empty($maxLuas)) {
            $this->where('data_prop.prop_lt <=', $maxLuas);
        }

        // Filter berdasarkan keyword jika ada
        if (!empty($keyword)) {
            $this->groupStart() // Mulai group untuk `orLike`
                ->like('prop_nm', $keyword)
                ->orLike('prop_lb', $keyword)
                ->orLike('prop_lt', $keyword)
                ->orLike('prop_kt', $keyword)
                ->orLike('prop_km', $keyword)
                ->orLike('prop_almt', $keyword)
                ->orLike('prop_kd_almt', $keyword)
                ->orLike('prop_isi', $keyword)
                ->orLike('prop_hrg', $keyword)
                ->orLike('prop_kpr', $keyword)
                ->orLike('prop_bunga', $keyword)
                ->orLike('prop_info_kpr', $keyword)
                ->groupEnd(); // Akhiri group untuk `orLike`
        }

        // Mengatur join dan select, termasuk properti dari data_tipe
        $this->select('data_prop.*, data_tipe.tipe_nm, data_prop.updated_at as prop_updated_at')
            ->join('data_tipe', 'data_tipe.tipe_id = data_prop.tipe_id');

        // Menggunakan paginate untuk mengambil data dengan paginasi
        return [
            'news'  => $this->paginate($perPage, 'data_prop'),
            'pager' => $this->pager,
        ];
    }

    public function getSearchPropWithTipe(int $perPage = null, $prop_almt = null, $tipe_id = null, $prop_hrg = null)
    {
        $this
            ->select('data_prop.*, data_tipe.tipe_nm')
            ->join('data_tipe', 'data_prop.tipe_id = data_tipe.tipe_id');

        // Filter berdasarkan prop_almt
        if (!empty($prop_almt)) {
            $this->like('data_prop.prop_almt', $prop_almt);
        }

        // Filter berdasarkan tipe
        if (!empty($tipe_id)) {
            $this->where('data_prop.tipe_id', $tipe_id);
        }

        // Filter berdasarkan prop_hrg
        if (!empty($prop_hrg)) {
            $this->where('data_prop.prop_hrg <=', $prop_hrg);
        }

        return [
            'news'  => $this->paginate($perPage, 'data_prop'),  // Mengambil data dengan jumlah per halaman
            'pager' => $this->pager,                // Mengambil objek pager untuk pagination
        ];
    }

    public function getAllPropBySlug($prop_slug)
    {
        return $this->select('data_prop.*, data_tipe.*')
            ->join('data_tipe', 'data_tipe.tipe_id = data_prop.tipe_id')
            ->where('data_prop.prop_slug', $prop_slug)
            ->first();
    }

    public function getPropById($prop_id)
    {
        return $this
            ->find($prop_id);
    }

    public function getTipeByPropId($prop_id)
    {
        return $this
            ->select('data_prop.*, data_tipe.*')
            ->join('data_tipe', 'data_tipe.tipe_id = data_prop.tipe_id')
            ->where('data_prop.prop_id', $prop_id)
            ->first();
    }

    public function hitungSemuaProp()
    {
        return $this->countAllResults();
    }
}
