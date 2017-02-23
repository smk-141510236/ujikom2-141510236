@extends('layouts/app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Edit Jabatan</h1></div>
                <div class="panel-body">
                     {!! Form::model($lembur_pegawai,['method'=>'PATCH','route'=>['lembur_pegawai.update',$lembur_pegawai->id]])!!}
            
        <div class="col-md-6">
          <label for="kode_lembur" >Kode Lembur</label>
          <input id="kode_lembur" value="{{$lembur_pegawai->kode_lembur}}" type="text" class="form-control" name="kode_lembur" autofocus>
             <span class="help-block">
               <strong>{{ $errors->first('kode_lembur') }}</strong>
             </span>
        </div>

        <div class="col-md-6">
              <label>Nip & Nama Pegawai</label>
              <select class="col-md-12 form-control" name="pegawai_id">
                            @foreach($pegawai as $pegawais)
                            <option  value="{{$pegawais->id}}" >
                                {{$pegawais->nip}} {{$pegawais->User->name}}
                            </option>
                            @endforeach
                        </select>  
          <span>{{$errors->first('jabatan_id')}}</span>
        </div>