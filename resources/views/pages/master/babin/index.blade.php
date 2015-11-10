@extends('layouts.admin_template')
@section('content')
    <a href="{{url('babin/create')}}" class="btn btn-success">Create</a
    <br\><br\>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th width="75">Id</th>
            <th width="900" >Nama</th>
            <th colspan="2" style="text-align: center">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($babin_tbls as $babin)
            <tr>
                <td>{{ $babin->id }}</td>
                <td>{{ $babin->nama }}</td>
                <td><a href="{{route('babin.edit',$babin->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['babin.destroy', $babin->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination">{!! str_replace('/?','?',$babin_tbls->render()) !!}</div>
@endsection