@extends('layouts.admin_template')
@section('content')

    {!! Form::open(['url' => 'kanminvet']) !!}
    <div class="form-group">
        {!! Form::label('id', 'ID:') !!}
        {!! Form::text('id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Nama', 'Nama:') !!}
        {!! Form::text('nama',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('Provinsi', 'Provinsi:') !!}
        <select class="form-control" name="provinsi_id">
            @foreach($provinsi_tbls as $item)
                <option value="{{$item->id}}">{{$item->id}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}
@stop