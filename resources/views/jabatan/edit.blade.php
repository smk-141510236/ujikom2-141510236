@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Edit Jabatan</h1></div>
                <div class="panel-body">

                     {!! Form::model($jabatan,['method'=>'PATCH','route'=>['jabatan.update',$jabatan->id]])!!}
                    <div class="col-md-6">
                        <label>Kode Jabatan</label>
                        <input type="text" name="kode_jabatan" class="form-control" value="{{$jabatan->kode_jabatan}}" >
                        <span class="help-block">
                            <strong>{{ $errors->first('kode_jabatan') }}</strong>
                        </span>
                    </div>
                    <div class="col-md-6">
                        <label>Jabatan</label>
                        <input type="text" name="nama_jabatan" class="form-control" value="{{$jabatan->nama_jabatan}}" >
                        <span class="help-block">
                            <strong>{{ $errors->first('nama_jabatan') }}</strong>
                        </span>
                    </div>
                    <div class="col-md-12">
                        <label>Besaran Uang</label>
                        <input type="text" name="besaran_uang" class="form-control" value="{{$jabatan->besaran_uang}}" >
                        <span class="help-block">
                            <strong>{{ $errors->first('besaran_uang') }}</strong>
                        </span>
                    </div>
                    <div class="col-md-12"></div>
                    <div class="col-md-12">
                        {!! Form::submit('SAVE', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection