    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">KhangDz</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sản phẩm</a>
                        </li>

                    </ul>
                    <div class="d-flex">
                        @if (!is_logged())
                            <a href="{{ url('auth/login') }}"> <button class="btn btn-success" id="login">Đăng nhập</button></a>
                        @endif
                        @if (is_logged())
                            <a href="{{ url('auth/logout') }}"><button class="btn btn-danger" id="logout">Đăng
                                    xuất</button></a>
                        @endif
                    </div>

                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://i.pinimg.com/564x/d4/d1/1c/d4d11c4df5d20811ee75b4ad8ca99101.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://i.pinimg.com/564x/7c/aa/15/7caa15a71ce092b3d4f1c9d593d256b3.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://i.pinimg.com/564x/fe/aa/eb/feaaebf02004c2d2ba0bc33ff5b6ce30.jpg"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
