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
                                        <form action="{{route('eventTypes.store')}}" method="POST" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Event Type</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" value="" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('name')
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

@endsection
