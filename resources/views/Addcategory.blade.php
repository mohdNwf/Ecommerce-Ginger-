@extends('master')
@section('content')
<body>
<h2>Create category</h2>
<form action="{{route('savecategory')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="container">
  <div class="mb-3 form-check">
    <label for="exampleInputEmail1" class="form-label"> category Name</label>

      <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
      @error('name')
        <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
      @enderror
    </div>
<br>
    <button type="submit" class="btn btn-primary btn-lg ms-4">Create</button>
  </div>
</div>
  </form>

@endsection
