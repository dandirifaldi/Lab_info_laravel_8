<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class NewwModel extends Model
{
    public function allData(){
        return DB::table('tb_barang')
        ->whereDate('tb_barang.tgl_masuk','<=',Carbon::now()->addDays(29))
        ->Join('tb_status','tb_barang.id_status','=','tb_status.id_status')
        ->orderBy('tb_barang.tgl_masuk','desc')
        ->paginate(10);
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

   public function editData($id_barang, $data)
   {
      DB::table('tb_barang')
         ->where('id_barang',$id_barang)
         ->update($data);
   }
   public function editDataDetail($id_barang, $data)
   {
      DB::table('tb_detail_beli')
         ->where('id_barang',$id_barang)
         ->update($data);
   }
   public function deleteData($id_barang){
      DB::table('tb_barang')
         ->where('id_barang',$id_barang)
         ->delete();
   }
   public function deleteDataDetail($id_barang){
      DB::table('tb_detail_beli')
         ->where('id_barang',$id_barang)
         ->delete();
   }

   // BUKU----------------------------------------------------------------------------------------------
    public function allDataBuku(){
        return DB::table('tb_buku')
        ->whereDate('tb_buku.tgl_masuk','<=',Carbon::now()->addDays(29))
        ->leftJoin('tb_status','tb_buku.id_status','=','tb_status.id_status')
        ->orderBy('tb_buku.tgl_masuk','desc')
        ->paginate(10);
   }
    public function addDataBuku($data){
    DB::table('tb_buku')->insert($data);
   }
   public function detailDataBuku($id_buku){
      return DB::table('tb_buku')
      ->join('tb_status','tb_buku.id_status','=','tb_status.id_status')
      ->first();
   }
    public function deleteDataBuku($id_buku){
      DB::table('tb_buku')
         ->where('id_buku',$id_buku)
         ->delete();
   }
    public function editDataBuku($id_buku, $data)
   {
      DB::table('tb_buku')
         ->where('id_buku',$id_buku)
         ->update($data);
   }

   // FURNITURE-----------------------------------------------------------------------------------------
    public function allDataFurniture(){
        return DB::table('tb_furniture')
        ->whereDate('tb_furniture.tgl_masuk','<=',Carbon::now()->addDays(29))
        ->leftJoin('tb_status','tb_furniture.id_status','=','tb_status.id_status')
        ->orderBy('tb_furniture.tgl_masuk','desc')
        ->paginate(10);
   }
    public function addDataFurniture($data){
    DB::table('tb_furniture')->insert($data);
   }
   public function detailDataFurniture($id_furniture){
      return DB::table('tb_furniture')
      ->join('tb_status','tb_furniture.id_status','=','tb_status.id_status')
      ->first();
   }
    public function deleteDataFurniture($id_furniture){
      DB::table('tb_furniture')
         ->where('id_furniture',$id_furniture)
         ->delete();
   }
    public function editDataFurniture($id_furniture, $data)
   {
      DB::table('tb_furniture')
         ->where('id_furniture',$id_furniture)
         ->update($data);
   }
   
}