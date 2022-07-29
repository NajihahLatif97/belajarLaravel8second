@extends('layouts.mariBelajarLaravel8')

@section('mainContent')
    <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8">
                <form class="form-horizontal" method="POST" action="{{route('events.update')}}">
                @csrf  {{-- tak nak bagi org lain isi form--}}

                <input type="hidden" name="event_id" value="{{$eventM->id}}"/>
                  

                <div class="form-group">
                    <label for="inputtitle" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="inputtitle" value="{{$eventM->title}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputVenue" class="col-sm-2 control-label">Venue</label>
                    <div class="col-sm-10">
                        <input type="text" name="venue" class="form-control" id="inputVenue" value="{{$eventM->venue}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputDate" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-10">
                        <input type="date" name="date" class="form-control" id="inputDate" value="{{$eventM->date}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputOrganizer" class="col-sm-2 control-label">Organizer</label>
                    <div class="col-sm-10">
                        <input type="text" name="organizer_id" class="form-control" id="inputOrganizer" value="{{$eventM->organizer_id}}">
                    </div>
                </div>

                
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <input type="submit" name="submitNewEvent" class="btn btn-primary" value="Update"/>
                    </div>
                </div>

                
            </form>
            </div>        
      </div>
    <div class="col-md-2"></div>
</div>
@endsection