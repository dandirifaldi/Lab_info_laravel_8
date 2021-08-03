<?php

namespace App\Exports;

use App\Models\BarangModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class BarangExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $this -> BarangModel= new BarangModel();
        $data=$this->BarangModel->allData();
        return $data;
    }
}
