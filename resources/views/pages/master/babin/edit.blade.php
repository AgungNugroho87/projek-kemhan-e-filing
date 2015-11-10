@extends('layouts.admin_template')
@section('content')
    {!! Form::model($babin,['method' => 'PATCH','route'=>['babin.update',$babin->id]]) !!}
    <div class="form-group">
        {!! Form::label('ID', 'ID:') !!}
        {!! Form::text('id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Nama', 'Nama:') !!}
        {!! Form::text('nama',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop