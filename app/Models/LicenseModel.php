<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LicenseModel extends Model
{
   public function allData(){
    return DB::table('tb_license')->get();
   }
}
