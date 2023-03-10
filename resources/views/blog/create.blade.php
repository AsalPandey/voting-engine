@extends('layouts.app')
@section('content')
    <main>
        <div class="container" style="padding: 40px; border: 1px solid #AEAEAE;  margin-right: 40px; margin-inside: 20px; margin-top: 40px;">
        <form action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" class="form-control" name="title" @error('title') is-invalid @enderror id="exampleFormControlInput1" >

                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="description" @error('description') is-invalid @enderror id="exampleFormControlTextarea1" rows="3"></textarea>

                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Text</label>
                <textarea class="form-control" name="text" @error('text') is-invalid @enderror id="exampleFormControlTextarea1" rows="5"></textarea>

                @error('text')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Post</button>
        </form>
        </div>
    </main>
@endsection
