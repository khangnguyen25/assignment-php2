@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <div class="head-title">
        <div class="left">
            <h1>Dashboard</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Home</a>
                </li>
            </ul>
        </div>
        <a href="#" class="btn-download">
            <i class='bx bxs-cloud-download'></i>
            <span class="text">Download PDF</span>
        </a>
    </div>

    <ul class="box-info">
        <li>
            <i class='bx bxs-calendar-check'></i>
            <span class="text">
                <h3>1020</h3>
                <p>New Order</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-group'></i>
            <span class="text">
                <h3>2834</h3>
                <p>Visitors</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-dollar-circle'></i>
            <span class="text">
                <h3>$2543</h3>
                <p>Total Sales</p>
            </span>
        </li>
    </ul>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>User</h3>
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
                        {{-- <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th> --}}

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
                            {{-- <td>{{ $user2['created_at'] }}</td>
                            <td>{{ $user2['updated_at'] }}</td> --}}
                          
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
