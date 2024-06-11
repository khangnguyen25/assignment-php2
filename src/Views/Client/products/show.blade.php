@extends('layouts.master')

@section('title', $product['name'])

@section('content')
    <div class="product-detail">
        <div class="product-image">
            <img src="{{ asset($product['img_thumbnail']) }}" alt="{{ $product['name'] }}">
        </div>
        <div class="product-info">
            <h1>{{ $product['name'] }}</h1>
            <p class="description">{{ $product['description'] }}</p>
            <div class="product-actions">
                <button>Add to Cart</button>
            </div>
        </div>
    </div>
@endsection
