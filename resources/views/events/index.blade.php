@extends('layouts.mariBelajarLaravel8')

@section('mainContent')
<a href='{{ route('events.create')}}' class="btn btn-info">Tambah Event</a>
<a href='{{ route('participants.index')}}' class="btn btn-info">Papar Peserta</a>
<br><br>
    <table class="table table-hover">
        <tr>
            <th>Title</th>
            <th>Venue</th>
            <th>Date</th>
            <th>Organizer</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>

        @foreach ($events as $row)
        <tr>
            <td>{{$row->title}}</td>
            <td>{{$row->venue}}</td>
            <td>{{$row->date}}</td>
            <td>{{$row->organizer_id}}</td>
            <td>{{$row->created_at}}</td>
            <td>{{$row->updated_at}}</td>
            <td><a href="{{ route('participants.create',$row->id)}}" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add Participant</a></td>
            <td><a href="{{ route('events.edit',$row->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Edit</a></td>
            <td><a href="{{ route('events.delete',$row->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Delete</a></td>
        </tr>
        @endforeach
    </table>
    
    {{$events->links()}}

    @endsection
