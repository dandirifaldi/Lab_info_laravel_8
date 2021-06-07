<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class LicenseModel extends Model
{
   public function allData(){
    return DB::table('tb_license')->get();
   }

   public function detailData($id_license){
      return DB::table('tb_license')->where('id_license',$id_license)->first();
   }

   public function getCreateAtAttributes(){
      return Carbon::parse($this->attributes['exp_date'])
         ->translatedFormat('l, d F Y');
   }
   public function addData($data){
    DB::table('tb_license')->insert($data);
   }
}
