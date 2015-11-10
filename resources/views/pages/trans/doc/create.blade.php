@extends('layouts.admin_template')
@section('content')
    {!! Form::open(
        array(
            'route' =>'dokumen.store',
            'class' =>'form',
            'novalidate'=>'novalidate',
            'files'=>true)) !!}
    <div class="form-group">
        <div class="hidden">
            <div class="col col-sm-2">{!! Form::label('ID', 'ID:') !!}</div>
            <div class="col col-sm-1">{!! Form::text('id',null,['class'=>'form-control']) !!}</div>
            <div class="col-sm-9"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col col-sm-2">{!! Form::label('Judul', 'Judul:') !!}</div>
            <div class="col col-sm-10">{!! Form::text('judul',null,['class'=>'form-control']) !!}</div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
        <div class="col col-sm-2 ">{!! Form::label('Keterangan', 'Keterangan:') !!}</div>
        <div class="col col-sm-10">{!! Form::text('keterangan',null,['class'=>'form-control']) !!}</div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col col-sm-2">{!! Form::Label('Babin', 'Babin:') !!}</div>
            <div class="col col-sm-10">
                <select class="form-control" name="babin_id">
                    @foreach($babin_tbls as $item)
                       <option value="{{$item->id}}">{{$item->nama}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
        <div class="col col-sm-2">
            {!! Form::label('File Upload') !!}
        </div>
        <div class="col col-sm-10">
        {!! Form::file('image',null) !!}
        </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
        <div class="col col-sm-2">{!! Form::label('nama_file', 'Nama File:') !!}</div>
        <div class="col col-sm-10"> {!! Form::text('nama_file',null,['class'=>'form-control']) !!}</div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
        <div class="col col-sm-2"> {!! Form::label('ukuran_file', 'Ukuran File:') !!}</div>
        <div class="col col-sm-10"> {!! Form::text('ukuran_file',null,['class'=>'form-control']) !!}</div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col col-sm-2"></div>
            <div class="col col-sm-2"> {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}</div>
            <div class="col col-sm-8"></div>
            </div>
    </div>
    {!! Form::close()!!}
@endsection