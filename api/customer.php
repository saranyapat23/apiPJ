<?php
    include('../config.db.php');
    $table = "CREATE TABLE IF NOT EXISTS customerroom_table(
    customer_room_id int(6) AUTO_INCREMENT COMMENT 'รหัสห้อง',
    customer_room varchar(20) COMMENT 'เลขห้องลูกค้า' ,
    password varchar(100) COMMENT 'รหัสผ่าน',
    PRIMARY KEY(customer_room_id)
    )";

    if($conn ->query($table ) === TRUE) {
    echo "เสร็จสิ้น";
    }else{
    echo "เกิดข้อผิดพลาด" .$conn ->error;
    };

$conn ->close();//ปิดการเชื่อต่อฐานข้อมูล