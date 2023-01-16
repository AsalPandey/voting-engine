@extends('layouts.app')
@section('content')

    <div style="width: 60%;margin:0 20%;" class="pcoded-content">

        <div class="pcoded-inner-content">

            <div class="main-body">
                <div class="page-wrapper">

                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">

                                <div class="card">
                                    <div class="card-header">
                                        <h3>Create Event</h3>
                                    </div>


                                    <div class="card-body">
                                        <form action="{{route('events.store')}}" method="POST" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            {{--dropdown select event type--}}
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Type</label>
                                                <div class="form-group">
                                                    <select class="form-control" name="type" id="exampleFormControlSelect1">
                                                        @foreach($eventTypes as $eventType)
                                                            <option value="{{$eventType->id}}">
                                                                {{$eventType->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                @error('Type')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Start date</label>
                                                <input type="text" class="form-control @error('start_date') is-invalid @enderror " name="start_date" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('start_date')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">End Date</label>
                                                <input type="text" class="form-control @error('end_date') is-invalid @enderror " name="end_date" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('end_date')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Event Details</label>
                                                <input type="text" class="form-control @error('details') is-invalid @enderror " name="details" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('details')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                            </div>



                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">vote limit</label>
                                                <input type="text" class="form-control @error('vote_limit') is-invalid @enderror " name="vote_limit" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('vote_limit')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">vote cooldown</label>
                                                <input type="text" class="form-control @error('vote_cooldown') is-invalid @enderror " name="vote_cooldown" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('vote_cooldown')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Event organizer</label>
                                                <input type="text" class="form-control @error('event_organizer') is-invalid @enderror " name="event_organizer" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('Event Organizer') {{--this details feild is reuired dekhaucha yedi yaha bhitra details bhayo bhane--}}
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div>

    <form>
        <div class="mb-4">
            <label for="exampleInputEmail1" class="form-label">Package name</label>
            <input type="text" class="form-control @error('event_organizer') is-invalid @enderror " name="event_organizer" id="exampleInputEmail1" aria-describedby="emailHelp">

            @error('Event Organizer') {{--this details feild is reuired dekhaucha yedi yaha bhitra details bhayo bhane--}}
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <div class="mb-4">
            <label for="exampleInputEmail1" class="form-label">Cost</label>
            <input type="text" class="form-control @error('event_organizer') is-invalid @enderror " name="event_organizer" id="exampleInputEmail1" aria-describedby="emailHelp">

            @error('Event Organizer') {{--this details feild is reuired dekhaucha yedi yaha bhitra details bhayo bhane--}}
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-4">
            <label for="exampleInputEmail1" class="form-label">quantity</label>
            <input type="text" class="form-control @error('event_organizer') is-invalid @enderror " name="event_organizer" id="exampleInputEmail1" aria-describedby="emailHelp">

            @error('Event Organizer') {{--this details feild is reuired dekhaucha yedi yaha bhitra details bhayo bhane--}}
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-4">
            <label for="exampleInputEmail1" class="form-label">cooldown</label>
            <input type="text" class="form-control @error('event_organizer') is-invalid @enderror " name="event_organizer" id="exampleInputEmail1" aria-describedby="emailHelp">

            @error('Event Organizer') {{--this details feild is reuired dekhaucha yedi yaha bhitra details bhayo bhane--}}
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-4">
            <label for="exampleInputEmail1" class="form-label">purchase limit</label>
            <input type="text" class="form-control @error('event_organizer') is-invalid @enderror " name="event_organizer" id="exampleInputEmail1" aria-describedby="emailHelp">

            @error('Event Organizer') {{--this details feild is reuired dekhaucha yedi yaha bhitra details bhayo bhane--}}
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <button type="submit" class="btn btn-primary">make a package</button>
    </form>


        @endsection







