<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class BarangModel extends Model
{
    public function allData(){
        return DB::table('tb_barang')
        ->Join('tb_status','tb_barang.id_status','=','tb_status.id_status')
        ->get();
   }
   public function allDatad(){
        return DB::getPdo()->lastInsertId();
        // ->get();
   }

   public function addData($data){
    DB::table('tb_barang')->insert($data);
   }
   public function addDataDetail($data){
    DB::table('tb_detail_beli')->insert($data);
   }
   public function detailData($id_barang){
      return DB::table('tb_barang')
      ->where('tb_barang.id_barang','=',$id_barang)
      ->join('tb_status','tb_barang.id_status','=','tb_status.id_status')
      ->join('tb_detail_beli','tb_barang.id_barang','=','tb_detail_beli.id_barang')
      ->first();
   }

   public function deleteData($id_barang){
      DB::table('tb_barang')
         ->where('id_barang',$id_barang)
         ->delete();
   }

   // BUKU
    public function allDataBuku(){
        return DB::table('tb_buku')
        ->leftJoin('tb_status','tb_buku.id_status','=','tb_status.id_status')
        ->get();
   }

   // FURNITURE
    public function allDataFurniture(){
        return DB::table('tb_furniture')
        ->leftJoin('tb_status','tb_furniture.id_status','=','tb_status.id_status')
        ->get();
   }
   
}