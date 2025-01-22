<?php

namespace App\Controllers;

use App\Models\TipeModel;
use App\Models\PropModel;
use App\Models\KatModel;
use App\Models\PlatModel;
use App\Models\TokoModel;
use App\Models\IklanModel;

class Dashboard extends BaseController
{
    protected $TipeModel;
    protected $PropModel;
    protected $KatModel;
    protected $PlatModel;
    protected $TokoModel;
    protected $IklanModel;

    public function __construct()
    {
        $this->TipeModel = new TipeModel();
        $this->PropModel = new PropModel();
        $this->KatModel = new KatModel();
        $this->PlatModel = new PlatModel();
        $this->TokoModel = new TokoModel();
        $this->IklanModel = new IklanModel();
    }

    public function index(): string
    {
        $data = [
            'jmlTipe' => $this->TipeModel->hitungSemuaTipe(),
            'jmlProperti' => $this->PropModel->hitungSemuaProp(),
            'jmlKategori' => $this->KatModel->hitungSemuaKat(),
            'jmlPlatform' => $this->PlatModel->hitungSemuaPlat(),
            'jmlToko' => $this->TokoModel->hitungSemuaToko(),
            'jmlIklan' => $this->IklanModel->hitungSemuaIklan(),
            'title' => 'Dashboard',
            'breadcrumbs' => [
                ['label' => 'Dashboard', 'url' => null],
            ],
            'active' => 'dashboard',
        ];

        return view('admin/dashboard', $data);
    }
}
