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
          <label for="kode_lembur_id" >Kode Lembur</label>
          <input id="kode_lembur_id" value="{{$lembur_pegawai->kode_lembur_id}}" type="text" class="form-control" name="kode_lembur_id" autofocus>
             <span class="help-block">
               <strong>{{ $errors->first('kode_lembur_id') }}</strong>
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

        <div class="col-md-6">
          <label for="jumlah_jam" >Jumlah Jam </label>
          <input id="jumlah_jam" value="{{$lembur_pegawai->jumlah_jam}}" type="text" class="form-control" name="jumlah_jam" autofocus>
             <span class="help-block">
               <strong>{{ $errors->first('jumlah_jam') }}</strong>
             </span>
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