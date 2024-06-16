@extends('master')
@section('content')
<div id="page-content-wrapper">
    <div class="container">

        <h1>Carousel ({{ App\Models\banner::count() }})</h1>
                    <a href="{{route('addcarousel')}}" class="btn btn-primary btn-lg">Add Carousel</a>
             @if (session()->has('message'))<p class="flashmessage">{{session()->get('message')}}</p>  @endif
                    <table class="table">
                    <thead>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">image</th>
                        <th scope="col">title</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Description</th>
                        <th scope="col">starting_price</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($carousels as $carousel)
                        <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td><img src="{{ asset('storage/images/' . $carousel->image) }}" alt="{{ $carousel->name }}" width="70px" height="80px"></td>
                          <td>{{$carousel->title}}</td>
                          <td>{{$carousel->heading}}</td>
                          <td>{{$carousel->description}}</td>
                          <td>{{$carousel->starting_price}}</td>
                          <td>
                          <td>
                            <a href="{{route('editcarousel',encrypt($carousel->id))}}" class="btn-primary btn-success btn-sm">Edit</a>
                            <a href="{{route('deletecarousel',encrypt($carousel->id))}}" class="btn-primary btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
@endforeach

                    </tbody>
                  </table>
</div>

@endsection
