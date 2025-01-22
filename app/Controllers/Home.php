<?php

namespace App\Controllers;

use App\Models\TipeModel;
use App\Models\PropModel;
use App\Models\TokoModel;
use App\Models\IklanModel;

class Home extends BaseController
{
    protected $TipeModel;
    protected $PropModel;
    protected $TokoModel;
    protected $IklanModel;

    public function __construct()
    {
        $this->TipeModel = new TipeModel();
        $this->PropModel = new PropModel();
        $this->TokoModel = new TokoModel();
        $this->IklanModel = new IklanModel();
    }

    public function index(): string
    {
        $data = [
            'allTipe' => $this->TipeModel->semuaTipe(),
            'allProp' => $this->PropModel->getAllPropWithTipe(),
            'allToko' => $this->TokoModel->getAllTokoWithKatAndPlat(),
            'allIklan' => $this->IklanModel->semuaIklan(),
            'active' => 'beranda',
            'isIndexPage' => true,
            'title' => 'Beranda | IniProperti',
            'mtDesk' => 'Agen properti terbaik dengan proses yang transparan dan terpercaya.',
            'mtKey' => 'agen, properti, terbaik',
            'mtUrl' => base_url(),
            'mtImg' => base_url('visit/img/ini-properti.png'),
        ];

        return view('visit/home', $data);
    }
}
