<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Bookings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="container mt-5">
    <h2>My Bookings</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Flight Number</th>
                <th>Travel Date</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $result = $conn->query("SELECT * FROM bookings ORDER BY id DESC");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['flight_number']}</td>
                    <td>{$row['travel_date']}</td>
                  </tr>";
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>