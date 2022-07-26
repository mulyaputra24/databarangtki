<?php

namespace App\Http\Controllers;
use App\AlatModel;
use App\GuruModel;
use App\SiswaModel;
use App\BarangModel;

use Illuminate\Http\Request;

class ScanController extends Controller
{
    
    public function scan($id){
        $data['alat'] = AlatModel::where('id',$id)->first();
        return view('alat.scan',$data);
    }

    public function print($id){
        $data['alat'] = AlatModel::where('id',$id)->first();
        return view('alat.print_scan',$data);
    }
}
