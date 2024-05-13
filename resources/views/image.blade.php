@extends('layouts.master')
@section('content2')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    ))
@endif
<div class="m-5">
    <form method="post" action="{{route("uploadImage")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-check">
            <img src="{{ asset('storage/photo.jpg') }}" alt="avatar" class="w-10 h-10">
            <label class="form-label" for="customFile">Default file input example</label>
            <input type="file" name="file" class="form-control" id="customFile" />
            <button type="submit" class="btn btn-primary my-2">Submit</button>
        </div>
    </form>
</div>

@endsection