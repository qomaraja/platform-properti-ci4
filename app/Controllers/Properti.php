<?php

namespace App\Controllers;

use App\Models\TipeModel;
use App\Models\PropModel;
use App\Models\IklanModel;

class Properti extends BaseController
{
    protected $TipeModel;
    protected $PropModel;
    protected $IklanModel;

    public function __construct()
    {
        $this->TipeModel = new TipeModel();
        $this->PropModel = new PropModel();
        $this->IklanModel = new IklanModel();
    }

    public function index(): string
    {
        // Normalisasi input harga minimum dan maksimum
        $min_hrg = $this->request->getVar('min_harga') ?? null;
        $minHrg = $min_hrg ? (int)str_replace(['Rp.', '.', ','], '', $min_hrg) : null;
        $max_hrg = $this->request->getVar('max_harga') ?? null;
        $maxHrg = $max_hrg ? (int)str_replace(['Rp.', '.', ','], '', $max_hrg) : null;

        // Ambil parameter filter dari query string
        $keyword = trim($this->request->getVar('keyword')) ?: null;
        $order = $this->request->getVar('order') ?? 'terbaru';
        $tipe_nm = $this->request->getVar('tipe_nm') ?? 'semua';
        $minLuas = $this->request->getVar('min_luas') ?? null;
        $maxLuas = $this->request->getVar('max_luas') ?? null;

        // Ambil data properti sesuai filter
        $allProp = $this->PropModel
            ->getAllProp(
                12,
                $order,
                $tipe_nm,
                $minHrg,
                $maxHrg,
                $minLuas,
                $maxLuas,
                $keyword,
            )['news'];

        $data = [
            'allProp' => $allProp,
            'allTipe' => $this->TipeModel->semuaTipe(),
            'allIklan' => $this->IklanModel->semuaIklan(),
            'pager' => $this->PropModel->pager,
            'active' => 'properti',
            'isIndexPage' => false,
            'breadcrumbs' => [
                ['label' => 'Beranda', 'url' => '/'],
                ['label' => 'Properti', 'url' => null],
            ],
            'selectedOrder' => $order,
            'selectedTipe' => $tipe_nm,
            'minHarga' => $minHrg,
            'maxHarga' => $maxHrg,
            'minLuas' => $minLuas,
            'maxLuas' => $maxLuas,
            'keyword' => $keyword,
            'title' => 'Properti | IniProperti',
            'mtDesk' => 'Agen properti terbaik dengan proses yang transparan dan terpercaya.',
            'mtKey' => 'agen, properti, terbaik',
            'mtUrl' => base_url('properti'),
            'mtImg' => base_url('visit/img/ini-properti.png'),
        ];

        return view('visit/properti/properti', $data);
    }

    public function detail($prop_slug): string
    {
        $prop = $this->PropModel->getAllPropBySlug($prop_slug);

        $data = [
            'prop' => $prop,
            'allProp' => $this->PropModel->getAllPropWithTipe(),
            'allIklan' => $this->IklanModel->semuaIklan(),
            'active' => 'properti',
            'isIndexPage' => false,
            'breadcrumbs' => [
                ['label' => 'Beranda', 'url' => '/'],
                ['label' => 'Properti', 'url' => '/properti'],
                ['label' => $prop['prop_nm'], 'url' => null],
            ],
            'title' => $prop['prop_nm'],
            'mtDesk' => htmlspecialchars($prop['prop_isi'], ENT_QUOTES, 'UTF-8'),
            'mtKey' => htmlspecialchars($prop['prop_isi'], ENT_QUOTES, 'UTF-8'),
            'mtUrl' => base_url('properti/' . $prop['prop_slug']),
            'mtImg' => base_url('visit/img/properti/' . $prop['prop_img1']),

        ];

        return view('visit/properti/detail-properti', $data);
    }

    public function search()
    {
        // Ambil input dari form pencarian
        $prop_almt = $this->request->getVar('prop_almt');
        $tipe_id = $this->request->getVar('tipe_id');
        $prop_hrg = $this->request->getVar('prop_hrg');

        // Bersihkan format Rupiah dari input `prop_hrg`
        $prop_hrg_cleaned = str_replace(['Rp.', '.', ','], '', $prop_hrg);

        $perPage = 12; // Jumlah item per halaman

        // Ambil hasil pencarian properti berdasarkan filter dengan paginasi
        $searchResults = $this->PropModel->getSearchPropWithTipe($perPage, $prop_almt, $tipe_id, $prop_hrg_cleaned);

        // Ambil data tipe
        $allTipeList = $this->TipeModel->semuaTipe();

        // Ubah menjadi array asosiatif dengan tipe_id sebagai kunci
        $allTipe = [];
        foreach ($allTipeList as $tipe) {
            $allTipe[$tipe['tipe_id']] = $tipe;
        }

        // Tentukan label breadcrumb ketiga sesuai dengan hasil pencarian
        $searchLabel = '';
        if (!empty($prop_almt)) {
            $searchLabel .= $prop_almt;
        }
        if (!empty($tipe_id) && isset($allTipe[$tipe_id])) {
            $searchLabel .= (!empty($searchLabel) ? ' - ' : '') . $allTipe[$tipe_id]['tipe_nm'];
        }
        if (!empty($prop_hrg_cleaned)) {
            $searchLabel .= (!empty($searchLabel) ? ' - ' : '') . 'Rp. ' . number_format($prop_hrg_cleaned, 0, ',', '.');
        }
        if (empty($searchLabel)) {
            $searchLabel = 'Hasil Pencarian';
        }

        $data = [
            'allProp' => $searchResults['news'],
            'allIklan' => $this->IklanModel->semuaIklan(),
            'allTipe' => $allTipe,
            'pager' => $searchResults['pager'],
            'active' => 'properti',
            'isIndexPage' => false,
            'breadcrumbs' => [
                ['label' => 'Beranda', 'url' => '/'],
                ['label' => 'Properti', 'url' => '/properti'],
                ['label' => $searchLabel, 'url' => null],
            ],
            'title' => 'Properti | IniProperti',
            'mtDesk' => 'Agen properti terbaik dengan proses yang transparan dan terpercaya.',
            'mtKey' => 'agen, properti, terbaik',
            'mtUrl' => base_url('properti'),
            'mtImg' => base_url('visit/img/ini-properti.png'),
        ];

        return view('visit/properti/search', $data);
    }


    public function prop(): string
    {
        $data = [
            'allProp' => $this->PropModel->getAllPropWithTipe(),
            'jmlProp' => $this->PropModel->hitungSemuaProp(),
            'title' => 'Properti',
            'breadcrumbs' => [
                ['label' => 'Dashboard', 'url' => '/dashboard'],
                ['label' => 'Properti', 'url' => null],
            ],
            'active' => 'data_prop',
        ];

        return view('admin/properti/data_prop', $data);
    }

    public function tambahProp(): string
    {
        $data = [
            'tipe' => $this->TipeModel->semuaTipe(),
            'title' => 'Properti',
            'breadcrumbs' => [
                ['label' => 'Dashboard', 'url' => '/dashboard'],
                ['label' => 'Properti', 'url' => '/properti/data-properti'],
                ['label' => 'Tambah Properti', 'url' => null],
            ],
            'active' => 'tmbh_prop',
        ];

        return view('admin/properti/tmbh_prop', $data);
    }

    public function simpanProp()
    {
        $prop_nm = $this->request->getVar('prop_nm');
        $prop_slug = url_title($prop_nm, '-', true);

        $propImages = [];
        for ($i = 1; $i <= 6; $i++) {
            $propImg = $this->request->getFile("prop_img{$i}");
            if ($propImg->getError() == 4) {
                $propImages["prop_img{$i}"] = 'default.png';
            } else {
                $newImageName = $propImg->getRandomName();
                $propImages["prop_img{$i}"] = $newImageName;
                $propImg->move('visit/img/properti', $newImageName);
            }
        }

        $data = [
            'prop_nm' => $prop_nm,
            'prop_slug' => $prop_slug,
            'tipe_id' => $this->request->getVar('tipe_id'),
            'prop_lb' => $this->request->getVar('prop_lb'),
            'prop_lt' => $this->request->getVar('prop_lt'),
            'prop_kt' => $this->request->getVar('prop_kt'),
            'prop_km' => $this->request->getVar('prop_km'),
            'prop_almt' => $this->request->getVar('prop_almt'),
            'prop_kd_almt' => $this->request->getVar('prop_kd_almt'),
            'prop_isi' => $this->request->getVar('prop_isi'),
            'prop_hrg' => $this->request->getVar('prop_hrg'),
            'prop_kpr' => $this->request->getVar('prop_kpr'),
            'prop_bunga' => $this->request->getVar('prop_bunga'),
            'prop_info_kpr' => $this->request->getVar('prop_info_kpr'),
        ];

        $data = array_merge($data, $propImages);
        $this->PropModel->save($data);

        session()->setFlashdata([
            'pesan' => 'Data berhasil ditambahkan.',
            'warna' => 'alert-success'
        ]);

        return redirect()->to('/properti/data-properti');
    }

    public function ubahProp($prop_id): string
    {
        $data = [
            'selectTipe' => $this->PropModel->getTipeByPropId($prop_id),
            'tipe' => $this->TipeModel->semuaTipe(),
            'prop' => $this->PropModel->getPropById($prop_id),
            'title' => 'Properti',
            'breadcrumbs' => [
                ['label' => 'Dashboard', 'url' => '/dashboard'],
                ['label' => 'Properti', 'url' => '/properti/data-properti'],
                ['label' => 'Ubah Properti', 'url' => null],
            ],
            'active' => 'data_prop',
        ];

        return view('admin/properti/ubah_prop', $data);
    }

    public function updateProp($prop_id)
    {
        $prop_nm = $this->request->getVar('prop_nm');
        $prop_slug = url_title($prop_nm, '-', true);

        $prop = $this->PropModel->find($prop_id);
        $tipeId = $this->request->getVar('tipe_id');
        if (!$tipeId) {
            $tipeId = $this->TipeModel->find($prop['tipe_id'])['tipe_id'];
        }

        $propImages = [];
        for ($i = 1; $i <= 6; $i++) {
            $propImg = $this->request->getFile("prop_img{$i}");
            if ($propImg->getError() == 4) {
                $propImages["prop_img{$i}"] = $this->request->getVar("imgLama{$i}");
            } else {
                $newImageName = $propImg->getRandomName();
                $propImages["prop_img{$i}"] = $newImageName;
                $propImg->move('visit/img/properti', $newImageName);
                if ($this->request->getVar("imgLama{$i}") != 'default.png') {
                    unlink('visit/img/properti/' . $this->request->getVar("imgLama{$i}"));
                }
            }
        }

        $data = [
            'prop_id' => $prop_id,
            'prop_nm' => $prop_nm,
            'prop_slug' => $prop_slug,
            'tipe_id' => $tipeId,
            'prop_lb' => $this->request->getVar('prop_lb'),
            'prop_lt' => $this->request->getVar('prop_lt'),
            'prop_kt' => $this->request->getVar('prop_kt'),
            'prop_km' => $this->request->getVar('prop_km'),
            'prop_almt' => $this->request->getVar('prop_almt'),
            'prop_kd_almt' => $this->request->getVar('prop_kd_almt'),
            'prop_isi' => $this->request->getVar('prop_isi'),
            'prop_hrg' => $this->request->getVar('prop_hrg'),
            'prop_kpr' => $this->request->getVar('prop_kpr'),
            'prop_bunga' => $this->request->getVar('prop_bunga'),
            'prop_info_kpr' => $this->request->getVar('prop_info_kpr'),
        ];

        $data = array_merge($data, $propImages);
        $this->PropModel->save($data);

        session()->setFlashdata([
            'pesan' => 'Data berhasil diperbarui.',
            'warna' => 'alert-success'
        ]);

        return redirect()->to('/properti/data-properti');
    }

    public function hapusProp($prop_id)
    {
        $PropModel = $this->PropModel->getPropById($prop_id);

        for ($i = 1; $i <= 6; $i++) {
            $propImg = $PropModel["prop_img$i"];
            if (!empty($propImg) && $propImg != 'default.png') {
                $filePath = 'visit/img/properti/' . $propImg;
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
        }

        $this->PropModel->delete($prop_id);

        session()->setFlashdata([
            'pesan' => 'Data berhasil dihapus.',
            'warna' => 'alert-danger'
        ]);

        return redirect()->to('/properti/data-properti');
    }
}
