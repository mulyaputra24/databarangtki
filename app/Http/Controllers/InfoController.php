<?php

namespace App\Http\Controllers;

use App\AlatModel;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function info($id){
        $data['alat'] = AlatModel::where('id',$id)->first();
        return view('alat.info',$data);
    }
}
