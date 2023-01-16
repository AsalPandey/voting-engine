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
                                        <a href="{{route('eventTypes.create')}}" class="btn btn-primary" action="">Create</a>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">

                                            @if (count($eventTypes)===0)
                                                <h4 style="text-align: center;margin: 10%"> Sorry, No event_types to show</h4>

                                            @else
                                                <table class="table table-striped table-bordered nowrap" id="myTable">
                                                    <thead>
                                                    <tr>
                                                        <th>Sno</th>
                                                        <th>event types</th>
                                                        <th colspan = 2>Actions</th>
                                                    </tr>
                                                    </thead>

                                                    @foreach ($eventTypes as $data)
                                                        <tr>
                                                            <td>{{ $data->id }}</td>
                                                            <td>{{ $data->name }}</td>


                                                            <td>
                                                                <a href="{{ route('eventTypes.edit',$data->id)}}" class="btn btn-primary">Edit</a>
                                                            </td>
                                                            <td>
                                                                <form action="{{ route('eventTypes.destroy', $data->id)}}" method="post">
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
    {{--            {{ $eventTypes->links() }}--}}



@endsection
