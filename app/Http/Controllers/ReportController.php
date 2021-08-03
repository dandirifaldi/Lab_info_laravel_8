<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangModel;
use App\Models\LicenseModel;
use App\Models\MaintenanceModel;
use App\Models\RusakModel;
class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this -> LicenseModel= new LicenseModel();
        $this -> BarangModel= new BarangModel();
        $this -> MaintenanceModel= new MaintenanceModel();
        $this -> RusakModel= new RusakModel();
    }
    public function index(){
        $ls = $this->LicenseModel->allData()->count();
        $b = $this->BarangModel->allData()->count();
        $mn = $this->MaintenanceModel->allData()->count();
        $brr = $this->RusakModel->allData()->count();
        $bk = $this->BarangModel->allDataBuku()->count();
        $bf = $this->BarangModel->allDataFurniture()->count();
        // $br=MaModel::withCount('id_license');
        return view('v_report', ['barang'=>$b+$bk+$bf,'license'=>$ls,'maintenance'=>$mn,'rusak'=>$brr]);
    }
}
