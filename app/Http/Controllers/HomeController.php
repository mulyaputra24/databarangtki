<?php

namespace App\Http\Controllers;

use App\AlatModel;
use App\GuruModel;
use App\SiswaModel;
use App\BarangModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['jumlahguru'] = GuruModel::count();
        $data['jumlahsiswa'] = SiswaModel::count();
        $data['jumlahbarangrpl'] = AlatModel::count();
        $data['jumlahbarangtkj'] = BarangModel::count();

        return view('home', $data);
        
    }
}
