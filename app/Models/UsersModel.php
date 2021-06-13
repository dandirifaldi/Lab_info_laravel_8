<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UsersModel extends Model
{
    public function allData(){
    return DB::table('users')->get();
   }

   public function detailData($id){
      return DB::table('users')->where('id',$id)->first();
   }

   public function getCreateAtAttributes(){
      return Carbon::parse($this->attributes['created_at'])
         ->translatedFormat('l, d F Y');
   }
   public function addData($data){
    DB::table('users')->insert($data);
   }
   public function editData($id, $data)
   {
      DB::table('users')
         ->where('id',$id)
         ->update($data);
   }
   public function deleteData($id)
   {
      DB::table('users')
         ->where('id',$id)
         ->delete();
   }
}
