@extends('layouts.admin_template')
@section('content')
    {!! Form::model($prov,['method' => 'PATCH','route'=>['provinsi.update',$prov->id]]) !!}
    <div class="form-group">
        {!! Form::label('ID', 'ID:') !!}
        {!! Form::text('id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Nama', 'Nama:') !!}
        {!! Form::text('nama',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('Babin', 'Babin:') !!}
        <select class="form-control" name="babin_id">
            @foreach($babin_tbls as $item)
                @if($item->id === $prov->babin_id)
                    <option value="{{$item->id}}" selected="selected">{{$item->id}}</option>
                @else
                    <option value="{{$item->id}}">{{$item->id}}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop