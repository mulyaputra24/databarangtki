<?php

namespace App\Http\Controllers;

use App\BarangModel;
use Illuminate\Http\Request;

class ScanBarangController extends Controller
{
    public function scanbarang($id){
        $data['barang'] = BarangModel::where('id',$id)->first();
        return view('barang.scanbarang',$data);
    }

    public function print($id){
        $data['barang'] = BarangModel::where('id',$id)->first();
        return view('barang.print_scan_barang',$data);
    }
}
