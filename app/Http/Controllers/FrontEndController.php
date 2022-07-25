<?php

namespace App\Http\Controllers;

use App\AlatModel;
use App\GuruModel;
use App\SiswaModel;
use App\BarangModel;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(Request $request){

        // $result = Product::when($request->search, function ($query) use ($request) {
        //     $query->where('product_name', 'like', "%{$request->search}%")
        //          ->where('status', 1)
        //         ->orWhere('production_code', 'like', "%{$request->search}%")
        //         ->orWhere('discount', 'like', "%{$request->search}%");
        // })->paginate(3);
        return view('front-end.index');
    }

    
    public function jurusan(){
        return view('front-end.jurusan');
    }
    public function guru(){
        $data['no'] = 1;
        $data['guru'] = GuruModel::get();
        return view('front-end.guru',$data);
    }
    public function siswa(){
        $data['no'] = 1;
        $data['siswa'] = SiswaModel::get();
        return view('front-end.siswa',$data);
    }
    public function prestasi(){
        return view('front-end.prestasi');
    }
    public function alat(){
        $data['no'] = 1;
        $data['alat'] = AlatModel::get();
        return view('front-end.alat',$data);
    }
    public function barang(){
        $data['no'] = 1;
        $data['barang'] = BarangModel::get();
        return view('front-end.barang',$data);
    }
}
