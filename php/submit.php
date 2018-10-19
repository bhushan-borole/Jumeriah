<html>
    <body>
<?php
if(isset($_POST['name'])){
    require("../fpdf/fpdf.php");
    session_start();
    $id = $_SESSION["room_id"];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobileNumber'];
    $address = $_POST['address'];
    $card = $_POST['cardNumber'];
    $checkin = $_POST['checkin_date'];
    $checkout = $_POST['checkout_date'];
    $count = $_POST['count'];

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
    $query = "insert into customer (name, email, phone, card, address, check_in, check_out, room_type, adults, children, cost, countOfRooms)values('$name', '$email', '$mobile', '$card','$address', '$newCheckIn', '$newCheckOut', $id, $adults, $children, $price, $count)";
    if(mysqli_query($conn, $query)){

        $query1 = "update table room_type set number=(select number from room_type where id=.$id.)-1 where id=.$id.";
        if(mysqli_query($conn, $query1)) {

            ob_start();
            $pdf = new FPDF();
            $pdf->AddPage();
            $pdf->SetFont("helvetica", "B", 14);
            $pdf->Cell(10, 15, "Your Booking Receipt", 0, 1);
            $pdf->Cell(10, 15, "Name: {$name}", 0, 1);
            $pdf->Cell(10, 15, "Email: {$email}", 0, 1);
            $pdf->Cell(10, 15, "Mobile: {$mobile}", 0, 1);
            $pdf->Cell(10, 15, "Address: {$address}", 0, 1);
            $pdf->Cell(10, 15, "Adults: {$email} Children: {$children}", 0, 1);
            $pdf->Cell(10, 15, "Total Rooms Booked: {$count}", 0, 1);
            $pdf->Cell(10, 15, "Check-In: {$checkin}", 0, 1);
            $pdf->Cell(10, 15, "Check-Out: {$checkout}", 0, 1);
            $pdf->Cell(10, 15, "Total Cost: {$price}", 0, 1);
            $pdf->output('I', "receipt.pdf");
            ob_end_flush();
        }
    }
    mysqli_close($conn);


}
?>
</body>


</html>
