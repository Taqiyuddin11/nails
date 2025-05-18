<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Polish Me Pretty</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('asset/css/home.css') }}">
</head>

<body>
  <nav>
    <div class="logo">By Cosmic Nails</div>
    <ul>
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('service') }}">Service</a></li>
      <li><a href="{{ route('gallery') }}">Gallery</a></li>
      <li><a href="{{ route('blog') }}">Blog</a></li>
      <li><a href="{{ route('testimonial') }}">Testimonial</a></li>
      <li><a href="{{ route('aboutus') }}">About Us</a></li>
    </ul>
    <a href="https://api.whatsapp.com/send/?phone=6281234067022&text&type=phone_number&app_absent=0" class="btn">Book Now</a>
  </nav>

  <header style="background-image: url('{{ asset('asset/images/header.png') }}') " data-aos="fade-up">
    <h1>POLISH ME PRETTY</h1>
    <p>Nail Fashion</p>
    <p class="description">Step into glam heaven and explore the chicest nail styles around! Get pampered like a queen with the prettiest mani-pedi services in town — because you totally deserve it.</p>
  </header>

  <section>
    <h2 class="section-title" data-aos="fade-up">Creative Nail Art Studio <br> WITH MASTERLY PERFORMANCE! </h2>
    <p style="text-align: center; max-width: 600px; margin: auto;" data-aos="fade-up">With Expert Touch and Stunning Results! Unleash your style with stunning nail designs crafted by skilled artists. From minimalist chic to bold and intricate — we turn your nails into wearable art.</p>
    <div class="studio-stats" data-aos="fade-up"> 
      <div data-aos="fade-up">
        <h3>5K +</h3>
        <p>HAPPY CLIENTS</p>
      </div>
      <div>
        <h3>4+</h3>
        <p>YEAR EXPERIENCE</p>
      </div>
    </div>
  </section>

  <section>
    <h2 class="section-title" data-aos="fade-up">Extraordinary Nail Art Designs</h2>
    <div class="service-cards">
      <div class="card" data-aos="fade-up" data-aos-delay="100">
        <img src="{{ asset('asset/images/red nails.jpg') }}" alt="">
        <div class="card-content">
          <p>Basic Color<br>Start from IDR 50K</p>
          <a href="{{ route('service') }}" class="btn">See Details</a>
        </div>
      </div>
      <div class="card" data-aos="fade-up" data-aos-delay="200">
        <img src="{{ asset('asset/images/glitter nails.jpg') }}" alt="">
        <div class="card-content">
          <p>Glitter Nails<br>Start from IDR 60K</p>
          <a href="{{ route('service') }}" class="btn">See Details</a>
        </div>
      </div>
      <div class="card" data-aos="fade-up" data-aos-delay="300">
        <img src="{{ asset('asset/images/french tips.jpg') }}" alt="">
        <div class="card-content">
          <p>French Tip<br>Start from IDR 70K</p>
          <a href="{{ route('service') }}" class="btn">See Details</a>
        </div>
      </div>
    </div>
  </section>

  <section>
    <h2 class="section-title" data-aos="fade-up">Fancy Nail Arts</h2>
    <div class="art-cards">
      <div class="card" data-aos="fade-up" data-aos-delay="100">
        <img src="{{ asset('asset/images/nail art.jpg') }}" alt="">
        <div class="card-content">
          <p>Nail Art<br>Start from IDR 60K</p>
          <a href="{{ route('service') }}" class="btn">See Details</a>
        </div>
      </div>
      <div class="card" data-aos="fade-up" data-aos-delay="200">
        <img src="{{ asset('asset/images/ombre nails.jpg') }}" alt="">
        <div class="card-content">
          <p>Ombre Nails<br>Start from IDR 70K</p>
          <a href="{{ route('service') }}" class="btn">See Details</a>
        </div>
      </div>
      <div class="card" data-aos="fade-up" data-aos-delay="300">
        <img src="{{ asset('asset/images/cat eye.jpg') }}" alt="">
        <div class="card-content">
          <p>Cat Eye Nails<br>Start from IDR 70K</p>
          <a href="{{ route('service') }}" class="btn">See Details</a>
        </div>
      </div>
    </div>
  </section>

  <section class="branch-locations">
    <h2 class="section-title" data-aos="fade-up">Coffeeshop Service.</h2>

    <div class="location-row">
      <div class="location-card" style="background-image: url('{{ asset('asset/images/Morningmate.png') }}');" data-aos="fade-up" data-aos-delay="100">
        <div class="overlay">
          <h2>Morningmate Coffee</h2>
          <p>Jl. Candi Trowulan 59, Malang</p>
          <a href="https://maps.app.goo.gl/MvZaPiTfrnWqrc1h9" class="btn-location">Location</a>
        </div>
      </div>

      <div class="location-card" style="background-image: url('{{ asset('asset/images/KYND.png') }}');" data-aos="fade-up" data-aos-delay="200">
        <div class="overlay">
          <h2>KYND.ID</h2>
          <p>Jl. Sri Rahayu no.8 Kalpataru, Malang</p>
          <a href="https://maps.app.goo.gl/M2wDfZRQvBWfmPTJ6" class="btn-location">Location</a>
        </div>
      </div>

      <div class="location-card" style="background-image: url('{{ asset('asset/images/Meer.png') }}');" data-aos="fade-up" data-aos-delay="300">
        <div class="overlay">
          <h2>Meer Coffee & Eatery</h2>
          <p>Jl. Danau Kerinci Raya C1, Sawojajar, Malang.</p>
          <a href="https://maps.app.goo.gl/TNkYaUuE85scsxfZ6" class="btn-location">Location</a>
        </div>
      </div>
    </div>
  </section>

  <section>
    <h2 class="section-title" data-aos="fade-up">Because Your Nails Deserve the Best.</h2>
    <p style="text-align: center; max-width: 600px; margin: auto;" data-aos="fade-up">We believe beauty should be as clean as it is captivating. Our nail art is crafted using only natural, high-quality products — safe, luxurious, and absolutely stunning</p>
    <div style="text-align: center; margin-top: 20px;">
      <a href="https://api.whatsapp.com/send/?phone=6281234067022&text&type=phone_number&app_absent=0" class="btn" data-aos="fade-up">Book Now</a>
    </div>
  </section>

  <footer>
    <p>&copy; Created with ♡ by Cosmic Nails. All rights reserved.</p>
  </footer>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="{{ asset('asset/js/script.js') }}"></script>
</body>

</html>