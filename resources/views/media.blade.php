@extends('app')

@section('content')
    <div class="container">
        <h1>Media Library</h1>
        <div class="row bg-light px-5">
            {{-- {{dd($files)}} --}}
            <form action="{{ route('files.upload') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input class="form-control rounded-0" type="file" name="img" id="img">
                    </div>
                    <div class="col-md-6">
                        <input class="btn btn-dark rounded-0" type="submit" value="Send">
                    </div>
                </div>
        </div>
        </form>
        @empty(!$files)
            @foreach ($files as $file)
                <div class="col-md-3 g-2" style="">
                    <div class="image-container position-relative">
                        <img class="img-fluid w-100" src="{{ Storage::disk('media')->url($file) }}" alt="Image">
                        <button class="hover-button">Delete</button>
                    </div>
                </div>
            @endforeach
        @else
            <div class="my-5">
                no media
            </div>

            @endif
        </div>
        </div>
    @endsection
