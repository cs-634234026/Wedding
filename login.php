<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-Dg6zV4QO9eMOxZSwPp4h2QLgE75m3S6ZnE2V9W8+EEB6jQjNDMTfDPfmC1AA7wu8SZ9bhu+eoxLb9jKFGJXY7g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <style>
        @import url(http://fonts.googleapis.com/css?family=Kanit);

        body {
            font-family: 'Kanit', sans-serif;
            background-color: #DC9F43;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            margin:30%;
            background-color: #f7f7f7;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Adding box-shadow */
            max-width: 700px;
        }

        .form-label {
            color: #333;
            font-weight: bold;
        }

        .form-control {
            border: 2px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
            width: 100%;
        }

        .form-control:focus {
            border-color: #DC9F43;
            box-shadow: 0 0 5px rgba(220, 159, 67, 0.5);
            outline: none;
        }

        /* .btn-primary {
            background-color: #DC9F43;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        } */

        .btn-primary:hover {
            background-color: #c88f3f;
        }
    </style>
</head>

<body>
    <div class="container">
<h2 class="text-center mt-2 mb-2">เข้าสู่ระบบเพื่อใช้งาน</h2>
        <form id="registrationForm" action="register.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="text-center">
                <a href="index.php" class="btn btn-danger">กลับไปหน้าหลัก</a>
                <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
            </div>
        </form>
            <div class="mt-3 text-center">
                <p>ยังไม่ได้เป็นสมาชิกใช่ไหม? <a href="register.php">สมัครสมาชิก</a></p>
            </div>
    </div>
</body>
</html>
