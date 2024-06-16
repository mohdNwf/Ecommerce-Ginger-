@extends('master')
@section('content')
<body>
<h2>Create carousel</h2>
<form action="{{route('savecarousel')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="container">

      <div class="mb-3 form-check">
          <label for="exampleInputEmail1" class="form-label">title</label>

          <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                <label>description</label>
                <input type="text" class="form-control" name="description" id="exampleInputEmail1" aria-describedby="emailHelp">
                <br>
                <div class="mb-3 form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" id="exampleInputPassword1">
                  </div>
                      <br>
            <div class="mb-3 form-check">
                <label>starting_price</label>
                <input type="text" class="form-control" name="starting_price" id="exampleInputEmail1" aria-describedby="emailHelp">
                <br>
    <button type="submit" class="btn btn-primary btn-lg ms-4">Create</button>
  </div>
</div>
  </form>

@endsection
