@extends('master')
@section('content')

<body>
<h2>Edit Products</h2>
    <form action="{{ route('update')}}" method="POST" enctype="multipart/form-data">
        @csrf
  <div class="container">
    <input type="hidden" name="product_id" value="{{encrypt($product->id)}}">
  <div class="mb-3 form-check">
    <label for="exampleInputEmail1" class="form-label">Name</label>

      <input type="text" class="form-control" name="name" value="{{$product->name}}" id="exampleInputEmail1" aria-describedby="emailHelp">
      @error('name')
        <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
      @enderror
    </div>
    <br>
    <div class="mb-3 form-check">
      <label>Price</label>
      <input type="text" class="form-control" name="price"  value="{{$product->price}}" id="exampleInputEmail1" aria-describedby="emailHelp">
    <br>
    <div class="mb-3 form-check">
      <label>category</label>
<select name="category_id" class="form-control">
<option value="">Select an option</option>
@foreach ($categories as $category)
<option @selected($category->id == $product->category_id) value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
</select>
</div>
    <div class="mb-3 form-group">
      <label>Image</label>
      <input type="file" class="form-control" name="image" id="exampleInputPassword1">
    <img src="{{ asset('storage/images/' . $product->image) }}" alt="" width="70px" height="80px">
</div>

    <br>
    <div class="mb-3 form-check">
      <label>Description</label>
      <input type="textarea" class="form-control" name="description" value="{{$product->description}}" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <label>Original price</label>
      <input type="textarea" class="form-control" name="original_price" value="{{$product->original_price}}" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <label>Discount</label>
      <input type="textarea" class="form-control" name="discount" value="{{$product->discount}}" id="exampleInputPassword1">
    </div>

    <br>
    <button type="submit" class="btn btn-primary btn-lg ms-4">update</button>
  </div>
</div>
  </form>

@endsection
