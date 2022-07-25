<?php

namespace App\Http\Controllers;

use PDF;
use App\SiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){
        if($request->has('search')){
            $data = SiswaModel::where('nama','LIKE','%' .$request->search.'%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = SiswaModel::paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }

        return view ('siswa.index',compact('data'));
    }
      

    public function create(){
        return view('siswa.create');
    }

    public function edit($id){
        $data['result'] = SiswaModel::where('id',$id)->first();
        return view('siswa.edit',$data);
    }

    public function exportpdfsiswa(){
        $data = SiswaModel::all();

        view()->share('data', $data);
        $pdf = PDF::loadView('siswa/siswa-pdf')->setPaper('a4', 'landscape');
        return $pdf->download('datasiswa.pdf');
    }

    public function delete($id){
        SiswaModel::where('id',$id)->delete();
        return redirect('siswa/index');
    }

    public function store(Request $request){
        // dd($request->all());
        $nis                    = $request->nis;
        $nama                   = $request->nama;
        $agama                  = $request->agama;
        $jenis_kelamin          = $request->jenis_kelamin;
        $tempat_lahir           = $request->tempat_lahir;
        $tanggal_lahir          = $request->tanggal_lahir;
        $alamat                 = $request->alamat;


        $insert                 = new SiswaModel();
        $insert->nis            = $nis;
        $insert->nama           = $nama;
        $insert->agama          = $agama;
        $insert->jenis_kelamin  = $jenis_kelamin;
        $insert->tempat_lahir   = $tempat_lahir;
        $insert->tanggal_lahir  = $tanggal_lahir;
        $insert->alamat         = $alamat;
        $insert->save();
        return redirect('siswa/index');
    }

    public function update(Request $request, $id){
        $nis                    = $request->nis;
        $nama                   = $request->nama;
        $agama                  = $request->agama;
        $jenis_kelamin          = $request->jenis_kelamin;
        $tempat_lahir           = $request->tempat_lahir;
        $tanggal_lahir          = $request->tanggal_lahir;
        $alamat                 = $request->alamat;

        SiswaModel::where('id',$id)->update([
            'nis'               => $nis,
            'nama'              => $nama,
            'agama'             => $agama,
            'jenis_kelamin'     => $jenis_kelamin,
            'tempat_lahir'      => $tempat_lahir,
            'tanggal_lahir'     => $tanggal_lahir,
            'alamat'            => $alamat,
            
        ]);

        if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Update');
        }
        
        return redirect('siswa/index');
    }
}
