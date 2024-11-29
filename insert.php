<?php
include('config.db.php'); // ดึงไฟล์เชื่อมต่อฐานข้อมูลมาใช้งาน

$dataJSON = json_decode(file_get_contents('php://input'), true);
$message = [];

// ประกาศตัวแปร สำหรับเพิ่มข้อมูล
$customer_room = $dataJSON['customer_room'];
$password = $dataJSON['password'];

// เขียนคำสั่งในการเพิ่มข้อมูล
$sql = "INSERT INTO `customerroom_table` (`customer_room_id`, `password`) VALUES ('$customer_room_id', '$password');";

// รันคำสั่ง
$qr_insert = mysqli_query($conn, $sql);

if ($qr_insert) {
    // เพิ่มข้อมูลได้
    http_response_code(201);
    $message['status'] = "เพิ่มข้อมูลสำเร็จ";
} else {
    // เพิ่มข้อมูลไม่ได้
    http_response_code(422);
    $message['status'] = "เพิ่มข้อมูลไม่สำเร็จ";
}
// ส่งข้อมูลการดำเนินการกลับไป
echo json_encode($message);
echo mysqli_error($conn);

?>