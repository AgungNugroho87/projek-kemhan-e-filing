@extends('layouts.admin_template')
@section('content')
    <a href="{{url('dokumen/create')}}" class="btn btn-success">Create</a>

    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th width="75">Id</th>
            <th width="800" >judul</th>
            <th width="800" >keterangan</th>
            <th width="800" >nama_file</th>
            <th width="100" >ukuran_file</th>
            <th width="100" >babin_id</th>
            <th colspan="2" style="text-align: center">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($dokumen_tbls as $dok)
            <tr>
                <td>{{ $dok->id }}</td>
                <td>{{ $dok->judul }}</td>
                <td>{{ $dok->keterangan }}</td>
                <td>{{ $dok->nama_file }}</td>
                <td>{{ $dok->ukuran_file }}</td>
                <td>{{ $dok->babin_id }}</td>
                <td><a href="{{route('dokumen.edit',$dok->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['dokumen.destroy', $dok->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination">{!! str_replace('/?','?',$dokumen_tbls->render()) !!}</div>
@endsection