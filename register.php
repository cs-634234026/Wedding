<?php
require_once('config.php');

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = md5($_POST["password"]); 
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    // Check if the username already exists
    $sql = "SELECT * FROM wedding_user WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<script>alert('ชื่อผู้ใช้นี้มีอยู่แล้วกรุณาใช้ชื่อผู้ใช้อื่น');</script>";
    } else {
        // Insert new user into the database
        $sql = "INSERT INTO wedding_user (username, password, name, lastname, email, phone, address) VALUES ('$username', '$password', '$name', '$lastname', '$email', '$phone', '$address')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('สมัครสมาชิกเรียบร้อยแล้ว'); window.location.href = 'login.php';</script>";
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
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
    <script src="./js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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
            margin:20%;
            background-color: #f7f7f7;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Adding box-shadow */
            max-width: 600px;
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

        .btn-success {
            /* background-color: #DC9F43;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease; */
        }

        .btn-success:hover {
            background-color: #c88f3f;
        }
    </style>
</head>

<body>
    <div class="container">
    <div>
<h2 class="text-center mt-2 mb-2">สมัครสมาชิกเพื่อใช้งาน</h2>
</div>
        <form id="registrationForm" action="register.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter your lastname" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter your phone" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" placeholder="Enter your address" required></textarea>
            </div>
            <div class="text-center">
                <a href="index.php" class="btn btn-danger">ยกเลิก</a>
                <button type="submit" name="submit" class="btn btn-success">สมัครสมาชิก</button>
            </div>
        </form>
        <div class="mt-3 text-center">
            <p>มีสมาชิกอยู่แล้วใช่ไหม? <a href="login.php">เข้าสู่ระบบ</a></p>
        </div>
    </div>
</body>
</html>
