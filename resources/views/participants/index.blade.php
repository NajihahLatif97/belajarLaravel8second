@extends('layouts.mariBelajarLaravel8')

@section('mainContent')
{{-- <a href='{{ route('participants.create')}}' class="btn btn-info">Tambah Participant</a> --}}
<br><br>
    <table class="table table-hover">
        <tr>
            <th>User ID</th>
            <th>Event ID</th>
            <th>Attending</th>
            <th>Reason For Not Attending</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th colspan="2">Action</th>
        </tr>

        @foreach ($participantM as $row)
        <tr>
            <td>{{$row->user->name}}</td>
            <td>{{$row->event_id}}</td>
            <td>{{$row->attending}}</td>
            <td>{{$row->reason_for_not_attending}}</td>
            <td>
                {{$row->created_at->format('d/m/Y')}} -
                {{date('H:i',strtotime($row->created_at))}}
            </td>
            <td>
                {{$row->updated_at->format('d/m/Y')}} -
                {{date('H:i',strtotime($row->updated_at))}}
            </td>
            {{-- <td><a href="{{ route('participants.create',$row->id)}}" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add Participant</a></td> --}}
            <td><a href="{{ route('participants.edit',$row->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Edit</a></td>
            <td><a href="{{ route('participants.delete',$row->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Delete</a></td>
        </tr>
        @endforeach
    </table>
    @endsection
