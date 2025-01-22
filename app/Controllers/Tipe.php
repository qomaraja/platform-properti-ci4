<?php

namespace App\Controllers;

use App\Models\TipeModel;

class Tipe extends BaseController
{
    protected $TipeModel;

    public function __construct()
    {
        $this->TipeModel = new TipeModel();
    }

    public function index(): string
    {
        $data = [
            'allTipe' => $this->TipeModel->semuaTipe(),
            'jmlTipe' => $this->TipeModel->hitungSemuaTipe(),
            'title' => 'Tipe',
            'breadcrumbs' => [
                ['label' => 'Dashboard', 'url' => '/dashboard'],
                ['label' => 'Tipe', 'url' => null],
            ],
            'active' => 'data_tipe',
        ];

        return view('admin/tipe/data_tipe', $data);
    }

    public function tambahTipe(): string
    {
        $data = [
            'title' => 'Tipe',
            'breadcrumbs' => [
                ['label' => 'Dashboard', 'url' => '/dashboard'],
                ['label' => 'Tipe', 'url' => '/tipe'],
                ['label' => 'Tambah Tipe', 'url' => null],
            ],
            'active' => 'tmbh_tipe',
        ];

        return view('admin/tipe/tmbh_tipe', $data);
    }

    public function simpanTipe()
    {
        $this->TipeModel->save([
            'tipe_nm' => $this->request->getVar('tipe_nm'),
        ]);

        session()->setFlashdata([
            'pesan' => 'Data berhasil ditambahkan.',
            'warna' => 'alert-success'
        ]);

        return redirect()->to('/tipe');
    }

    public function ubahTipe($tipe_id): string
    {
        $data = [
            'tipe' => $this->TipeModel->getTipeById($tipe_id),
            'title' => 'Tipe',
            'breadcrumbs' => [
                ['label' => 'Dashboard', 'url' => '/dashboard'],
                ['label' => 'Tipe', 'url' => '/tipe'],
                ['label' => 'Ubah Tipe', 'url' => null],
            ],
            'active' => 'tmbh_tipe',
        ];

        return view('admin/tipe/ubah_tipe', $data);
    }

    public function updateTipe($tipe_id)
    {
        $this->TipeModel->save([
            'tipe_id' => $tipe_id,
            'tipe_nm' => $this->request->getVar('tipe_nm'),
        ]);

        session()->setFlashdata([
            'pesan' => 'Data berhasil diperbaharui.',
            'warna' => 'alert-warning'
        ]);

        return redirect()->to('/tipe');
    }

    public function hapusTipe($tipe_id)
    {
        $this->TipeModel->delete($tipe_id);

        session()->setFlashdata([
            'pesan' => 'Data berhasil dihapus.',
            'warna' => 'alert-danger'
        ]);

        return redirect()->to('/tipe');
    }
}
