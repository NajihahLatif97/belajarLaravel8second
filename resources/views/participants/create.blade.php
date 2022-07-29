@extends('layouts.mariBelajarLaravel8')

@section('mainContent')
    <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8">
                <form class="form-horizontal" method="POST" action="{{ route('participants.store')}}">
                
                    @csrf  {{-- tak nak bagi org lain isi form--}}
                    <input type="hidden" name="event_id" value="{{$eventM->id}}">

                <div class="form-group">
                    <label for="input_userID" class="col-sm-2 control-label">User ID</label>
                    <div class="col-sm-10">
                        <input type="text" name="user_id" class="form-control" id="input_userID" placeholder="user_id">
                    </div>
                </div>

                {{-- <div class="form-group">
                    <label for="input_eventID" class="col-sm-2 control-label">Event ID</label>
                    <div class="col-sm-10">
                        <input type="text" name="event_id" class="form-control" id="input_eventID" placeholder="event_id">
                    </div>
                </div> --}}

                <div class="form-group">
                    <label for="inputAttend" class="col-sm-2 control-label">Attending</label>
                    <div class="col-sm-10">
                        {{-- <input type="radio" name="attending" class="form-control" id="inputAttend" placeholder="attending">Ya
                        <input type="radio" name="attending" class="form-control" id="inputAttend" placeholder="attending">Tidak --}}
                        <input type="radio" id="attending" name="attending" value="1">
                        <label for="Ya">Ya</label><br>
                        <input type="radio" id="attending" name="attending" value="0">
                        <label for="Tidak">Tidak</label><br>

                    </div>
                </div>

                <div class="form-group">
                    <label for="inputReason" class="col-sm-2 control-label">Reason For Not Attending</label>
                    <div class="col-sm-10">
                        <input type="text" name="reason_for_not_attending" class="form-control" id="inputReason" placeholder="reason">
                    </div>
                </div>

                
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <input type="submit" name="submitNewParticipant" class="btn btn-primary" value="Submit"/>
                    </div>
                </div>

                
            </form>
            </div>        
      </div>
    <div class="col-md-2"></div>
</div>
@endsection