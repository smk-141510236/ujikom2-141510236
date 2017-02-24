@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Tambah Jabatan</h1></div>
                <div class="panel-body">

                     {!! Form::open(['url' => 'jabatan']) !!}
                    <div class="col-md-6">
                        {!! Form::label('kode jabatan', 'kode jabatan') !!}
                        {!! Form::text('kode_jabatan',null,['class'=>'form-control']) !!}
                         @if ($errors->has('kode_jabatan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_jabatan') }}</strong>
                                    </span>
                                @endif


                    </div>
                    <div class="col-md-6 ">
                        {!! Form::label('Nama jabatan', 'Nama jabatan') !!}
                        {!! Form::text('nama_jabatan',null,['class'=>'form-control']) !!}
                         @if ($errors->has('nama_jabatan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_jabatan') }}</strong>
                                    </span>
                                @endif

                    </div>
                    <div class="col-md-12">
                        {!! Form::label('besaran uang', 'besaran uang') !!}
                        {!! Form::text('besaran_uang',null,['class'=>'form-control']) !!}
                         @if ($errors->has('besaran_uang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('besaran_uang') }}</strong>
                                    </span>
                                @endif

                    </div>

                    <div class="col-md-12">

                    </div>

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
