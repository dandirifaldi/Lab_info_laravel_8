<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangModel;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this -> BarangModel= new BarangModel();
    }

// BARANG HARDWARE
    public function index(){
        $data=$this->BarangModel->allData();
        $dataBuku=$this->BarangModel->allDataBuku();
        $dataFurniture=$this->BarangModel->allDataFurniture();
        return view('v_barang', ['barang'=>$data, 'buku'=>$dataBuku, 'furniture'=>$dataFurniture]);
    }

    public function add(){
        return view('v_addBarang');
    }
    public function insert(){
        Request()->validate([
            'serial' => 'required',
            'tipe' => 'required',
            'category' => 'required',
            'tgl_masuk' => 'required',
            'merk' => 'required',
            'harga' => 'required',
            'lok' => 'required',
            'toko' => 'required'
        ],[
            'serial.required'=> 'Kolom ini Wajib Diisi !!!', 
            'merk.required'=> 'Kolom ini Wajib Diisi !!!',
            'tipe.required'=> 'Kolom ini Wajib Diisi !!!',
            'category.required'=> 'Kolom ini Wajib Diisi !!!',
            'tgl_masuk.required'=> 'Kolom ini Wajib Diisi !!!',
            'harga.required'=> 'Kolom ini Wajib Diisi !!!',
            'lok.required'=> 'Kolom ini Wajib Diisi !!!',
            'toko.required' => 'Kolom ini Wajib Diisi !!!'
        ]);

        //Jika validasi oke lanjut simpan data 
        $data = [
            'serial_number' => Request()->serial,
            'type' => Request()->tipe,
            'category' => Request()->category,
            'tgl_masuk' => Request()->tgl_masuk,
            'manufacturer' => Request()->merk,
            'harga' => Request()->harga,
            'lokasi' => Request()->lok,
            'keterangan' => Request()->ket ? Request()->ket : '',
            'kondisi' => 'Baik',
            'id_status' => '1'

        ];
        $this->BarangModel->addData($data);
        $data2 = [
            'nama_toko' => Request()->toko,
            'alamat_toko' => Request()->alamat_toko ? Request()->alamat_toko : '',
            'no_telp_toko' => Request()->no_toko ? Request()->no_toko : '',
            // 'id_barang' => Request()->
            'id_barang' => $this->BarangModel->allDatad()
        ];
        $this->BarangModel->addDataDetail($data2);
        // $xyz = $user->xyz()->create($xyz_inputs);
        return redirect()->route('barang')->with('pesanTambah','Data Berhasil Ditambahkan !!!');
    }

    public function detail($id_barang){
        if (!$this->BarangModel->detailData($id_barang)) {
            abort(404);
        }
        $data=[
            'barang'=> $this->BarangModel->detailData($id_barang)
        ];
        return view('v_DetailBarangHard',$data);
    }
     public function delete($id_barang)
    {
        $this->BarangModel->deleteData($id_barang);
        return redirect()->route('barang')->with('pesanDelete','Data Berhasil Dihapus !!!');
    }
}
