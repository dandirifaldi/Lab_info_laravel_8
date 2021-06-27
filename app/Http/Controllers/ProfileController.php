<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileModel;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;
// use App\Models\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this -> ProfileModel= new ProfileModel();
    }
    public function index($id){
        $data=$this->ProfileModel->detailUser($id);
        return view('v_profile', ['profile'=>$data]);
    }
    public function edit($id){
        if (!$this->ProfileModel->detailUser($id)) {
            abort(404);
        }
        $data=$this->ProfileModel->detailUser($id);
        return view('v_editProfile', ['profile'=>$data]);
    }
    public function update($id){
        Request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
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
        $this->ProfileModel->editProfile($id, $data);
        return redirect()->route('home')->with('pesanUpdate','Data Berhasil Diupdate !!!');
    }
    public function pass($id){
        if (!$this->ProfileModel->detailUser($id)) {
            abort(404);
        }
        $data=$this->ProfileModel->detailUser($id);
        return view('v_gantiPass', ['profile'=>$data]);
    }
    public function ganti($id){
        Request()->validate([
            'lama' => ['required', 'string', 'max:255',new MatchOldPassword],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
        ],[
            'lama.required'=> 'Kolom ini Wajib Diisi !!!', 
            'password.required'=> 'Kolom ini Wajib Diisi !!!',
            'password_confirmation.required'=> 'Kolom ini Wajib Diisi !!!'
        ]);

        //Jika validasi oke lanjut simpan data 
        $data = [
            'password' => bcrypt(Request()->password),
            "updated_at"=> now()
        ];
        $this->ProfileModel->editProfile($id, $data);
        // User::find(auth()->user()->id)->update(['password'=> Hash::make($request->password)]);
        return redirect()->route('home')->with('pesanUpdate','Data Berhasil Diupdate !!!');
    }
}
