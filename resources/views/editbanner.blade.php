@extends('master')
@section('content')
<body>
<h2>Edit banner</h2>
<form action="{{ route('updatebanner', ['id' => $banner->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="mb-3 form-check">
            <!-- Encrypt the banner ID and include it as a hidden input -->
            <input type="hidden" name="banner_id" value="{{ encrypt($banner->id) }}">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $banner->name }}" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('name')
                <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div class="mb-3 form-check">
            <label>Heading</label>
            <input type="text" class="form-control" name="heading" value="{{ $banner->heading }}" id="exampleInputEmail1" aria-describedby="emailHelp">
            <br>
            <div class="mb-3 form-check">
                <label>Description</label>
                <input type="textarea" class="form-control" value="{{ $banner->description }}" name="description" id="exampleInputPassword1">
            </div>
        </div>
        <br>
        <div class="mb-3 form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image" id="exampleInputPassword1">
            <img src="{{ asset('storage/images/' . $banner->image) }}" alt="" width="70px" height="80px">
        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-lg ms-4">Update</button>
    </div>
</form>
@endsection
