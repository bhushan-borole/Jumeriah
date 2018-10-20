<?php
    $conn = mysqli_connect("localhost", "root", "");
    //echo "connection successfull";
    $dbname = "id7257488_jumeriah";
    mysqli_select_db($conn, $dbname);
    //echo "database selection successfull";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $query = "insert into feedback (name, email, q1, q2, q3, q4) values('$name', '$email', '$q1', '$q2', '$q3', '$q4')";
    mysqli_query($conn, $query);



?>