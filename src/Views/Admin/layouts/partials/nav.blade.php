<!-- SIDEBAR -->
<section id="sidebar">
    <a href="{{ url('admin') }}" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">Admin</span>
    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="{{ url('admin') }}">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Thống kê</span>
            </a>
        </li>
        <li>
            <a href="{{ url('admin/products/') }}">
                <i class='bx bx-news'></i>
                <span class="text">Sản phẩm</span>
            </a>
        </li>
        <li>
            <a href="{{ url('admin/users/') }}">
                <i class='bx bx-user'></i>
                <span class="text">Người dùng</span>
            </a>
        </li>
        <li>
            <a href="{{ url('') }}">
                <i class='bx bxl-chrome'></i>
                <span class="text">Giao diện người dùng</span>
            </a>
        </li>
       
    </ul>
    <ul class="side-menu">
        <li>
            @if (is_logged())
                <a href="{{ url('auth/logout') }}" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Đăng xuất</span>
                </a>
            @endif
        </li>
    </ul>
</section>
<!-- SIDEBAR -->
