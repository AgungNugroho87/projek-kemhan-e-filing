@extends('layouts.admin_template')
@section('content')
    <a href="{{url('provinsi/create')}}" class="btn btn-success">Create</a
    <br\><br\>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th width="75">Id</th>
            <th width="800" >Nama</th>
            <th width="100" >Babin</th>
            <th colspan="2" style="text-align: center">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($provinsi_tbls as $prov)
            <tr>
                <td>{{ $prov->id }}</td>
                <td>{{ $prov->nama }}</td>
                <td>{{ $prov->babin_id }}</td>
                <td><a href="{{route('provinsi.edit',$prov->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['provinsi.destroy', $prov->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination">{!! str_replace('/?','?',$provinsi_tbls->render()) !!}</div>
@endsection