<?php

namespace App\Controllers;

use App\Models\IklanModel;

class Iklan extends BaseController
{
    protected $IklanModel;

    public function __construct()
    {
        $this->IklanModel = new IklanModel();
    }

    public function index(): string
    {
        $data = [
            'allIklan' => $this->IklanModel->semuaIklan(),
            'jmlIklan' => $this->IklanModel->hitungSemuaIklan(),
            'title' => 'Iklan',
            'breadcrumbs' => [
                ['label' => 'Dashboard', 'url' => '/dashboard'],
                ['label' => 'Iklan', 'url' => null],
            ],
            'active' => 'data_iklan',
        ];

        return view('admin/iklan/data_iklan', $data);
    }

    public function tambahIklan(): string
    {
        $data = [
            'title' => 'Iklan',
            'breadcrumbs' => [
                ['label' => 'Dashboard', 'url' => '/dashboard'],
                ['label' => 'Iklan', 'url' => '/iklan'],
                ['label' => 'Tambah Iklan', 'url' => null],
            ],
            'active' => 'tmbh_iklan',
        ];

        return view('admin/iklan/tmbh_iklan', $data);
    }

    public function simpanIklan()
    {
        $IklanImg = $this->request->getFile('iklan_img');
        if ($IklanImg->getError() == 4) {
            $IklanImages['iklan_img'] = 'default.png';
        } else {
            $newImageName = $IklanImg->getRandomName();
            $IklanImages['iklan_img'] = $newImageName;
            $IklanImg->move('visit/img/iklan', $newImageName);
        }

        $data = [
            'iklan_img' => $IklanImages,
            'iklan_link' => $this->request->getVar('iklan_link'),
        ];

        $this->IklanModel->save($data);

        session()->setFlashdata([
            'pesan' => 'Data berhasil ditambahkan.',
            'warna' => 'alert-success'
        ]);

        return redirect()->to('/iklan');
    }

    public function ubahIklan($iklan_id): string
    {
        $data = [
            'iklan' => $this->IklanModel->getIklanById($iklan_id),
            'title' => 'Iklan',
            'breadcrumbs' => [
                ['label' => 'Dashboard', 'url' => '/dashboard'],
                ['label' => 'Iklan', 'url' => '/iklan'],
                ['label' => 'Ubah Iklan', 'url' => null],
            ],
            'active' => 'data_iklan',
        ];

        return view('admin/iklan/ubah_iklan', $data);
    }

    public function updateIklan($iklan_id)
    {
        $IklanImg = $this->request->getFile('iklan_img');
        if ($IklanImg->getError() == 4) {
            $IklanImages = $this->request->getVar('imgLama');
        } else {
            $IklanImages = $IklanImg->getRandomName();
            $IklanImg->move('visit/img/iklan', $IklanImages);
            if ($this->request->getVar('imgLama') != 'default.png') {
                unlink('visit/img/iklan/' . $this->request->getVar('imgLama'));
            }
        }

        $data = [
            'iklan_id' => $iklan_id,
            'iklan_img' => $IklanImages,
            'iklan_link' => $this->request->getVar('iklan_link'),
        ];

        $this->IklanModel->save($data);

        session()->setFlashdata([
            'pesan' => 'Data berhasil diperbarui.',
            'warna' => 'alert-success'
        ]);

        return redirect()->to('/iklan');
    }

    public function hapusIklan($iklan_id)
    {
        $IklanModel = $this->IklanModel->getIklanById($iklan_id);

        if ($IklanModel['iklan_img'] != 'default.png') {
            unlink('visit/img/iklan/' . $IklanModel['iklan_img']);
        }

        $this->IklanModel->delete($iklan_id);

        session()->setFlashdata([
            'pesan' => 'Data berhasil dihapus.',
            'warna' => 'alert-danger'
        ]);

        return redirect()->to('/iklan');
    }
}
