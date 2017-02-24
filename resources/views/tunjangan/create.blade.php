@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Tunjangan</div>
                <div class="panel-body">

                     {!! Form::open(['url' => 'tunjangan']) !!}
                    <div class="col-md-6">
                        {!! Form::label('Jabatan', 'Jabatan') !!}
        
                         <select name="jabatan_id" class="form-control">
                                @foreach($jabatan as $jabatans)
                                    <option value="{{$jabatans->id}}">
                                        {{$jabatans->nama_jabatan}}
                                    </option>
                                @endforeach
                                </select>
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('Golongan', 'Golongan') !!}
                        
                        <select name="golongan_id" class="form-control">
                                @foreach($golongan as $golongans)
                                    <option value="{{$golongans->id}}">
                                        {{$golongans->nama_golongan}}
                                    </option>
                                @endforeach
                                </select>
                    </div>

                    <div class="col-md-6">

                                <label>Kode Tunjangan</label>
                                <input type="text" class="form-control" name="kode_tunjangan" autofocus>

                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_tunjangan') }}</strong>
                                    </span>
                            </div>

                    <div class="col-md-6">
                        <label >Status</label>

                        <select class="form-control" class="col-md-8" form="form-control" name="status">
                        <option value="menikah">Menikah</option>
                        <option value="belum_menikah">Belum Menikah</option>
                        <option value="janda">Janda</option>
                        <option value="duda">Duda</option>
                        </select>
                    </div>

                    <div class="col-md-7">
                        {!! Form::label('Jumlah Anak', 'Jumlah Anak') !!}
                        {!! Form::text('jumlah_anak',null,['class'=>'form-control','required']) !!}
                    </div>
                    <div class="col-md-7">
                        {!! Form::label('Besaran Uang', 'Besaran Uang') !!}
                        {!! Form::text('besaran_uang',null,['class'=>'form-control','required']) !!}
                    </div>
                    <div class="col-md-12" >
                                <button type="submit" class="btn btn-primary form-control">Tambah</button>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
