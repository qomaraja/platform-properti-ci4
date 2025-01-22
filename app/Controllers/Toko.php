<?php

namespace App\Controllers;

use App\Models\KatModel;
use App\Models\PlatModel;
use App\Models\TokoModel;
use App\Models\IklanModel;


class Toko extends BaseController
{
    protected $KatModel;
    protected $PlatModel;
    protected $TokoModel;
    protected $IklanModel;

    public function __construct()
    {
        $this->KatModel = new KatModel();
        $this->PlatModel = new PlatModel();
        $this->TokoModel = new TokoModel();
        $this->IklanModel = new IklanModel();
    }
    public function index(): string
    {
        // Ambil parameter filter dari query string
        $keyword = $this->request->getVar('keyword');
        $order = $this->request->getVar('order') ?? 'terbaru';
        $kat_nm = $this->request->getVar('kat_nm') ?? 'semua';
        $plat_nm = $this->request->getVar('plat_nm') ?? 'semua';

        // Jika tidak ada keyword, ambil data toko sesuai filter
        $allToko = $this->TokoModel
            ->getAllToko(
                12,
                $order,
                $kat_nm,
                $plat_nm,
                $keyword,
            )['news'];

        $data = [
            'allToko' => $allToko,
            'allKat' => $this->KatModel->semuaKat(),
            'allPlat' => $this->PlatModel->semuaPlat(),
            'allIklan' => $this->IklanModel->semuaIklan(),
            'pager' => $this->TokoModel->pager,
            'active' => 'toko',
            'isIndexPage' => false,
            'breadcrumbs' => [
                ['label' => 'Beranda', 'url' => '/'],
                ['label' => 'Toko', 'url' => null],
            ],
            'selectedOrder' => $order,
            'selectedKat' => $kat_nm,
            'selectedPlat' => $plat_nm,
            'keyword' => $keyword,
            'title' => 'Toko | IniProperti',
            'mtDesk' => 'Agen Properti terbaik dengan proses yang transparan dan terpercaya.',
            'mtKey' => 'agen, properti, terbaik',
            'mtUrl' => base_url('toko'),
            'mtImg' => base_url('visit/img/ini-properti.png'),
        ];

        return view('visit/toko/toko', $data);
    }

    public function toko(): string
    {
        $data = [
            'allToko' => $this->TokoModel->getAllTokoWithKatAndPlat(),
            'jmlToko' => $this->TokoModel->hitungSemuaToko(),
            'title' => 'Toko',
            'breadcrumbs' => [
                ['label' => 'Dashboard', 'url' => '/dashboard'],
                ['label' => 'toko', 'url' => null],
            ],
            'active' => 'data_toko',
        ];

        return view('admin/toko/data_toko', $data);
    }

    public function tambahToko(): string
    {
        $data = [
            'kat' => $this->KatModel->semuaKat(),
            'plat' => $this->PlatModel->semuaPlat(),
            'title' => 'Toko',
            'breadcrumbs' => [
                ['label' => 'Dashboard', 'url' => '/dashboard'],
                ['label' => 'toko', 'url' => '/toko/data-toko'],
                ['label' => 'Tambah toko', 'url' => null],
            ],
            'active' => 'tmbh_toko',
        ];

        return view('admin/toko/tmbh_toko', $data);
    }

    public function simpanToko()
    {
        $tokoImg = $this->request->getFile('toko_img');
        if ($tokoImg->getError() == 4) {
            $tokoImages['toko_img'] = 'default.png';
        } else {
            $newImageName = $tokoImg->getRandomName();
            $tokoImages['toko_img'] = $newImageName;
            $tokoImg->move('visit/img/toko', $newImageName);
        }

        $data = [
            'toko_jdl' => $this->request->getVar('toko_jdl'),
            'kat_id' => $this->request->getVar('kat_id'),
            'plat_id' => $this->request->getVar('plat_id'),
            'toko_link' => $this->request->getVar('toko_link'),
            'toko_hrg' => $this->request->getVar('toko_hrg'),
            'toko_img' => $tokoImages,
        ];

        $this->TokoModel->save($data);

        session()->setFlashdata([
            'pesan' => 'Data berhasil ditambahkan.',
            'warna' => 'alert-success'
        ]);

        return redirect()->to('/toko/data-toko');
    }

    public function ubahToko($toko_id): string
    {
        $data = [
            'selectKat' => $this->TokoModel->getKatByTokoId($toko_id),
            'selectPlat' => $this->TokoModel->getPlatByTokoId($toko_id),
            'kat' => $this->KatModel->semuaKat(),
            'plat' => $this->PlatModel->semuaPlat(),
            'toko' => $this->TokoModel->getTokoById($toko_id),
            'title' => 'Toko',
            'breadcrumbs' => [
                ['label' => 'Dashboard', 'url' => '/dashboard'],
                ['label' => 'toko', 'url' => '/toko/data-toko'],
                ['label' => 'Ubah toko', 'url' => null],
            ],
            'active' => 'data_toko',
        ];

        return view('admin/toko/ubah_toko', $data);
    }

    public function updateToko($toko_id)
    {
        $toko = $this->TokoModel->find($toko_id);
        $katId = $this->request->getVar('kat_id');
        if (!$katId) {
            $katId = $this->KatModel->find($toko['kat_id'])['kat_id'];
        }

        $platId = $this->request->getVar('plat_id');
        if (!$platId) {
            $platId = $this->PlatModel->find($toko['plat_id'])['plat_id'];
        }

        $tokoImg = $this->request->getFile('toko_img');
        if ($tokoImg->getError() == 4) {
            $tokoImages = $this->request->getVar('imgLama');
        } else {
            $tokoImages = $tokoImg->getRandomName();
            $tokoImg->move('visit/img/toko', $tokoImages);
            if ($this->request->getVar('imgLama') != 'default.png') {
                unlink('visit/img/toko/' . $this->request->getVar('imgLama'));
            }
        }

        $data = [
            'toko_id' => $toko_id,
            'toko_jdl' => $this->request->getVar('toko_jdl'),
            'kat_id' => $katId,
            'plat_id' => $platId,
            'toko_link' => $this->request->getVar('toko_link'),
            'toko_hrg' => $this->request->getVar('toko_hrg'),
            'toko_img' => $tokoImages,
        ];

        $this->TokoModel->save($data);

        session()->setFlashdata([
            'pesan' => 'Data berhasil diperbarui.',
            'warna' => 'alert-warning'
        ]);

        return redirect()->to('/toko/data-toko');
    }

    public function hapusToko($toko_id)
    {
        $tokoModel = $this->TokoModel->getTokoById($toko_id);

        if ($tokoModel['toko_img'] != 'default.png') {
            unlink('visit/img/toko/' . $tokoModel['toko_img']);
        }

        $this->TokoModel->delete($toko_id);

        session()->setFlashdata([
            'pesan' => 'Data berhasil dihapus.',
            'warna' => 'alert-danger'
        ]);

        return redirect()->to('/toko/data-toko');
    }
}
