@extends('layouts.admin_template')
@section('content')
    {!! Form::model($dok,['method' => 'PATCH','route'=>['dokumen.update',$dok->id]]) !!}
    <div class="hidden">
    <div class="form-group">
        {!! Form::label('ID', 'ID:') !!}
        {!! Form::text('id',null,['class'=>'form-control']) !!}
    </div>
    </div>
    <div class="form-group">
        {!! Form::label('Judul', 'Judul:') !!}
        {!! Form::text('judul',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Keterangan', 'Keterangan:') !!}
        {!! Form::text('keterangan',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('Babin', 'Babin:') !!}
        <select class="form-control" name="babin_id">
            @foreach($babin_tbls as $item)
                @if($item->id === $dok->babin_id)
                    <option value="{{$item->id}}" selected="selected">{{$item->id}}</option>
                @else
                    <option value="{{$item->id}}">{{$item->id}}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">
        <p class="help-block">Example block-level help text here.</p>
    </div>
    <div class="form-group">
        {!! Form::label('nama_file', 'Nama File:') !!}
        {!! Form::text('nama_file',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ukuran_file', 'Ukuran File:') !!}
        {!! Form::text('ukuran_file',null,['class'=>'form-control']) !!}
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop