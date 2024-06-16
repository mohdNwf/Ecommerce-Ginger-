@extends('master')
@section('content')
<body>
<h2>Edit category</h2>
<form action="{{ route('updatecategory', ['id' => $category->id]) }}" method="POST">
    @csrf
  <div class="container">
    <input type="hidden" name="category_id"value="{{encrypt($category->id)}}">
  <div class="mb-3 form-check">
    <label for="exampleInputEmail1" class="form-label"> category Name</label>

      <input type="text" class="form-control" name="name" value="{{$category->name}}" id="exampleInputEmail1" aria-describedby="emailHelp">
      @error('name')
        <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
      @enderror
    </div>
<br>
    <button type="submit" class="btn btn-primary btn-lg ms-4">Update</button>
  </div>
</div>
  </form>

@endsection
