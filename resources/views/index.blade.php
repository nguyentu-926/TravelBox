@extends('layouts.app')

@section('content')
    <h2>Danh sách sản phẩm</h2>
    @foreach($products as $product)
        <div>
            <h3>{{ $product->name }}</h3>
            <p>Giá: {{ number_format($product->price) }} VND</p>
            <a href="{{ route('products.show', $product->id) }}">Xem chi tiết</a>
        </div>
    @endforeach
@endsection
