<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Services | Polish Me Pretty</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('asset/css/service.css') }}">
</head>

<body>
  <!-- Navbar -->
  <nav>
    <div class="logo">By Cosmic Nails</div>
    <div id="menu-toggle" class="menu-toggle">&#9776;</div>
    <ul id="nav-links" class="nav-links">
        <span id="close-btn" class="close-btn">&times;</span>
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('service') }}">Service</a></li>
      <li><a href="{{ route('gallery') }}">Gallery</a></li>
      <li><a href="{{ route('blog') }}">Blog</a></li>
      <li><a href="{{ route('testimonial') }}">Testimonial</a></li>
      <li><a href="{{ route('aboutus') }}">About Us</a></li>
    
      <li class="mobile-only-btn">
        <a href="https://api.whatsapp.com/send/?phone=6281234067022&text&type=phone_number&app_absent=0" class="btn">Book Now</a>
      </li>  
    </ul>
    <a href="https://api.whatsapp.com/send/?phone=6281234067022&text&type=phone_number&app_absent=0" class="btn desktop-tablet-only-btn">Book Now</a>
     
  </nav>

  <!-- Title -->
  <h1 data-aos="fade-up" data-aos-delay="100">Our Services</h1>
  <p class="subtitle" data-aos="fade-up" data-aos-delay="200">Discover our nail art designs and pampering services</p>

  <!-- Service Table -->
  <table data-aos="fade-up" data-aos-delay="300">
    <thead>
      <tr>
        <th>Service</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr onclick="openModal('basic')" data-aos="fade-up" data-aos-delay="100">
        <td>Basic Color</td>
        <td class="price">IDR 50-60K</td>
      </tr>
      <tr onclick="openModal('glitter')" data-aos="fade-up" data-aos-delay="200">
        <td>Glitter</td>
        <td class="price">IDR 60-80K</td>
      </tr>
      <tr onclick="openModal('french')" data-aos="fade-up" data-aos-delay="300">
        <td>French Art</td>
        <td class="price">IDR 70-80K</td>
      </tr>
      <tr onclick="openModal('ombre')" data-aos="fade-up" data-aos-delay="400">
        <td>Marble, Ombre, Blused, Gradation</td>
        <td class="price">IDR 70-80K</td>
      </tr>
      <tr onclick="openModal('cateye')" data-aos="fade-up" data-aos-delay="500">
        <td>Cat Eye & Glazed</td>
        <td class="price">IDR 70-80K</td>
      </tr>
      <tr onclick="openModal('art')" data-aos="fade-up" data-aos-delay="600">
        <td>Hand-drawn Nail Art</td>
        <td class="price">Start from IDR 60-100K</td>
      </tr>
      <tr onclick="openModal('accessories')" data-aos="fade-up" data-aos-delay="700">
        <td>3D Nail Accessories</td>
        <td class="price">Start from IDR 3-10K/Finger</td>
      </tr>
      <tr onclick="openModal('custom')" data-aos="fade-up" data-aos-delay="800">
        <td>Custom Press On Nails</td>
        <td class="price">Start from IDR 100K</td>
      </tr>
      <tr onclick="openModal('remove')" data-aos="fade-up" data-aos-delay="900">
        <td>Remove</td>
        <td class="price">IDR 2-3K/Finger</td>
      </tr>
    </tbody>
  </table>

  <h6 data-aos="fade-up" data-aos-delay="100">All treatments included express manicure. Available
    for homeservice and coffeeshop service.
  </h6>

  <!-- Modal -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <img id="modalImg" src="" alt="Nail Design">
      <h3 id="modalTitle"></h3>
      <p id="modalDesc"></p>
      <p><strong>Estimated Time:</strong> <span id="modalTime"></span></p>
    </div>
  </div>

  <footer>
    <p>&copy; Created with ♡ by Cosmic Nails. All rights reserved.</p>
  </footer>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="{{ asset('asset/js/service.js') }}"></script>
</body>

</html>