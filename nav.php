<?php
require_once('config.php');
?>


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
            <div class="d-flex">
                <div class="text-end ml-lg-4">
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                        <?php echo $_SESSION['username']?>
                    </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li><button class="dropdown-item" type="button" onclick="window.location.href='profile.php'">ข้อมูลส่วนตัว</button></li>
                            <li><button class="dropdown-item" type="button" onclick="window.location.href='history.php'">ประวัติการใช้งาน</button></li>
                            <li><button class="dropdown-item" type="button" onclick="window.location.href='admin/index.php'">ระบบหลังบ้าน</button></li>
                            <hr>
                            <li><button class="dropdown-item" type="button" onclick="window.location.href='logout.php'">ออกจากระบบ</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
