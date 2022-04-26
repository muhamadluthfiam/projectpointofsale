<?php
namespace App\Controller;

use App\Controllers\BaseController;

class Pegawai extends BaseController
{
    public function index()
    {
        return view('Pegawai/TabelBarang');
    }
}
