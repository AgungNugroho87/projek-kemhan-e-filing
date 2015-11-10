@extends('layouts.admin_template')
@section('content')
    <a href="{{url('kanminvet/create')}}" class="btn btn-success">Create</a>
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
        @foreach ($kanminvet_tbls as $kan)
            <tr>
                <td>{{ $kan->id }}</td>
                <td>{{ $kan->nama }}</td>
                <td>{{ $kan->provinsi_id }}</td>
                <td><a href="{{route('kanminvet.edit',$kan->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['kanminvet.destroy', $kan->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
    <div class="pagination">{!! str_replace('/?','?',$kanminvet_tbls->render()) !!}</div>
@endsection