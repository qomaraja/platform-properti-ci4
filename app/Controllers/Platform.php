<?php

namespace App\Controllers;

use App\Models\PlatModel;

class Platform extends BaseController
{
    protected $PlatModel;

    public function __construct()
    {
        $this->PlatModel = new PlatModel();
    }

    public function index(): string
    {
        $data = [
            'allPlat' => $this->PlatModel->semuaPlat(),
            'jmlPlat' => $this->PlatModel->hitungSemuaPlat(),
            'title' => 'Platform',
            'breadcrumbs' => [
                ['label' => 'Dashboard', 'url' => '/dashboard'],
                ['label' => 'Platform', 'url' => null],
            ],
            'active' => 'data_plat',
        ];

        return view('admin/platform/data_plat', $data);
    }

    public function tambahPlat(): string
    {
        $data = [
            'title' => 'Platform',
            'breadcrumbs' => [
                ['label' => 'Dashboard', 'url' => '/dashboard'],
                ['label' => 'Platform', 'url' => '/platform'],
                ['label' => 'Tambah Platform', 'url' => null],
            ],
            'active' => 'tmbh_plat',
        ];

        return view('admin/platform/tmbh_plat', $data);
    }

    public function simpanPlat()
    {
        $this->PlatModel->save([
            'plat_nm' => $this->request->getVar('plat_nm'),
        ]);

        session()->setFlashdata([
            'pesan' => 'Data berhasil ditambahkan.',
            'warna' => 'alert-success'
        ]);

        return redirect()->to('/platform');
    }

    public function ubahPlat($plat_id): string
    {
        $data = [
            'platform' => $this->PlatModel->getPlatById($plat_id),
            'title' => 'Platform',
            'breadcrumbs' => [
                ['label' => 'Dashboard', 'url' => '/dashboard'],
                ['label' => 'Platform', 'url' => '/platform'],
                ['label' => 'Ubah Platform', 'url' => null],
            ],
            'active' => 'tmbh_plat',
        ];

        return view('admin/platform/ubah_plat', $data);
    }

    public function updatePlat($plat_id)
    {
        $this->PlatModel->save([
            'plat_id' => $plat_id,
            'plat_nm' => $this->request->getVar('plat_nm'),
        ]);

        session()->setFlashdata([
            'pesan' => 'Data berhasil diperbaharui.',
            'warna' => 'alert-warning'
        ]);

        return redirect()->to('/platform');
    }

    public function hapusPlat($plat_id)
    {
        $this->PlatModel->delete($plat_id);

        session()->setFlashdata([
            'pesan' => 'Data berhasil dihapus.',
            'warna' => 'alert-danger'
        ]);

        return redirect()->to('/platform');
    }
}
