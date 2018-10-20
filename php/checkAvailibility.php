<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "");
    //echo "connection successfull";
    $dbname = "id7257488_jumeriah";
    mysqli_select_db($conn, $dbname);
    //echo "database selection successfull";
    $query = "select * from room_type;";

    $nameArray = array();
    $count = array();
    $data = mysqli_query($conn, $query);
    while($info = mysqli_fetch_array($data)){
      array_push($nameArray, $info['name']);
      array_push($count, $info['number']);
    }

    $_SESSION['nameArray'] = $nameArray;
    $_SESSION['countArray'] = $count;



?>
