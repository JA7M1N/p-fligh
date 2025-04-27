<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book a Flight</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- TailwindCSS -->
  <script src="https://unpkg.com/@tailwindcss/browser@latest"></script>
  <!-- AOS Animation CSS -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1549921296-3a73c58e82c3') no-repeat center center/cover;
      min-height: 100vh;
      color: white;
      padding-top: 100px;
    }
    .container {
      background: rgba(255, 255, 255, 0.1);
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.5);
      backdrop-filter: blur(10px);
    }
    .btn-custom {
      background: #4299e1;
      color: white;
      font-weight: 600;
      border-radius: 8px;
      transition: all 0.3s ease;
    }
    .btn-custom:hover {
      background: #3182ce;
      transform: scale(1.05);
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }
  </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container mt-5" data-aos="fade-up">
  <h2 class="text-center mb-4" data-aos="fade-down">Book a Flight</h2>

  <form action="process_booking.php" method="POST">
    <div class="form-group" data-aos="fade-up">
      <label>Name</label>
      <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group" data-aos="fade-up" data-aos-delay="100">
      <label>Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>
    <div class="form-group" data-aos="fade-up" data-aos-delay="200">
      <label>Flight Number</label>
      <input type="text" name="flight_number" class="form-control" required>
    </div>
    <div class="form-group" data-aos="fade-up" data-aos-delay="300">
      <label>Travel Date</label>
      <input type="date" name="travel_date" class="form-control" required>
    </div>
    <div class="form-group" data-aos="fade-up" data-aos-delay="400">
      <label>Departure City</label>
      <select name="destination_city" id="departure_city" class="form-control" required>
        <option value="">Select Departure</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Delhi">Delhi</option>
        <option value="Paris">Paris</option>
        <option value="New York">New York</option>
        <option value="Los Angeles">Los Angeles</option>
        <option value="Chicago">Chicago</option>
      </select>
    </div>
    <div class="form-group" data-aos="fade-up" data-aos-delay="500">
      <label>Arrival City</label>
      <select name="arrival_city" id="arrival_city" class="form-control" required>
        <option value="">Select Arrival</option>
        <option value="New York">New York</option>
        <option value="London">London</option>
        <option value="Dubai">Dubai</option>
        <option value="Toronto">Toronto</option>
        <option value="Tokyo">Tokyo</option>
        <option value="Berlin">Berlin</option>
      </select>
    </div>
    <div class="form-group" data-aos="fade-up" data-aos-delay="600">
      <label>Flight Price</label>
      <input type="text" id="flightPrice" name="flight_price" class="form-control" readonly>
    </div>
    <div class="text-center" data-aos="zoom-in" data-aos-delay="700">
      <button type="submit" class="btn btn-custom">Book Flight</button>
    </div>
  </form>
</div>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1200,
  });

  $(document).ready(function() {
    $("#departure_city, #arrival_city").change(function() {
      var departure = $("#departure_city").val();
      var arrival = $("#arrival_city").val();

      if (departure && arrival) {
        $.ajax({
          url: "get_price.php",
          type: "POST",
          data: {departure: departure, arrival: arrival},
          success: function(data) {
            $("#flightPrice").val(data);
          }
        });
      }
    });
  });
</script>

</body>
</html>
