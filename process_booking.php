<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $flight_number = $_POST['flight_number'];
    $travel_date = $_POST['travel_date'];

    $sql = "INSERT INTO bookings (name, email, flight_number, travel_date)
            VALUES ('$name', '$email', '$flight_number', '$travel_date')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Booking Successful!'); window.location='mybooking.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>