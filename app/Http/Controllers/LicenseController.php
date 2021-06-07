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
    public function add(){
        return view('v_addLicense');
    }
    public function insert(){
        Request()->validate([
            'soft_name' => 'required',
            'manu' => 'required',
            'key' => 'required',
            'lcs_name' => 'required',
            'lcs_email' => 'required',
            'purchs_date' => 'required',
            'exp_date' => 'required',
            'purchs_cost' => 'required'
        ],[
            'soft_name.required'=> 'Kolom ini Wajib Diisi !!!', 
            'manu.required'=> 'Kolom ini Wajib Diisi !!!',
            'key.required'=> 'Kolom ini Wajib Diisi !!!',
            'lcs_name.required'=> 'Kolom ini Wajib Diisi !!!',
            'lcs_email.required'=> 'Kolom ini Wajib Diisi !!!',
            'purchs_date.required'=> 'Kolom ini Wajib Diisi !!!',
            'exp_date.required'=> 'Kolom ini Wajib Diisi !!!',
            'purchs_cost.required' => 'Kolom ini Wajib Diisi !!!'
        ]);

        //Jika validasi oke lanjut simpan data 
        $data = [
            'soft_name' => Request()->soft_name,
            'manufacturer' => Request()->manu,
            'license_key' => Request()->key,
            'lcs_name' => Request()->lcs_name,
            'lcs_email' => Request()->lcs_email,
            'purchs_date' => Request()->purchs_date,
            'exp_date' => Request()->exp_date,
            'purchs_cost' => Request()->purchs_cost,
            'category' => Request()->category,
            'note' => Request()->note,
        ];
        $this->LicenseModel->addData($data);
        return redirect()->route('license')->with('pesan','Data Berhasil Ditambahkan !!!');
    }
}
