<html>
    <body>
<?php
if(isset($_POST['name'])){
    session_start();
    $id = $_SESSION["room_id"];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobileNumber'];
    $address = $_POST['address'];
    $card = $_POST['cardNumber'];
    $checkin = $_POST['checkin_date'];
    $checkout = $_POST['checkout_date'];

    $date = new DateTime($checkin);
    $newCheckIn = $date->format('Y-m-d');
    $date = new DateTime($checkout);
    $newCheckOut = $date->format('Y-m-d');

    $price = $_SESSION["finalPrice"] * $_POST['count'];


    $adults = $_POST['adults'];
    $children = $_POST['children'];

    $conn = mysqli_connect("localhost", "root", "");
    //echo "connection successfull";
    $dbname = "id7257488_jumeriah";
    mysqli_select_db($conn, $dbname);
    //echo "database selection successfull";
    $query = "insert into customer (name, email, phone, card, address, check_in, check_out, room_type, adults, children, cost)values('$name', '$email', '$mobile', '$card','$address', '$newCheckIn', '$newCheckOut', $id, $adults, $children, $price)";
    if(mysqli_query($conn, $query)){
        echo "<script>alert(\"Room Booked\");</script>";
    }
    echo "Data Inserted";
    mysqli_close($conn);

}
?>
</body>


</html>
