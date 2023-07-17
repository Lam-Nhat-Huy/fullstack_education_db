<!-- Phần header  -->
<header>
    <div class="header_logo">
        <a href="" class="header_logo-link">
            Fullstack
        </a>
    </div>
    <nav>
        <ul class="nav_list mt-3">
            <li class="nav_list-item">
                <a href="" class="nav_list-link">Trang Chủ</a>
            </li>
            <li class="nav_list-item">
                <a href="#" class="nav_list-link">Khóa Học</a>
            </li>
            <li class="nav_list-item">
                <a href="#" class="nav_list-link">Hỗ Trợ</a>
            </li>
            <li class="nav_list-item">
                <a href="#" class="nav_list-link">Liên Hệ</a>
            </li>
        </ul>
    </nav>

    <div class="login">
        <!-- Button trigger modal -->
        <a type="button" class="cart" data-bs-toggle="modal" data-bs-target="#cartModal">
            Khóa Học Của Tôi
        </a>

        <!-- Modal -->
        <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Khóa Học Của Tôi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex justify-content-center">
                        <button type="button" class="model-login btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginUser">
                            Vui Lòng đăng nhập
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="registerUser">
            <button type="button" class="cart" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Đăng Ký
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Đăng Ký</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="./code.php" method="post">
                                                <div class="mb-3">
                                                    <label for="">Họ tên: </label>
                                                    <input type="text" class="form-control" name="name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Email: </label>
                                                    <input type="email" class="form-control" name="email">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Số Điện Thoại: </label>
                                                    <input type="number" class="form-control" name="phone">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Mật Khẩu: </label>
                                                    <input type="password" class="form-control" name="password">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Nhập Lại Mật Khẩu: </label>
                                                    <input type="password" class="form-control" name="cpassword">
                                                </div>
                                                <button type="submit" name="registerUser" class="btn btn-primary float-end">Đăng Ký</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="loginUser">
            <button type="button" class="cart" data-bs-toggle="modal" data-bs-target="#loginUser">
                Đăng Nhập
            </button>
            <!-- Modal -->
            <div class="modal fade" id="loginUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Đăng Nhập</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="./code.php" method="post">
                                                <div class="mb-3">
                                                    <label for="">Email: </label>
                                                    <input type="email" class="form-control" name="email">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Mật Khẩu: </label>
                                                    <input type="password" class="form-control" name="password">
                                                </div>
                                                <button type="submit" name="loginUser" class="btn btn-primary float-end">Đăng Nhập</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</header>