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
}
