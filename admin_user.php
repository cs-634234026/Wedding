<?php
require_once('config.php');
if(!$_SESSION['userid']){
    header("Location:admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <?php include 'adminnavbar.php';?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">ข้อมูลผู้ใช้งานทั้งหมด</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">ข้อมูลทั้งหมด</li>
                        </ol>
                        
 <!-- Modal -->
 <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        เพิ่มข้อมูลร้าน
                        </button>

                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลร้าน</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <!-- เพิ่มฟอร์มข้อมูลที่นี่ -->
                          <form action="process.php" method="post">
                            <div class="mb-3">
                              <label for="map" class="form-label">username</label>
                              <input type="text" class="form-control" id="map" name="map" required>
                            </div>

                            <div class="mb-3">
                              <label for="phone" class="form-label">password</label>
                              <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>

                            <div class="mb-3">
                              <label for="phone" class="form-label">password</label>
                              <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>

                            <div class="mb-3">
                              <label for="phone" class="form-label">password</label>
                              <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>

                            <div class="mb-3">
                              <label for="facebook" class="form-label">lastname</label>
                              <input type="text" class="form-control" id="facebook" name="facebook" required>
                            </div>

                            <div class="mb-3">
                              <label for="phone" class="form-label">phone</label>
                              <input type="number" class="form-control" id="line" name="line" required>
                            </div>

                            <div class="mb-3">
                              <label for="about" class="form-label">addre</label>
                              <textarea class="form-control" id="about" name="about" rows="3" required></textarea>
                            </div>
                          </form>
                          <!-- จบฟอร์ม -->
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                              <button type="button" class="btn btn-success">บันทึกข้อมูล</button>
                            </div>
                          </div>
                        </div>
                      </div>
                  <!-- Modal -->

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                ข้อมูลทั้งหมดของผู้ใช้
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ที่งตั้ง</th>
                                            <th>เบอร์ติดต่อ</th>
                                            <th>อีเมล์</th>
                                            <th>Social</th>
                                            <th>แผนที่ร้าน</th>
                                            <th>ดูข้อมูล</th>
                                            <th>แก้ไขและลบ</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                           
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                          
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                           
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                           
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="/demo/chart-area-demo.js"></script>
        <script src="/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
