@extends('layouts.master')

@section('title')
    Product Management
@endsection

@section('content')
    <a href="{{ url('admin/products/create') }}" class="btn-download">
        <i class='bx bx-add-to-queue'></i>
        <span class="text">Thêm sản phẩm</span>
    </a>
    @if (isset($_SESSION['status']) && $_SESSION['status'])
        <div class="alert alert-success">{{ $_SESSION['msg'] }}</div>

        @php
            unset($_SESSION['status']);
            unset($_SESSION['msg']);
        @endphp
    @endif

    @if (isset($_SESSION['status']) && !$_SESSION['status'])
        <div class="alert alert-warning">{{ $_SESSION['msg'] }}</div>

        @php
            unset($_SESSION['status']);
            unset($_SESSION['msg']);
        @endphp
    @endif

    <div class="table-data">
        <div class="order">
            <div class="header">
                <h3>Danh sách sản phẩm</h3>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Danh mục</th>
                        <th>Thời gian tạo</th>
                        <th>Thời gian sửa</th>
                        <th>Thao tác</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product['id'] }}</td>
                            <td>{{ $product['name'] }}</td>
                            <td>
                                <img src="{{ asset($product['img_thumbnail']) }}" width="100px" alt="">
                            </td>
                            <td>{{ $product['c_name'] }}</td>
                            <td>{{ $product['created_at'] }}</td>
                            <td>{{ $product['updated_at'] }}</td>
                            <td>
                                <a href="{{ url("admin/products/{$product['id']}/edit") }}">
                                    <button type="button" class="status completed3">Sửa</button>
                                </a>
                                <a href="{{ url("admin/products/{$product['id']}/show") }}">
                                    <button type="button" class="status completed">Xem</button>
                                </a>
                                <a href="{{ url("admin/products/{$product['id']}/delete") }}"
                                    onclick="return confirm('Do you want to delete this product?');">
                                    <button type="button" class="status completed2">Xóa</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
