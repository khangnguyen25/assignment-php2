@extends('layouts.master')

@section('title')
    Update User: {{ $user['name'] }}
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

    <a href="{{ url('admin/users/') }}" class="btn-download">
        <i class='bx bx-arrow-back'></i>
        <span class="text">Back</span>
    </a>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Edit User</h3>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <form action="{{ url("admin/users/{$user['id']}/update") }}" enctype="multipart/form-data" method="POST">

                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ $user['name'] }}">

                <label for="avatar" class="form-label">Avatar</label>
                <input type="file" class="form-control" id="avatar" placeholder="Enter avatar" name="avatar">
                <img src="{{ asset($user['avatar']) }}" alt="" width="100px">

                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email"
                    value="{{ $user['email'] }}" name="email">
                <br>
                <label class="form-label">Type</label>

                <select name="type" id="type">
                    <option value="admin" @if ($user['type'] == 'admin') checked @endif name="type">Admin</option>
                    <option value="member" @if ($user['type'] == 'member') checked @endif name="type">Member</option>
                </select>
               
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" id="password" placeholder="Enter password" name="password">

                <button type="submit">Submit</button>
            </form>
        </div>

    </div>



@endsection
