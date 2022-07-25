<?php

namespace App\Http\Controllers;

use PDF;
use App\GuruModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){
        if($request->has('search')){
            $data = GuruModel::where('nama','LIKE','%' .$request->search.'%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = GuruModel::paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }

        return view ('guru.index',compact('data'));
    }

    public function create(){
        return view('guru.create');
    }

    public function edit($id){
        $data['result'] = GuruModel::where('id',$id)->first();
        // dd($data['result']);
        return view('guru.edit',$data);
    }

    public function exportpdfguru(){
        $data = GuruModel::all();

        view()->share('data', $data);
        $pdf = PDF::loadView('guru/guru-pdf')->setPaper('a4', 'landscape');
        return $pdf->download('dataguru.pdf');
    }


    public function store(Request $request){
        $nama                   = $request->nama;
        $tempat_lahir           = $request->tempat_lahir;
        $tanggal_lahir          = $request->tanggal_lahir;
        $nip                    = $request->nip;
        $golongan               = $request->golongan;
        $pendidikan             = $request->pendidikan;
        $bidang_studi           = $request->bidang_studi;
        $keterangan             = $request->keterangan;

        $file = $request->file('image');
        $ext = $file->getClientOriginalName();
        $dateTime = date('Ymd_his');
        $destinationPath = 'assets/featured_images'; // upload path
        $newName = $dateTime.'_'.$ext;
        $file->move($destinationPath, $newName);

        $insert                 = new GuruModel();
        $insert->nama           = $nama;
        $insert->tempat_lahir   = $tempat_lahir;
        $insert->tanggal_lahir  = $tanggal_lahir;
        $insert->nip            = $nip;
        $insert->golongan       = $golongan;
        $insert->pendidikan     = $pendidikan;
        $insert->bidang_studi   = $bidang_studi;
        $insert->keterangan     = $keterangan;
        $insert->image     = $newName;
        $insert->save();


        // $this->_validation($request);
        return redirect('guru/index')->with('success','Data berhasil ditambahkan');
    }

    // private function _validation(Request $request){
    //     $validation = $request->validate([
    //         'keterangan' => 'required|max:10|min:3',
    //     ],
    //     [
    //         'keterangan.required' => ' Data Harus Di isi',
    //         'keterangan.min' => 'Minimal 3 digit',
    //         'keterangan.max' => 'Minimal 100 digit',
    //     ]

    //     );
    // }

    public function update(Request $request, $id){
        $nama                   = $request->nama;
        $tempat_lahir           = $request->tempat_lahir;
        $tanggal_lahir          = $request->tanggal_lahir;
        $nip                    = $request->nip;
        $golongan               = $request->golongan;
        $pendidikan             = $request->pendidikan;
        $bidang_studi           = $request->bidang_studi;
        $keterangan             = $request->keterangan;
        
        if($request->image != null){
            $file = $request->file('image');
            $ext = $file->getClientOriginalName();
            $dateTime = date('Ymd_his');
            $destinationPath = 'assets/featured_images'; // upload path
            $newName = $dateTime.'_'.$ext;
            $file->move($destinationPath, $newName);
            GuruModel::where('id',$id)->update([
            'nama'              => $nama,
            'tempat_lahir'      => $tempat_lahir,
            'tanggal_lahir'     => $tanggal_lahir,
            'nip'               => $nip,
            'golongan'          => $golongan,
            'pendidikan'        => $pendidikan,
            'bidang_studi'      => $bidang_studi,
            'keterangan'        => $keterangan,
            'image'             => $newName,

        ]);
        }else{
          GuruModel::where('id',$id)->update([
            'nama'              => $nama,
            'tempat_lahir'      => $tempat_lahir,
            'tanggal_lahir'     => $tanggal_lahir,
            'nip'               => $nip,
            'golongan'          => $golongan,
            'pendidikan'        => $pendidikan,
            'bidang_studi'      => $bidang_studi,
            'keterangan'      => $keterangan,

        ]);  
        }

        if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Update');
        }

        
        return redirect('guru/index')->with('success','Data berhasil diubah');
    } 
    public function delete($id){
        $delete = GuruModel::where('id',$id)->delete();
        if($delete == true){
            return redirect('guru/index')->with('success','Data berhasil dihapus');
        }else{
            return redirect('guru/index')->with('error','Data gagal dihapus');
        }
    }
    
}
