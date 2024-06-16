@extends('master')
@section('content')
<div id="page-content-wrapper">
    <div class="container">

        <h1>Banner ({{ App\Models\banner::count() }})</h1>
                    <a href="{{route('addbanner')}}" class="btn btn-primary btn-lg">Add Banner</a>
             @if (session()->has('message'))<p class="flashmessage">{{session()->get('message')}}</p>  @endif
                    <table class="table">
                    <thead>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">image</th>
                        <th scope="col">name</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $banner)
                        <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td><img src="{{ asset('storage/images/' . $banner->image) }}" alt="{{ $banner->name }}" width="70px" height="80px"></td>
                          <td>{{$banner->name}}</td>
                          <td>{{$banner->heading}}</td>
                          <td>{{$banner->description}}</td>
                          <td>
                          <td>
                            <a href="{{route('editbanner',encrypt($banner->id))}}" class="btn-primary btn-success btn-sm">Edit</a>
                            <a href="{{route('deletebanner',encrypt($banner->id))}}" class="btn-primary btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
@endforeach
                    </tbody>
                  </table>
</div>

@endsection
