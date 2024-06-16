@extends('master')
@section('content')
<body>
<h2>Create Product</h2>
<form action="{{route('savebanner')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="container">
  <div class="mb-3 form-check">
    <label for="exampleInputEmail1" class="form-label">Name</label>

      <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
      @error('name')
        <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
      @enderror
    </div>
    <br>
    <div class="mb-3 form-check">
      <label>Heading</label>
      <input type="text" class="form-control" name="heading" id="exampleInputEmail1" aria-describedby="emailHelp">
      <br>
        <div class="mb-3 form-check">
          <label>Description</label>
          <input type="textarea" class="form-control" name="description" id="exampleInputPassword1">
        </div>
   <br>
    <div class="mb-3 form-group">
      <label>Image</label>
      <input type="file" class="form-control" name="image" id="exampleInputPassword1">
    </div>
    <br>
    <button type="submit" class="btn btn-primary btn-lg ms-4">Submit</button>
  </div>
</div>
  </form>

@endsection
