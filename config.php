<?php
// กำหนดค่าสำหรับการเชื่อมต่อฐานข้อมูล
$servername = "localhost";
$username = "root";
$password = "";
$database = "wedding";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $database);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
} 

session_start();
// ตั้งค่าชุดอักขระไคลเอนต์เริ่มต้น
mysqli_set_charset($conn, "utf8");

// ตั้งค่า timezone ในประเทศไทย
date_default_timezone_set('Asia/Bangkok');

?>
