@extends('layouts.master')

@section('title')
    Xem chi tiết: {{ $product['name'] }}
@endsection

@section('content')
    <a href="{{ url('admin/products/') }}" class="btn-download">
        <i class='bx bx-arrow-back'></i>
        <span class="text">Back</span>
    </a>
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Sản phẩm chi tiết</h3>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Trường dữ liệu</th>

                        <th>Giá trị</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $key => $value)
                        <tr>
                            <td>{{ $key }}</td>
                            <td></td>
                            <td>{!! $value !!}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
