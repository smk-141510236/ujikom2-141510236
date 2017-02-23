<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\penggajianModel;
use App\pegawaiModel;
use App\lembur_pegawaiModel;
use App\tunjangan_pegawaiModel;
use App\golonganModel;
use App\jabatanModel;
use App\kategori_lemburModel;
use App\tunjangan;
use App\User;
use Input;
use Validator;

class penggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penggajian=penggajianModel::paginate(5);
        $pegawai=pegawaiModel::all();
        $tunjangan=tunjangan_pegawaiModel::all();
        $user=User::all();
        return view('penggajian.index',compact('penggajian','pegawai','tunjangan','user'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tunjangan_pegawai::all();
        $user=User::all();
        return view('penggajian.create', compact('tunjangan_pegawai','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $gaji = Input::all();
        $tunjangan_pegawai = tunjangan_pegawaiModel::where('id', $gaji['kode_tunjangan_id'])->first();
        $tunjangan = tunjanganModel::where('id', $tunjangan_pegawai->kode_tunjangan)->first();
        $golongan = golonganModel::where('id', $pegawai->golongan_id)->first();
        $data_penggajian = penggajianModel::where('kode_tunjangan_id', $tunjangan_pegawai->id)->first();

        $penggajian = new penggajianModel;

        if (isset($data_penggajian)) {
            $error = true;
            $tunjangan = tunjangan_pegawaiModel::paginate(5);
            return view('penggajian.create', compact('error','tunjangan'));
        }
        elseif (!isset($lembur_pegawai)) 
        {
            $nol = 0;
            $penggajian->jumlah_jam_lembur= $nol;
            $penggajian->jumlah_uang_lembur= $nol;
            $penggajian->gaji_pokok= $jabatan->besaran_uang+$golongan->besaran_uang;
            $penggajian->total_gaji= ($tunjangan->jumlah_anak*$tunjangan->besaran_uang)+($jabatan->besaran_uang+$golongan->besaran_uang);
            $penggajian->tanggal_pengambilan = date('d-m-y');
            $penggajian->status_pengambilan = Input::get('status_pengambilan');
            $penggajian->kode_tunjangan_id = Input::get('kode_tunjangan_id');
            $penggajian->petugas_penerima = Auth::User()->name;
            $penggajian->save();
        }
        elseif (!isset($lembur_pegawai) || isset($kategori_lembur)) 
        {
            $nol = 0;
            $penggajian->jumlah_jam_lembur= $nol;
            $penggajian->jumlah_uang_lembur= $nol;
            $penggajian->gaji_pokok= $jabatan->besaran_uang+$golongan->besaran_uang;
            $penggajian->total_gaji= ($tunjangan->jumlah_anak*$tunjangan->besaran_uang)+($jabatan->besaran_uang+$golongan->besaran_uang);
            $penggajian->tanggal_pengambilan = date('d-m-y');
            $penggajian->status_pengambilan = Input::get('status_pengambilan');
            $penggajian->kode_tunjangan_id = Input::get('kode_tunjangan_id');
            $penggajian->petugas_penerima = Auth::User()->name;
            $penggajian->save();
        }
        else
        {
            $nol = 0;
            $penggajian->jumlah_jam_lembur=$lembur_pegawai->jumlah_jam;
            $penggajian->jumlah_uang_lembur= ($lembur_pegawai->jumlah_jam)*($kategori_lembur->besaran_uang);
            $penggajian->gaji_pokok= $jabatan->besaran_uang+$golongan->besaran_uang;
            $penggajian->total_gaji= ($lembur_pegawai->jumlah_jam*$kategori_lembur->besaran_uang)+($tunjangan->jumlah_anak*$tunjangan->besaran_uang)+($jabatan->besaran_uang+$golongan->besaran_uang);
            $penggajian->tanggal_pengambilan = date('d-m-y');
            $penggajian->status_pengambilan = Input::get('status_pengambilan');
            $penggajian->kode_tunjangan_id = Input::get('kode_tunjangan_id');
            $penggajian->petugas_penerima = Auth::User()->name;
            $penggajian->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
