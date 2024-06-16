@extends('master')
@section('content')





<body>
<h2>Create Product</h2>
<form action="{{route('save')}}" method="POST" enctype="multipart/form-data">
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
      <label>Price</label>
      <input type="text" class="form-control" name="price" id="exampleInputEmail1" aria-describedby="emailHelp">
    <br>
    <div class="mb-3 form-check">
      <label>category</label>
<select name="category_id" class="form-control">
<option value="">Select an option</option>
@foreach ($categories as $category)
<option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
</select>
</div>
    <div class="mb-3 form-group">
      <label>Image</label>
      <input type="file" class="form-control" name="image" id="exampleInputPassword1">
    </div>
    <br>
    <div class="mb-3 form-check">
      <label>Description</label>
      <input type="textarea" class="form-control" name="description" id="exampleInputPassword1">
    </div>

    <br>
    <div class="mb-3 form-check">
      <label>Original price</label>
      <input type="textarea" class="form-control" name="original_price" id="exampleInputPassword1">
    </div>

    <br>
    <div class="mb-3 form-check">
      <label>Discount</label>
      <input type="textarea" class="form-control" name="discount" id="exampleInputPassword1">
    </div>

    <br>
    <button type="submit" class="btn btn-primary btn-lg ms-4">Submit</button>
  </div>
</div>
  </form>

@endsection
