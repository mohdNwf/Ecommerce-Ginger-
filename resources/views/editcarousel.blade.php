@extends('master')

@section('content')
<h2>Edit Carousel</h2>
<form action="{{ route('updatecarousel', ['id' => $carousel->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="mb-3 form-check">
            <input type="hidden" name="carousel_id" value="{{ encrypt($carousel->id) }}">

            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $carousel->title }}" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('title')
            <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div class="mb-3 form-check">
            <label>Heading</label>
            <input type="text" class="form-control" name="heading" value="{{ $carousel->heading }}" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('heading')
            <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
            @enderror
            <br>
            <div class="mb-3 form-check">
                <label>Description</label>
                <input type="text" class="form-control" name="description" value="{{ $carousel->description }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('description')
                <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                @enderror
                <br>
                <div class="mb-3 form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" id="exampleInputPassword1">
                    <img src="{{ asset('storage/images/' . $carousel->image) }}" alt="" width="70px" height="80px">
                    @error('image')
                    <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="mb-3 form-check">
                    <label>Starting Price</label>
                    <input type="text" class="form-control" name="starting_price" value="{{ $carousel->starting_price }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('starting_price')
                    <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                    @enderror
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg ms-4">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
