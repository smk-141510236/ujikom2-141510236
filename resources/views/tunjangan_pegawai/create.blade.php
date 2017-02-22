@extends('layouts.app')

@section('content')

<div class="col-md-offset-3">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Create Tunjangan Pegawai</div>
                    
                <div class="panel-body">
                     <form class="form-horizontal" role="form" method="POST" action="{{ url('/tunjangan_pegawai') }}">
                        {{ csrf_field() }}

                        <div class="col-md-6">
                                <label for="kode_tunjangan_id">Kode Tunjangan</label>
                                    <select class="col-md-6 form-control" name="kode_tunjangan_id">
                                        @foreach($tunjangan as $datatunjangan)
                                            <option  value="{{$datatunjangan->id}}" >{{$datatunjangan->kode_tunjangan}}</option>
                                        @endforeach
                                    </select>
                                    <span>{{$errors->first('kode_tunjangan)')}}</span>
                            </div>
                            +
                        <div class="col-md-12">
                                <label>Nama Pegawai</label>
                                <select name="pegawai_id" class="form-control" name="pegawai_id">
                                @foreach($pegawai as $datapegawai)
                                    <option value="{{$datapegawai->id}}">
                                        {{$datapegawai->User->name}}
                                    </option>
                                @endforeach
                                </select>
                                <span class="help-block">
                                        <strong>{{ $errors->first('pegawai_id') }}</strong>
                                    </span>
                            </div>

                           <div class="col-md-12">
                            <button type="submit" class="btn btn-primary form-control">Tambah</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>

@endsection
