@extends('layouts.master')

@section('title')
    User Management
@endsection

@section('content')
    <a href="{{ url('admin/users/create') }}" class="btn-download">
        <i class='bx bx-add-to-queue'></i>
        <span class="text">Add User</span>
    </a>
    @if (isset($_SESSION['status']) && $_SESSION['status'])
        <div class="alert alert-success">
            {{ $_SESSION['msg'] }}
        </div>

        @php
            unset($_SESSION['status']);
            unset($_SESSION['msg']);
        @endphp
    @endif
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>List User</h3>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Emai</th>
                        <th>Type</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user['id'] }}</td>
                            <td>
                                <img src="{{ asset($user['avatar']) }}" alt="" width="100px">
                            </td>
                            <td>{{ $user['name'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td>
                                {!! $user['type'] == 'admin'
                                    ? '<span class="badge bg-primary">admin</span>'
                                    : '<span class="badge bg-warning">member</span>' !!}
                            </td>
                            <td>{{ $user['created_at'] }}</td>
                            <td>{{ $user['updated_at'] }}</td>
                            <td>
                                <a href="{{ url('admin/users/' . $user['id'] . '/edit') }}">
                                    <button type="button" class="status completed3">Sửa</button>
                                </a>
                                <a href="{{ url('admin/users/' . $user['id'] . '/show') }}">
                                    <button type="button" class="status completed">Xem</button>
                                </a>
                                <a href="{{ url('admin/users/' . $user['id'] . '/delete') }}"
                                    onclick="return confirm('Do you want to delete this user?');">
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
