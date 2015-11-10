@extends('layouts.admin_template')
@section('content')
    <a href="{{url('kabupaten/create')}}" class="btn btn-success">Create</a
    <br\><br\>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th width="75">Id</th>
            <th width="800" >Nama</th>
            <th width="100" >provinsi</th>
            <th colspan="2" style="text-align: center">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($kabupaten_tbls as $kab)
            <tr>
                <td>{{ $kab->id }}</td>
                <td>{{ $kab->nama }}</td>
                <td>{{ $kab->provinsi_id }}</td>
                <td><a href="{{route('kabupaten.edit',$kab->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['kabupaten.destroy', $kab->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination">{!! str_replace('/?','?',$kabupaten_tbls->render()) !!}</div>
@endsection