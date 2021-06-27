<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Auth;

class ProfileModel extends Model
{
    public function detailUser($id){
        return DB::table('users')
        ->where('id','=',$id)
        ->first();
   }
   public function editProfile($id, $data)
   {
      DB::table('users')
         ->where('id',$id)
         ->update($data);
   }
   public function editPass($id, $data)
   {
      DB::table('users')
         ->where('id',$id)
         ->update($data);
   }
}
