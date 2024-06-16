@extends('master')
@section('content')
<div id="page-content-wrapper">
    <div class="container">

        <h1>category ({{ App\Models\category::count() }})</h1>
                    <a href="{{ route('addcategory') }}" class="btn btn-primary btn-lg">Add Category</a>
             @if (session()->has('message'))<p class="flashmessage">{{session()->get('message')}}</p>  @endif
                    <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">category</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td>{{$category->name}}</td>
                          <td>
                          <a href="{{route('editcategory',encrypt($category->id))}}" class="btn-primary btn-success btn-sm">Edit</a>
                          <a href="{{route('deletecategory',encrypt($category->id))}}" class="btn-primary btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                      @endforeach
                    </tbody>
                  </table>
</div>

@endsection
