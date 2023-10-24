@extends('app')

@section('content')
    <div class="container">
        
        <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input class="form-control" type="text" placeholder="Title" name="title">
            <textarea name="body" class="form-control" id="body"></textarea>
            <input type="file" name="image" id="image" class="form-control">
            <input type="submit" value="Send" class="px-5 mt-3 btn btn-sm btn-primary ">
        </form>
    </div>
    <div class="container my-3">
        <a href="{{ route('files') }}" class="px-5 btn btn-sm btn-warning">Media</a>
    </div>

@endsection
