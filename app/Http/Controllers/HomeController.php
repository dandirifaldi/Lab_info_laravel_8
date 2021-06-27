<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangModel;
use App\Models\LicenseModel;

// use App\Models\MaintenanceModel;
// use App\Models\BrokenModel;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this -> LicenseModel= new LicenseModel();
        $this -> BarangModel= new BarangModel();
    }
    public function index()
    {
        // $br=BarangModel::withCount('allData');
        $ls = $this->LicenseModel->allData()->count();
        $br = $this->BarangModel->allData()->count();
        $bk = $this->BarangModel->allDataBuku()->count();
        $bf = $this->BarangModel->allDataFurniture()->count();
        // $br=MaModel::withCount('id_license');
        return view('v_home', ['barang'=>$br+$bk+$bf,'license'=>$ls]);
    }

}
