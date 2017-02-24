@extends('layouts.app')
@section('content')

        <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><center>Udpate Kategori Lembur</center></h3> </div>
                    <div class="panel-body">

                {!! Form::model($kategori_lembur,['method'=>'PATCH','route'=>['kategori_lembur.update',$kategori_lembur->id]])!!}
                   <div class="form-group">
                        {!! Form::label('kode lembur', 'kode lembur') !!}
                        {!! Form::text('kode_lembur',null,['class'=>'form-control']) !!}
                          @if ($errors->has('kode_lembur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_lembur') }}</strong>
                                    </span>
                            @endif
                    </div>

                    <div class="form-group">
                        {!! Form::label('Kode Jabatan', 'Kode Jabatan:') !!}
                        <select class="form-control" name="jabatan_id">
                        @foreach ($jabatan as $jabatans)
                            <option value='{!!$jabatans->id!!}'>{!!$jabatans->nama_jabatan!!}
                            </option>
                        @endforeach
                        </select>
                    </div>

                     <div class="form-group">
                        {!! Form::label('Golongan', 'Golongan:') !!}
                        <select class="form-control" name="golongan_id">
                        @foreach ($golongan as $golongans)
                            <option value='{!!$golongans->id!!}'>{!!$golongans->nama_golongan!!}
                            </option>
                        @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                         {!! Form::label('Besaran Uang', 'Besaran Uang:') !!}
                            {!! Form::text('besaran_uang',null,['class'=>'form-control', 'required']) !!}
                                     @if ($errors->has('besaran_uang'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('besaran_uang') }}</strong>
                                                </span>
                                     @endif
                    </div>

                    <div class="form-group">
                        {!! Form::submit('SAVE', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
