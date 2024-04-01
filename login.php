<?php
require_once('config.php');

if (isset($_POST['username'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Assuming 'wedding_user' is the column name for the username
    $query = "SELECT * FROM wedding_user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) == 1){

        $row = mysqli_fetch_array($result);
        session_start();
        $_SESSION['userid'] = $row['id'];
        $_SESSION['username'] = $row['name'] . " " . $row['lastname'];
        $_SESSION['role'] = $row['role'];

        if($_SESSION['role'] == 'admin'){
            header("Location: admin.php");
            exit(); // Exit after redirection
        }
        if($_SESSION['role'] == 'user'){
            header("Location: index.php");
            exit(); // Exit after redirection
        }
    } else {
        echo "<script>alert('Invalid username or password')</script>";
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
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
        .btn-primary:hover {
            background-color: #c88f3f;
        }
    </style>
</head>

<body>
    <div class="container">
<h2 class="text-center mt-2 mb-2">เข้าสู่ระบบเพื่อใช้งาน</h2>
        <form id="registrationForm" action="login.php" method="POST">
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
