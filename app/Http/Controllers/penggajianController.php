<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Request;
use App\Http\Controllers\Controller;
use Form;
use Html;
use Input;
use Redirect;
use View;
use App\penggajianModel;
use App\tunjangan_pegawaiModel;
use App\tunjanganModel;
use App\pegawaiModel;
use App\kategori_lemburModel;
use App\lembur_pegawaiModel;
use App\jabatanModel;
use App\golonganModel;
use Auth;
use App\user;
use App\Illuminate\Foundation\Auth\AuthenticatesUser;

class PenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function __construct()
    {
        $this->middleware('Pegawai');
    }

    public function index()
    {
            $gajian = penggajianModel::paginate(3);
        return view('penggajian.index',compact('gajian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $gaji = tunjangan_pegawaiModel::paginate(10);
        return view('penggajian.create',compact('gaji')); 
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {$i_gaji=Input::all();
        // dd($penggajian);
       $tunjangan_pegawai=tunjangan_pegawaiModel::where('id',$i_gaji['tunjangan_pegawai_id'])->first();
       // dd($where);
       $penggajian=penggajianModel::where('tunjangan_pegawai_id',$tunjangan_pegawai->id)->first();
       // dd($wherepenggajian);
       $tunjangan=tunjanganModel::where('id',$tunjangan_pegawai->Kode_tunjangan)->first();
       // dd($where);
       $pegawai=pegawaiModel::where('id',$tunjangan_pegawai->pegawai_id)->first();
       // dd($wherepegawai);
       $kategori_lembur=kategori_lemburModel::where('jabatan_id',$pegawai->jabatan_id)->where('golongan_id',$pegawai->golongan_id)->first();
       // dd($wherekategorilembur);
       $lembur_pegawai=lembur_pegawaiModel::where('pegawai_id',$pegawai->id)->first();
       // dd($wherelemburpegawai);
       $jabatan=jabatanModel::where('id',$pegawai->jabatan_id)->first();
       // dd($wherejabatan);
       $golongan=golonganModel::where('id',$pegawai->golongan_id)->first();
       // dd($wheregolongan);

       $gaji = new penggajianModel ;

       if (isset($penggajian)) {
           $error=true ;
           $tunjangan=tunjangan_pegawaiModel::paginate(10);
           return view('penggajian.create',compact('tunjangan','error'));
       }
       elseif (!isset($lembur_pegawai)) {
            $nol = 0;
            $gaji->jumlah_jam_lembur= $nol;
            $gaji->jumlah_uang_lembur = $nol;
            $gaji->gaji_pokok=$jabatan->besaran_uang+$golongan->besaran_uang;
            $gaji->total_gaji=($tunjangan->jumlah_anak*$tunjangan->besaran_uang)+($jabatan->besaran_uang+$golongan->besaran_uang);
            $gaji->tanggal_pengambilan = date('d-m-y');
            $gaji->status_pengambilan = Input::get('status_pengambilan');
            $gaji->kode_tunjangan_id = Input::get('kode_tunjangan_id');
            $gaji->petugas_penerima = Auth::user()->name;
            $gaji->save();
        }
        elseif(!isset($lembur_pegawai) || !isset($kategori_lembur))
        {
            $nol = 0;
            $gaji->jumlah_jam_lembur= $nol;
            $gaji->jumlah_uang_lembur = $nol;
            $gaji->gaji_pokok=$jabatan->besaran_uang+$golongan->besaran_uang;
            $gaji->total_gaji = ($tunjangan->jumlah_anak*$tunjangan->besaran_uang)+($jabatan->besaran_uang+$golongan->besaran_uang);
            $gaji->tanggal_pengambilan = date('d-m-y');
            $gaji->status_pengambilan = Input::get('status_pengambilan');
            $gaji->kode_tunjangan_id = Input::get('kode_tunjangan_id');
            $gaji->petugas_penerima = Auth::user()->name;
            $gaji->save();
        }
        else
        {
            $gaji->jumlah_jam_lembur=$lembur_pegawai->Jumlah_jam;
            $gaji->jumlah_uang_lembur =($lembur_pegawai->Jumlah_jam)*($kategori_lembur->Besaran_uang);
            $gaji->gaji_pokok=$jabatan->Besaran_uang+$golongan->Besaran_uang;
            $gaji->total_gaji = ($lembur_pegawai->Jumlah_jam*$kategori_lembur->Besaran_uang)+($tunjangan->Jumlah_anak*$tunjangan->Besaran_uang)+($jabatan->Besaran_uang+$golongan->Besaran_uang);
            $gaji->tanggal_pengambilan = date('d-m-y');
            $gaji->status_pengambilan = Input::get('status_pengambilan');
            $gaji->kode_tunjangan_id = Input::get('kode_tunjangan_id');
            $gaji->petugas_penerima = Auth::user()->name;
            $gaji->save();
        }
        return redirect('penggajian');
    }
  



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = penggajianModel::find($id);
        $tunjangan = tunjangan_pegawaiModel::all();
        return view('penggajian.show',compact('data','tunjangan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = penggajianModel::find($id);
        $tunjangan = tunjangan_pegawaiModel::all();
        return view('penggajian.edit',compact('data','tunjangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataUpdate = Request::all();
        $data = penggajianModel::find($id);
        $data->update($dataUpdate);
        return redirect('penggajian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        penggajianModel::find($id)->delete();
        return redirect('penggajian');
    }
}
