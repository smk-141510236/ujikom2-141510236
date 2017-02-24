@extends('layouts/app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Edit Tunjangan Pegawai</h1></div>
                <div class="panel-body">
                     {!! Form::model($tunjangan_pegawai,['method'=>'PATCH','route'=>['tunjangan_pegawai.update',$tunjangan_pegawai->id]])!!}

							<div class="col-md-6">
                                <label for="Tunjangan">Kode Tunjangan</label>
                                    <select class="col-md-8 form-control" name="kode_tunjangan">
                                    <option>Pilih Tunjangan Baru</option>
                                        @foreach($tunjangan as $datatunjangan)
                                            <option  value="{{$datatunjangan->id}}" >{{$datatunjangan->kode_tunjangan}}</option>
                                        @endforeach
                                    </select>
                                    <span class="help-block">
                                        {{$errors->first('kode_tunjangan')}}
                                    </span>
                            </div>

							<div class="col-md-6">
                                <label for="Pegawai">Pegawai ID</label>
                                    <select class="col-md-8 form-control" name="User">
                                    <option>Pilih ID Baru</option>
                                        @foreach($pegawai as $datapegawai)
                                            <option  value="{{$datapegawai->id}}" >{{$datapegawai->User->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="help-block">
                                        {{$errors->first('User->name')}}
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