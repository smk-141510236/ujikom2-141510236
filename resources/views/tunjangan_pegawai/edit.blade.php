@extends('layouts/app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Edit Tunjangan Pegawai</h1></div>
                <div class="panel-body">
                     {!! Form::model($tunjangan_pegawai,['method'=>'PATCH','route'=>['tunjangan_pegawai.update',$tunjangan_pegawai->id]])!!}

							<div class="form-group">
                        {!! Form::label('Kode Tunjangan', 'Kode Tunjangan:') !!}
                        <select class="form-control" name="kode_tunjangan">
                        @foreach ($tunjangan as $datatunjangan)
                            <option value='{!!$datatunjangan->id!!}'>{!!$datatunjangan->kode_tunjangan!!}
                            </option>
                        @endforeach
                        </select>
                    </div>

                     <div class="form-group">
                        {!! Form::label('Pegawai', 'Pegaawai:') !!}
                        <select class="form-control" name="pegawai_id">
                        @foreach ($pegawai as $datapegawai)
                            <option value='{!!$datapegawai->id!!}'>{!!$datapegawai->User->name!!}
                            </option>
                        @endforeach
                        </select>
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