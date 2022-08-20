<?php

namespace App\Http\Controllers;

use App\BarangModel;
use Illuminate\Http\Request;

class InfoBarangController extends Controller
{
    public function info($id){
        $data['barang'] = BarangModel::where('id',$id)->first();
        return view('barang.infobarang',$data);
    }
}
