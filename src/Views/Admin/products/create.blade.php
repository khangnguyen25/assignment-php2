@extends('layouts.master')

@section('title')
    Thêm sản phẩm
@endsection

@section('content')
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


    <a href="{{ url('admin/products/') }}" class="btn-download">
        <i class='bx bx-arrow-back'></i>
        <span class="text">Quay lại</span>
    </a>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Thêm sản phẩm</h3>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <form action="{{ url('admin/products/store') }}" enctype="multipart/form-data" method="POST">

                <label for="name">Tên</label>
                <input type="text" id="name" name="name" required>

                <label for="image">Hình ảnh</label>
                <input type="file" id="img_thumbnail" name="img_thumbnail" required>

                <label for="content">Tổng quan</label>
                <textarea id="overview" name="overview" rows="4" required></textarea>

                <label for="content">Nội dung</label>
                <textarea id="contentt" name="content" rows="4" required></textarea>

                <label for="category">Danh mục</label>
                <select name="category_id" id="category_id" class="form-select">
                    <option value="">---</option>
                    @foreach ($categoryPluck as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>

                <button type="submit">Add</button>
            </form>
        </div>

    </div>
@endsection
