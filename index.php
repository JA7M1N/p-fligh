<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flight Booking - Home</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- TailwindCSS -->
  <script src="https://unpkg.com/@tailwindcss/browser@latest"></script>
  <!-- AOS Animation CSS -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Inter', sans-serif;
      background: url('https://images.unsplash.com/photo-1529070538774-1843cb3265df') no-repeat center center/cover;
      position: relative;
    }
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background: rgba(0,0,0,0.6);
      z-index: 1;
    }
    .content {
      position: relative;
      z-index: 2;
      color: #fff;
      text-align: center;
      padding-top: 150px;
    }
    .btn-custom {
      background: #4299e1;
      color: white;
      padding: 12px 30px;
      font-weight: 600;
      border-radius: 8px;
      transition: all 0.3s ease;
    }
    .btn-custom:hover {
      background: #3182ce;
      transform: scale(1.1);
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }
    section {
      padding: 80px 20px;
      background: #f7fafc;
    }
    nav {
      position: fixed;
      width: 100%;
      background: rgba(0, 0, 0, 0.7);
      padding: 10px 0;
      z-index: 999;
      text-align: center;
    }
    nav a {
      color: #f7fafc;
      margin: 0 15px;
      text-decoration: none;
      font-weight: 500;
      font-size: 18px;
    }
    nav a:hover {
      color: #90cdf4;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav>
  <a href="index.php">Home</a>
  <a href="mybooking.php">My Booking</a>
  <a href="book.php">Book Flight</a>
  <a href="track.php">Track Flight</a>
  <a href="about.php">About Us</a>
</nav>

<!-- Overlay -->
<div class="overlay"></div>

<!-- Content -->
<div class="content">
  <h1 class="display-4 font-weight-bold" data-aos="fade-down">Welcome to Flight Booking!</h1>
  <p class="lead mt-4" data-aos="fade-up">Book flights easily, quickly, and safely with us.</p>
  <a href="book.php" class="btn btn-custom mt-4" data-aos="zoom-in">Book Now</a>
</div>

<!-- About Section -->
<section data-aos="fade-up">
  <div class="container">
    <h2 class="text-center mb-4 font-weight-bold">About Us</h2>
    <p class="text-center">We are committed to providing the best flight booking experience. Compare prices, book your favorite destinations, and travel with comfort!</p>
  </div>
</section>

<!-- Services Section -->
<section data-aos="fade-up">
  <div class="container">
    <div class="row">
      <div class="col-md-4 text-center" data-aos="zoom-in">
        <img src="https://img.icons8.com/ios-filled/100/000000/airplane-take-off.png" alt="Easy Booking" class="mb-3">
        <h5>Easy Booking</h5>
        <p>Book your flights easily through our platform with minimal steps.</p>
      </div>
      <div class="col-md-4 text-center" data-aos="zoom-in" data-aos-delay="100">
        <img src="https://img.icons8.com/ios-filled/100/000000/discount--v1.png" alt="Best Prices" class="mb-3">
        <h5>Best Prices</h5>
        <p>Find affordable flight tickets without any hidden charges.</p>
      </div>
      <div class="col-md-4 text-center" data-aos="zoom-in" data-aos-delay="200">
        <img src="https://img.icons8.com/ios-filled/100/000000/customer-support.png" alt="Support" class="mb-3">
        <h5>24/7 Support</h5>
        <p>Our support team is available round-the-clock to assist you.</p>
      </div>
    </div>
  </div>
</section>

<!-- JS Scripts -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1200,
  });
</script>

</body>
</html>
