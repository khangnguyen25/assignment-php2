@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($products as $item)
                <div class="col-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset($item['img_thumbnail']) }}" alt="{{ $item['name'] }}" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['name'] }}</h5>
                            <p class="card-text">{{ $item['overview'] }}</p>
                            <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
