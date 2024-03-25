<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-Dg6zV4QO9eMOxZSwPp4h2QLgE75m3S6ZnE2V9W8+EEB6jQjNDMTfDPfmC1AA7wu8SZ9bhu+eoxLb9jKFGJXY7g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-Dg6zV4QO9eMOxZSwPp4h2QLgE75m3S6ZnE2V9W8+EEB6jQjNDMTfDPfmC1AA7wu8SZ9bhu+eoxLb9jKFGJXY7g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <style>
        @import url(http://fonts.googleapis.com/css?family=Kanit);

        body {
            font-family: 'Kanit', sans-serif;
        }
        .container {
            box-shadow: 0 4px 8px rgba(0, 0, 0.3, 0.3); /* เพิ่มเงา */
        }

    </style>
</head>
<?php include 'nav.php';?>
<body>
<h1 class="text-center mt-5">ประวัติการเช่าชุด</h1>
    <div class="container mt-5">
        <table id="transactionTable" class="table">
            <thead>
                <tr class="text-center">
                    <th>วันที่จอง</th>
                    <th>วันที่รับคืน</th>
                    <th>ข้อมูลประเภทสินค้า</th>
                    <th>ราคา</th>
                    <th>จำนวนชุด</th>
                    <th>สถานะ</th>
                    <th>ดูข้อมูลทั้งหมด</th>
                    <th>ดูตารางจอง</th>
                    <th>แนบสลิปโอนเงิน</th>
                    <th>สลิปโอนเงิน</th>
                    <th>ยกเลิกบริการ</th>
                    <th>พิมพ์ใบเสร็จ</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <td>13/5/2566</td>
                <td>16/5/2566</td>
                <td>ชุดแต่งงาน</td>
                <td>1600</td>
                <td>2</td>
                <td>กำลังรออนุมัติ</td>
                <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">ดูข้อมูลทั้งหมด</button></td>
                <td><button type="button" class="btn btn-success">ตารางจอง</button></td>
                <td><button type="button" class="btn btn-success" onclick="window.location.href='image.php'">แนบสลิป</button></td>
                <td><button type="button" class="btn btn-success">ดูสลิปโอนเงิน</button></td>
                <td><button type="button" class="btn btn-danger">ยกเลิก</button></td>
                <td><button type="button" class="btn btn-primary">Print</button></td>
            </tbody class="text-center">
            <tbody class="text-center">
                <td>13/5/2566</td>
                <td>16/5/2566</td>
                <td>ชุดแต่งงาน</td>
                <td>1600</td>
                <td>2</td>
                <td>กำลังรออนุมัติ</td>
                <td><button type="button" class="btn btn-success">ดูข้อมูลทั้งหมด</button></td>
                <td><button type="button" class="btn btn-success">ตารางจอง</button></td>
                <td><button type="button" class="btn btn-success">แนบสลิป</button></td>
                <td><button type="button" class="btn btn-success">ดูสลิปโอนเงิน</button></td>
                <td><button type="button" class="btn btn-danger">ยกเลิก</button></td>
                <td><button type="button" class="btn btn-primary">Print</button></td>
            </tbody>
        </table>
    </div>

    <h1 class="text-center mt-5">ประวัติการเช่าเครื่องประดับ</h1>
    <div class="container mt-5">
        <table id="transactionTable" class="table">
            <thead>
                <tr class="text-center">
                    <th>วันที่จอง</th>
                    <th>วันที่รับคืน</th>
                    <th>ข้อมูลประเภทสินค้า</th>
                    <th>ราคา</th>
                    <th>จำนวนชุด</th>
                    <th>สถานะ</th>
                    <th>ดูข้อมูลทั้งหมด</th>
                    <th>ดูตารางจอง</th>
                    <th>แนบสลิปโอนเงิน</th>
                    <th>สลิปโอนเงิน</th>
                    <th>ยกเลิกบริการ</th>
                    <th>พิมพ์ใบเสร็จ</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <td>13/5/2566</td>
                <td>16/5/2566</td>
                <td>ชุดแต่งงาน</td>
                <td>1600</td>
                <td>2</td>
                <td>กำลังรออนุมัติ</td>
                <td><button type="button" class="btn btn-success">ดูข้อมูลทั้งหมด</button></td>
                <td><button type="button" class="btn btn-success">ตารางจอง</button></td>
                <td><button type="button" class="btn btn-success">แนบสลิป</button></td>
                <td><button type="button" class="btn btn-success">ดูสลิปโอนเงิน</button></td>
                <td><button type="button" class="btn btn-danger">ยกเลิก</button></td>
                <td><button type="button" class="btn btn-primary">Print</button></td>
            </tbody>
            <tbody class="text-center">
                <td>13/5/2566</td>
                <td>16/5/2566</td>
                <td>ชุดแต่งงาน</td>
                <td>1600</td>
                <td>2</td>
                <td>กำลังรออนุมัติ</td>
                <td><button type="button" class="btn btn-success">ดูข้อมูลทั้งหมด</button></td>
                <td><button type="button" class="btn btn-success">ตารางจอง</button></td>
                <td><button type="button" class="btn btn-success">แนบสลิป</button></td>
                <td><button type="button" class="btn btn-success">ดูสลิปโอนเงิน</button></td>
                <td><button type="button" class="btn btn-danger">ยกเลิก</button></td>
                <td><button type="button" class="btn btn-primary">Print</button></td>
            </tbody>
        </table>
    </div>

    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ข้อมูลทั้งหมด</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- ตัวอย่างเนื้อหาใน Modal -->
        <p>วันที่จอง: 13/5/2566</p>
        <p>วันที่รับคืน: 16/5/2566</p>
        <p>ข้อมูลประเภทสินค้า: ชุดแต่งงาน</p>
        <p>ราคา: 1600</p>
        <p>จำนวนชุด: 2</p>
        <p>สถานะ: กำลังรออนุมัติ</p>
        <!-- เพิ่มเนื้อหาเพิ่มเติมตามต้องการ -->
      </div>
      <div class="modal-footer">
        <!-- เพิ่มปุ่มหรืออื่นๆ ตามต้องการ -->
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <button type="button" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>

         
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#transactionTable').DataTable();
        });
    </script>
</body>
</html>
