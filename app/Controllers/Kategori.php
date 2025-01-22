<?php

namespace App\Controllers;

use App\Models\KatModel;

class Kategori extends BaseController
{
    protected $KatModel;

    public function __construct()
    {
        $this->KatModel = new KatModel();
    }

    public function index(): string
    {
        $data = [
            'allKat' => $this->KatModel->semuaKat(),
            'jmlKat' => $this->KatModel->hitungSemuaKat(),
            'title' => 'Kategori',
            'breadcrumbs' => [
                ['label' => 'Dashboard', 'url' => '/dashboard'],
                ['label' => 'Kategori', 'url' => null],
            ],
            'active' => 'data_kat',
        ];

        return view('admin/kategori/data_kat', $data);
    }

    public function tambahKat(): string
    {
        $data = [
            'title' => 'Kategori',
            'breadcrumbs' => [
                ['label' => 'Dashboard', 'url' => '/dashboard'],
                ['label' => 'Kategori', 'url' => '/kategori'],
                ['label' => 'Tambah Kategori', 'url' => null],
            ],
            'active' => 'tmbh_kat',
        ];

        return view('admin/kategori/tmbh_kat', $data);
    }

    public function simpanKat()
    {
        $this->KatModel->save([
            'kat_nm' => $this->request->getVar('kat_nm'),
        ]);

        session()->setFlashdata([
            'pesan' => 'Data berhasil ditambahkan.',
            'warna' => 'alert-success'
        ]);

        return redirect()->to('/kategori');
    }

    public function ubahKat($kat_id): string
    {
        $data = [
            'kategori' => $this->KatModel->getKatById($kat_id),
            'title' => 'Kategori',
            'breadcrumbs' => [
                ['label' => 'Dashboard', 'url' => '/dashboard'],
                ['label' => 'Kategori', 'url' => '/kategori'],
                ['label' => 'Ubah Kategori', 'url' => null],
            ],
            'active' => 'tmbh_kat',
        ];

        return view('admin/kategori/ubah_kat', $data);
    }

    public function updateKat($kat_id)
    {
        $this->KatModel->save([
            'kat_id' => $kat_id,
            'kat_nm' => $this->request->getVar('kat_nm'),
        ]);

        session()->setFlashdata([
            'pesan' => 'Data berhasil diperbaharui.',
            'warna' => 'alert-warning'
        ]);

        return redirect()->to('/kategori');
    }

    public function hapusKat($kat_id)
    {
        $this->KatModel->delete($kat_id);

        session()->setFlashdata([
            'pesan' => 'Data berhasil dihapus.',
            'warna' => 'alert-danger'
        ]);

        return redirect()->to('/kategori');
    }
}
