<?php

namespace App\Http\Controllers;

use PDF;
use App\BarangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){
        if($request->has('search')){
            $data = BarangModel::where('nama_barang','LIKE','%' .$request->search.'%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = BarangModel::paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }

        return view ('barang.index',compact('data'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function edit($id){
        $data['result'] = BarangModel::where('id',$id)->first();
        // dd($data['result']);
        return view('barang.edit',$data);
    }

    public function exportpdftkj(){
        $data = BarangModel::all();

        view()->share('data', $data);
        $pdf = PDF::loadView('barang/barangtkj-pdf')->setPaper('a4', 'landscape');
        return $pdf->download('databarang.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama_barang                   = $request->nama_barang;
        $type                          = $request->type;
        $jumlah_barang                 = $request->jumlah_barang;
        $tahun_barang                  = $request->tahun_barang;
        $kondisi                       = $request->kondisi;
        $tempat_barang                 = $request->tempat_barang;

        $file = $request->file('image');
        $ext = $file->getClientOriginalName();
        $dateTime = date('Ymd_his');
        $destinationPath = 'assets/featured_images'; // upload path
        $newName = $dateTime.'_'.$ext;
        $file->move($destinationPath, $newName);

        $insert                 = new BarangModel();
        $insert->nama_barang    = $nama_barang;
        $insert->type           = $type;
        $insert->jumlah_barang  = $jumlah_barang;
        $insert->tahun_barang   = $tahun_barang;
        $insert->kondisi        = $kondisi;
        $insert->tempat_barang  = $tempat_barang;
        $insert->image          = $newName;
        $insert->save();

        return redirect('barang/index')->with('success','Data berhasil ditambahkan');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BarangModel  $barangModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nama_barang                   = $request->nama_barang;
        $type                          = $request->type;
        $jumlah_barang                 = $request->jumlah_barang;
        $tahun_barang                  = $request->tahun_barang;
        $kondisi                       = $request->kondisi;
        $tempat_barang                 = $request->tempat_barang;
        
        if($request->image != null){
            $file = $request->file('image');
            $ext = $file->getClientOriginalName();
            $dateTime = date('Ymd_his');
            $destinationPath = 'assets/featured_images'; // upload path
            $newName = $dateTime.'_'.$ext;
            $file->move($destinationPath, $newName);
            BarangModel::where('id',$id)->update([
                'nama_barang'    => $nama_barang,
                'type'           => $type,
                'jumlah_barang'  => $jumlah_barang,
                'tahun_barang'   => $tahun_barang,
                'kondisi'        => $kondisi,
                'tempat_barang'  => $tempat_barang,
                'image'          => $newName,
            
        ]);
        }else{
            BarangModel::where('id',$id)->update([
                'nama_barang'    => $nama_barang,
                'type'           => $type,
                'jumlah_barang'  => $jumlah_barang,
                'tahun_barang'   => $tahun_barang,
                'kondisi'        => $kondisi,
                'tempat_barang'  => $tempat_barang,

        ]);  
        }

        if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Update');
        }

        
        return redirect('barang/index')->with('success','Data berhasil diubah');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BarangModel  $barangModel
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BarangModel  $barangModel
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BarangModel  $barangModel
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $delete = BarangModel::where('id',$id)->delete();
        if($delete == true){
            return redirect('barang/index')->with('success','Data berhasil dihapus');
        }else{
            return redirect('barang/index')->with('error','Data gagal dihapus');
        }
    }
}
