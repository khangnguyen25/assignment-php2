@extends('layouts.master')

@section('title')
    Cập nhật sản phẩm: {{ $product['name'] }}
@endsection

@section('content')
    @if (!empty($_SESSION['errors']))
        <div class="alert alert-warning">
            <ul>
                @foreach ($_SESSION['errors'] as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @php
            unset($_SESSION['errors']);
        @endphp
    @endif

    @if (isset($_SESSION['status']) && $_SESSION['status'])
        <div class="alert alert-success">{{ $_SESSION['msg'] }}</div>

        @php
            unset($_SESSION['status']);
            unset($_SESSION['msg']);
        @endphp
    @endif

    <a href="{{ url('admin/products/') }}" class="btn-download">
        <i class='bx bx-arrow-back'></i>
        <span class="text">Quay lại</span>
    </a>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Cập nhật sản phẩm</h3>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <form action="{{ url("admin/products/{$product['id']}/update") }}" enctype="multipart/form-data" method="POST">

                <label for="name">Tên</label>
                <input type="text" id="name" name="name" value="{{ $product['name'] }}">

                <label for="image">Hình ảnh</label>
                <input type="file" id="img_thumbnail" name="img_thumbnail">
                <img src="{{ asset($product['img_thumbnail']) }}" width="100px" alt="">

                <label for="content">Mô tả ngắn</label>
                <textarea id="overview" name="overview" rows="4" required>{{ $product['overview'] }}</textarea>

                <label for="content">Nội dung</label>
                <textarea id="contentt" name="content" rows="4" required>{{ $product['content'] }}</textarea>

                <label for="category">Danh mục</label>
                <select name="category_id" id="category_id" class="form-select">
                    <option value="">---</option>
                    @foreach ($categoryPluck as $id => $name)
                        <option @if ($product['category_id'] == $id) selected @endif value="{{ $id }}">
                            {{ $name }}</option>
                    @endforeach
                </select>

                <button type="submit">Submit</button>
            </form>
        </div>

    </div>
@endsection
