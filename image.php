
<!DOCTYPE html>
<html lang="en ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="style.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
        @import url(http://fonts.googleapis.com/css?family=Kanit);

        body {
            font-family: 'Kanit', sans-serif;
            background-color: #17202A;
        }
        h4{
            color: white;
        }
        
    </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <main class="text-center">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="text-light">แนบสลิปโอนเงิน</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-secondary" onclick="window.location.href='history.php'">ย้อนกลับ</button>
          </div>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-6">
            <div class="card">
              <h3 class="card-header mt-3">โปรดแนบสลิปโอนเงินเพื่อให้ Admin ตรวจสอบ</h3>
              <div class="card-body">
                <form method="post" action="updatimage.php" enctype="multipart/form-data">
                <input type="hidden" name="old_photo_path">
                <input type="hidden" name="id">

                <div class="mb-3">
                   <h3>หมายเลขบัญชีธนาคาร : 526-584-xxx-x</h3>
                   <h3>ชื่อบัญชีธนาคาร : นายธีรxxx นามxxxx</h3>
                   <h3>Scan QRcode</h3>
                   <img src="./img/example.png" class="img-fluid img-size" alt="proflie picture" width="200px"
                        style="border-radius: 20px;  box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.25);">
                  </div>

                  <div class="mb-3">
                    <img src="" id="preview" width="200" class="mx-auto d-block mb-3">
                    <input type="file" class="form-control" name="pic" id="formFile" accept=".jpg, .jpeg, .png" value="" />
                  </div>


                  
                  <button type="submit" name="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

</body>

</html>