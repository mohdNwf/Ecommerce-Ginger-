@extends('master')

@section('content')
<div id="page-content-wrapper">
    <div class="container">

        <h1>Products ({{ $products->count() }})</h1>
        <a href="{{ route('create') }}" class="btn btn-primary btn-lg">Add Product</a>

        @if ($products->isEmpty())
            <p>No products found.</p>
        @else
            @if (session()->has('message'))
                <p class="flashmessage">{{ session()->get('message') }}</p>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Original Price</th>
                        <th scope="col">Discount</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}" width="70px" height="80px"></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ number_format($product->price, 2) }}</td>
                            <td>{{ $product->category ? $product->category->name : 'Uncategorized' }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->original_price }}</td>
                            <td>{{ $product->discount }}</td>
                            <td>
                                <a href="{{ route('edit', encrypt($product->id)) }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ route('delete', encrypt($product->id)) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection
