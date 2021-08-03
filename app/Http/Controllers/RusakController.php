<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RusakModel;

class RusakController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this -> RusakModel= new RusakModel();
    }

// BARANG HARDWARE-------------------------------------------------------------------------------------
    public function index(){
        $data=$this->RusakModel->allData();
        $dataBuku=$this->RusakModel->allDataBuku();
        $dataFurniture=$this->RusakModel->allDataFurniture();
        return view('v_barangRusak', ['barang'=>$data, 'buku'=>$dataBuku, 'furniture'=>$dataFurniture]);
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

    public function edit($id_barang){
        if (!$this->BarangModel->detailData($id_barang)) {
            abort(404);
        }
        $data=[
            'barang'=> $this->BarangModel->detailData($id_barang),
        ];

        return view('v_editBarang',$data);
    }

    public function update($id_barang){
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
        $this->BarangModel->editData($id_barang, $data);
        $data2 = [
            'nama_toko' => Request()->toko,
            'alamat_toko' => Request()->alamat_toko ? Request()->alamat_toko : '',
            'no_telp_toko' => Request()->no_toko ? Request()->no_toko : '',
            // 'id_barang' => Request()->
            'id_barang' => Request()->id_barang
        ];
        $this->BarangModel->editDataDetail($id_barang, $data2);

        return redirect()->route('barang')->with('pesanUpdate','Data Berhasil Diupdate !!!');
    }


     public function delete($id_barang)
    {
        $this->BarangModel->deleteData($id_barang);
        $this->BarangModel->deleteDataDetail($id_barang);
        return redirect()->route('barang')->with('pesanDelete','Data Berhasil Dihapus !!!');
    }


    //BUKU----------------------------------------------------------------------------------------------

    public function addBuku(){
        return view('v_addBuku');
    }

    public function insertBuku(){
        Request()->validate([
            'judul' => 'required',
            'tipe' => 'required',
            'penulis' => 'required',
            'tahun' => 'required',
            'tgl_masuk' => 'required',
            'jumlah' => 'required',
            // 'harga' => 'required',
            'lok' => 'required',
            // 'toko' => 'required'
        ],[
            'judul.required'=> 'Kolom ini Wajib Diisi !!!', 
            'penulis.required'=> 'Kolom ini Wajib Diisi !!!',
            'tipe.required'=> 'Kolom ini Wajib Diisi !!!',
            'jumlah.required'=> 'Kolom ini Wajib Diisi !!!',
            'tgl_masuk.required'=> 'Kolom ini Wajib Diisi !!!',
            'tahun.required'=> 'Kolom ini Wajib Diisi !!!',
            // 'harga.required'=> 'Kolom ini Wajib Diisi !!!',
            'lok.required'=> 'Kolom ini Wajib Diisi !!!',
            // 'toko.required' => 'Kolom ini Wajib Diisi !!!'
        ]);

        //Jika validasi oke lanjut simpan data 
        $data = [
            'judul' => Request()->judul,
            'tipe' => Request()->tipe,
            'jumlah_buku' => Request()->jumlah,
            'tgl_masuk' => Request()->tgl_masuk,
            'tahun' => Request()->tahun,
            'penulis' => Request()->penulis,
            // 'harga' => Request()->harga,
            'lokasi' => Request()->lok,
            'keterangan' => Request()->ket ? Request()->ket : '',
            'kondisi' => 'Baik',
            'id_status' => '1'

        ];
        $this->BarangModel->addDataBuku($data);
        return redirect()->route('barang')->with('pesanTambah','Data Buku Berhasil Ditambahkan !!!');
    }
     public function detailBuku($id_buku){
        if (!$this->BarangModel->detailDataBuku($id_buku)) {
            abort(404);
        }
        $data=[
            'buku'=> $this->BarangModel->detailDataBuku($id_buku)
        ];
        return view('v_detailBuku',$data);
    }
     public function deleteBuku($id_buku)
    {
        $this->BarangModel->deleteDataBuku($id_buku);
        return redirect()->route('barang')->with('pesanDelete','Data Buku Berhasil Dihapus !!!');
    }
    public function editBuku($id_buku){
        if (!$this->BarangModel->detailDataBuku($id_buku)) {
            abort(404);
        }
        $data=[
            'buku'=> $this->BarangModel->detailDataBuku($id_buku),
        ];

        return view('v_editBuku',$data);
    }
    public function updateBuku($id_buku){
        Request()->validate([
            'judul' => 'required',
            'tipe' => 'required',
            'penulis' => 'required',
            'tahun' => 'required',
            'tgl_masuk' => 'required',
            'jumlah' => 'required',
            // 'harga' => 'required',
            'lok' => 'required',
            // 'toko' => 'required'
        ],[
            'judul.required'=> 'Kolom ini Wajib Diisi !!!', 
            'penulis.required'=> 'Kolom ini Wajib Diisi !!!',
            'tipe.required'=> 'Kolom ini Wajib Diisi !!!',
            'jumlah.required'=> 'Kolom ini Wajib Diisi !!!',
            'tgl_masuk.required'=> 'Kolom ini Wajib Diisi !!!',
            'tahun.required'=> 'Kolom ini Wajib Diisi !!!',
            // 'harga.required'=> 'Kolom ini Wajib Diisi !!!',
            'lok.required'=> 'Kolom ini Wajib Diisi !!!',
            // 'toko.required' => 'Kolom ini Wajib Diisi !!!'
        ]);

        //Jika validasi oke lanjut simpan data 
        $data = [
            'judul' => Request()->judul,
            'tipe' => Request()->tipe,
            'jumlah_buku' => Request()->jumlah,
            'tgl_masuk' => Request()->tgl_masuk,
            'tahun' => Request()->tahun,
            'penulis' => Request()->penulis,
            // 'harga' => Request()->harga,
            'lokasi' => Request()->lok,
            'keterangan' => Request()->ket ? Request()->ket : '',
            'kondisi' => 'Baik',
            'id_status' => '1'
        ];
        $this->BarangModel->editDataBuku($id_buku, $data);
        return redirect()->route('barang')->with('pesanUpdate','Data Buku Berhasil Diupdate !!!');
    }
    // FURNITURE --------------------------------------------------------------------------------------
    public function addFurniture(){
        return view('v_addFurniture');
    }

    public function insertFurniture(){
        Request()->validate([
            'merk' => 'required',
            'category' => 'required',
            'tgl_masuk' => 'required',
            'jumlah' => 'required',
            'lok' => 'required',
            // 'toko' => 'required'
        ],[
            'merk.required'=> 'Kolom ini Wajib Diisi !!!', 
            'category.required'=> 'Kolom ini Wajib Diisi !!!',
            // 'tipe.required'=> 'Kolom ini Wajib Diisi !!!',
            'jumlah.required'=> 'Kolom ini Wajib Diisi !!!',
            'tgl_masuk.required'=> 'Kolom ini Wajib Diisi !!!',
            // 'tahun.required'=> 'Kolom ini Wajib Diisi !!!',
            // 'harga.required'=> 'Kolom ini Wajib Diisi !!!',
            'lok.required'=> 'Kolom ini Wajib Diisi !!!',
            // 'toko.required' => 'Kolom ini Wajib Diisi !!!'
        ]);

        //Jika validasi oke lanjut simpan data 
        $data = [
            'merk' => Request()->merk,
            'category' => Request()->category,
            'jumlah' => Request()->jumlah,
            'tgl_masuk' => Request()->tgl_masuk,
            // 'tahun' => Request()->tahun,
            // 'penulis' => Request()->penulis,
            // 'harga' => Request()->harga,
            'lokasi' => Request()->lok,
            'keterangan' => Request()->ket ? Request()->ket : '',
            'kondisi' => 'Baik',
            'id_status' => '1'

        ];
        $this->BarangModel->addDataFurniture($data);
        return redirect()->route('barang')->with('pesanTambah','Data Furniture Berhasil Ditambahkan !!!');
    }
     public function detailFurniture($id_furniture){
        if (!$this->BarangModel->detailDataFurniture($id_furniture)) {
            abort(404);
        }
        $data=[
            'furniture'=> $this->BarangModel->detailDataFurniture($id_furniture)
        ];
        return view('v_detailFurniture',$data);
    }
     public function deleteFurniture($id_furniture)
    {
        $this->BarangModel->deleteDataFurniture($id_furniture);
        return redirect()->route('barang')->with('pesanDelete','Data Furniture Berhasil Dihapus !!!');
    }
    public function editFurniture($id_furniture){
        if (!$this->BarangModel->detailDataFurniture($id_furniture)) {
            abort(404);
        }
        $data=[
            'furniture'=> $this->BarangModel->detailDataFurniture($id_furniture),
        ];

        return view('v_editFurniture',$data);
    }
    public function updateFurniture($id_furniture){
        Request()->validate([
            'merk' => 'required',
            'category' => 'required',
            'tgl_masuk' => 'required',
            'jumlah' => 'required',
            'lok' => 'required',
            // 'toko' => 'required'
        ],[
            'merk.required'=> 'Kolom ini Wajib Diisi !!!', 
            'category.required'=> 'Kolom ini Wajib Diisi !!!',
            // 'tipe.required'=> 'Kolom ini Wajib Diisi !!!',
            'jumlah.required'=> 'Kolom ini Wajib Diisi !!!',
            'tgl_masuk.required'=> 'Kolom ini Wajib Diisi !!!',
            // 'tahun.required'=> 'Kolom ini Wajib Diisi !!!',
            // 'harga.required'=> 'Kolom ini Wajib Diisi !!!',
            'lok.required'=> 'Kolom ini Wajib Diisi !!!',
            // 'toko.required' => 'Kolom ini Wajib Diisi !!!'
        ]);

        //Jika validasi oke lanjut simpan data 
        $data = [
            'merk' => Request()->merk,
            'category' => Request()->category,
            'jumlah' => Request()->jumlah,
            'tgl_masuk' => Request()->tgl_masuk,
            // 'tahun' => Request()->tahun,
            // 'penulis' => Request()->penulis,
            // 'harga' => Request()->harga,
            'lokasi' => Request()->lok,
            'keterangan' => Request()->ket ? Request()->ket : '',
            'kondisi' => 'Baik',
            'id_status' => '1'

        ];
        $this->BarangModel->editDataFurniture($id_furniture, $data);
        return redirect()->route('barang')->with('pesanUpdate','Data Furniture Berhasil Diupdate !!!');
    }
}
