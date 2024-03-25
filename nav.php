<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #DC9F43; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">ร้าน Wedding</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">ข้อมูลสินค้า</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">เครื่องประดับ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">เกี่ยวกับเรา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="history.php">ประวัติการทำรายการ</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <!-- <a href="register.php" class="me-2 btn btn-success" role="button">สมัครสมาชิก</a> -->
                    <a href="login.php" class="me-2 btn btn-success" role="button">เข้าสู่ระบบ</a>
                </form>
            </div>
        </div>
    </nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ยินดีต้อนรับกรุณาล๊อคอินเพื่อใช้บริการ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-4">โปรดล๊อคอินเข้าสู่ระบบเพื่อใช้บริการ</p>

                <form id="formAuthentication" class="mb-3" >
                    <div class="mb-3">
                        <label for="email" class="form-label">ไอดี</label>
                        <input type="text" class="form-control" id="email" name="email-username"
                            placeholder="Enter your  username" autofocus>
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="password">พาสเวิร์ด</label>
                        </div>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" name="password"
                                placeholder="Enter your password" aria-describedby="password" />
                        </div>
                    </div>
                    <div class="mb-3">
                    </div>
                    <button class="btn btn-primary d-grid w-100">
                        เข้าสู่ระบบ
                    </button>
                </form>

                <p class="text-center">
                    <span>ยังไม่ได้เป็นสมาชิก?</span>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <span>สมัครสมาชิก</span>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->