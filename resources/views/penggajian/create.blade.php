@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Penggajian</div>
                <div class="panel-body">

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/penggajian') }}">
                        {{ csrf_field() }}

                    <label for="status_pengambilan">Status Pengambilan</label>
                    <div class="form-group{{$errors->has('status_pengambilan') ? 'has-error' : ''}}">
                                
                                <div class="col-md-6">
                                	<select name="status_pengambilan" class="form-control">
                                		<option value="0">Belum Diambil</option>
                                		<option value="1">Sudah Diambil</option>
                                	</select>
                                @if ($errors->has('status_pengambilan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status_pengambilan') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>
                    <label for="kode_tunjangan_id">Pegawai</label>
                    <div class="form-group{{ $errors->has('kode_tunjangan_id') ? 'has-error' : ''}}">

                        <div class="col-md-8">
                            <select name="kode_tunjangan_id" class="form-control">
                                <option value="">Pilih</option>
                                @foreach($tunjangan_pegawai as $data)
                                    <option value="{{$data->id}}">{{$data->pegawaiModel->User->name}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('kode_tunjangan_id'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('kode_tunjangan_id')}}</strong>  
                                </span>
                            @endif
                        </div>
                        <div>
                            @if(isset($error))
                            Penggajian Ada
                            @endif
                        </div>
                        
                            <div class="col-md-12" >
                                <button type="submit" class="btn btn-primary form-control">Hitung Gaji</button>
                            </div>
                                        </div>
                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection