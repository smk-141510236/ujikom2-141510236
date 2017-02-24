@extends('layouts/app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Edit Jabatan</h1></div>
                <div class="panel-body">
                     {!! Form::model($tunjangan,['method'=>'PATCH','route'=>['tunjangan.update',$tunjangan->id]])!!}
                    
                    <div class="col-md-6">
                         <label for="kode_tunjangan" >Kode Tunjangan</label>
                         <input id="kode_tunjangan" value="{{$tunjangan->kode_tunjangan}}" type="text" class="form-control" name="kode_tunjangan" autofocus>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_tunjangan') }}</strong>
                                    </span>
                    </div>
                    <div class="col-md-6">
                                <label>Jabatan Lama</label>
                                @foreach($jabatan as $datajabatan)
                                    @if($datajabatan->id == $tunjangan->jabatan_id)
                                    <input type="text" class ="form-control" value="{{$datajabatan->nama_jabatan}}" readonly>
                                    @endif
                                @endforeach
                   </div>

                            <div class="col-md-6">
                                <label>Golongan Lama</label>
                                @foreach($golongan as $datagolongan)
                                    @if($datagolongan->id == $tunjangan->golongan_id)
                                    <input type="text" class ="form-control" value="{{$datagolongan->nama_golongan}}" readonly>
                                    @endif
                                @endforeach
                            </div>

                            <div class="col-md-6">
                                <label for="Jabatan">Jabatan</label>
                                    <select class="col-md-8 form-control" name="jabatan_id">
                                    <option>Pilih Jabatan Baru</option>
                                        @foreach($jabatan as $datajabatan)
                                            <option  value="{{$datajabatan->id}}" >{{$datajabatan->nama_jabatan}}</option>
                                        @endforeach
                                    </select>
                                    <span>{{$errors->first('jabatan_id')}}</span>
                            </div>

                            <div class="col-md-6">
                                <label for="Jabatan">Golongan</label>
                                    <select class="col-md-8 form-control" name="golongan_id">
                                    <option>Pilih Golongan Baru</option>
                                        @foreach($golongan as $datagolongan)
                                            <option  value="{{$datagolongan->id}}" >{{$datagolongan->nama_golongan}}</option>
                                        @endforeach
                                    </select>
                                    <span class="help-block">
                                        {{$errors->first('golongan_id')}}
                                    </span>
                            </div>

                    
                                
                    <div class="col-md-6">
                        <label for="status">status</label>
                        <select class="col-md-8 form-control">
                        <option value="menikah">Menikah</option>
                        <option value="belum_menikah">Belum Menikah</option>
                        <option value="janda">Janda</option>
                        <option value="duda">Duda</option>
                        </select>
                    </div>
                            

                    <div class="col-md-6">
                        {!! Form::label('jumlah anak', 'jumlah anak') !!}
                        {!! Form::text('jumlah_anak',null,['class'=>'form-control','required']) !!}
                    </div>
                    <div class="col-md-12">
                        {!! Form::label('besaran uang', 'besaran uang') !!}
                        {!! Form::text('besaran_uang',null,['class'=>'form-control','required']) !!}
                    </div>
                    &nbsp;
                    <div class="col-md-12">
                        {!! Form::submit('SAVE', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection