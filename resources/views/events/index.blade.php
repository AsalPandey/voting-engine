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
                                        <a href="{{route('events.create')}}" class="btn btn-primary" action="">Create</a>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">

                                            @if (count($events)===0)
                                                <h4 style="text-align: center;margin: 10%"> Sorry, No Events to show</h4>

                                            @else
                                                <table class="table table-striped table-bordered nowrap" id="myTable">
                                                    <thead>
                                                    <tr>
                                                        <th>type</th>
                                                        <th>start date</th>
                                                        <th>end date</th>
                                                        <th>event details</th>
                                                        <th>free_vote</th>
                                                        <th>vote_limit</th>
                                                        <th>vote_cooldown</th>
                                                        <th colspan = 2>Actions</th>
                                                    </tr>
                                                    </thead>

                                                    @foreach ($events as $event)
                                                        <tr>
                                                            <td>{{ $event->type }}</td>
                                                            <td>{{ $event->start_date}}</td>
                                                            <td>{{ $event->end_date}}</td>
                                                            <td>{{ $event->details}}</td>
                                                            <td>{{ $event->vote_limit}}</td>
                                                            <td>{{ $event->vote_cooldown}}</td>
                                                            <td>{{ $event->event_organizer}}</td>


                                                            <td>
                                                                <a href="{{ route('events.edit',$event->id)}}" class="btn btn-primary">Edit</a>
                                                            </td>
                                                            <td>
                                                                <form action="{{ route('events.destroy', $event->id)}}" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach


                                                </table>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--            {{ $events->links() }}--}}




@endsection
