<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileModel;

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
}
