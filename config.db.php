<?php

    //เข้ารหัส
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PATCH, PUT, DETECT');
    header('Access-Control-Allow-Headers: token,Content-Type');
    header('Access-Control-Max-Age:1728000');
    header('Content-Length:0');
    header('Content-Type: text/plain');

    //ประกาศตัวแปร ในการเชื่อมฐานข้อมูล
    $hostAPI = "localhost";
    $userAPI = "root";
    $passAPI = "";
    $dbNameAPI = "rrhouse";

    //เชื่อมต่อฐานข้อมูล
    $conn = mysqli_connect($hostAPI, $userAPI, $passAPI, $dbNameAPI) or die ("ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้");

    mysqli_set_charset( $conn,"utf8");

?>