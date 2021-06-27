<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use Illuminate\Support\Carbon;

class UsersController extends Controller
{
    public function __construct(){
        // $this->middleware('auth');
        $this -> UsersModel= new UsersModel();
    }
    public function index(){
        $data=[
            'users' => $this->UsersModel->allData(),
        ];
        return view('v_users', $data);
    }
    public function detail($id){
        if (!$this->UsersModel->detailData($id)) {
            abort(404);
        }
        $data=[
            'users'=> $this->UsersModel->detailData($id),
        ];
        return view('v_detailUsers',$data);
    }
    public function add(){
        return view('v_regist');
    }
    public function insert(){
        Request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ],[
            'name.required'=> 'Kolom ini Wajib Diisi !!!', 
            'email.required'=> 'Kolom ini Wajib Diisi !!!',
            'password.required'=> 'Kolom ini Wajib Diisi !!!',
            'password_confirmation.required'=> 'Kolom ini Wajib Diisi !!!'
        ]);

        //Jika validasi oke lanjut simpan data 
        $data = [
            'name' => Request()->name,
            'email' => Request()->email,
            'password' => bcrypt(Request()->password),
            "created_at"=> Carbon::now(),
            "updated_at"=> now()
        ];
        $this->UsersModel->addData($data);
        return redirect()->route('users')->with('pesanTambah','Data Berhasil Ditambahkan !!!');
    }

    public function edit($id){
        if (!$this->UsersModel->detailData($id)) {
            abort(404);
        }
        $data=[
            'users'=> $this->UsersModel->detailData($id),
        ];

        return view('v_editusers',$data);
    }
    public function update($id){
        Request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed']
        ],[
            'name.required'=> 'Kolom ini Wajib Diisi !!!', 
            'email.required'=> 'Kolom ini Wajib Diisi !!!',
            'password.required'=> 'Kolom ini Wajib Diisi !!!',
            'password_confirmation.required'=> 'Kolom ini Wajib Diisi !!!'
        ]);

        //Jika validasi oke lanjut simpan data 
        $data = [
            'name' => Request()->name,
            'email' => Request()->email,
            "updated_at"=> now()
        ];
        $this->UsersModel->editData($id, $data);
        return redirect()->route('users')->with('pesanUpdate','Data Berhasil Diupdate !!!');
    }
    public function delete($id)
    {
        $this->UsersModel->deleteData($id);
        return redirect()->route('users')->with('pesanDelete','Data Berhasil Dihapus !!!');
    }
}
