<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LicenseModel;

class LicenseController extends Controller
{
    public function __construct(){
        $this -> LicenseModel= new LicenseModel();
    }
    public function index(){
        $data=[
            'license' => $this->LicenseModel->allData(),
        ];
        return view('v_license', $data);
    }
    public function detail($id_license){
        if (!$this->LicenseModel->detailData($id_license)) {
            abort(404);
        }
        $data=[
            'license'=> $this->LicenseModel->detailData($id_license),
        ];
        return view('v_detailLicense',$data);
    }
}
