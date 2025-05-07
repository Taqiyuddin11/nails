<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us | By Cosmic Nails</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('asset/css/aboutus.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
</head>

<body>
  <nav>
    <div class="logo">By Cosmic Nails</div>
    <ul>
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('service') }}">Services</a></li>
      <li><a href="{{ route('gallery') }}">Gallery</a></li>
      <li><a href="{{ route('blog') }}">Blog</a></li>
      <li><a href="{{ route('testimonial') }}">Testimonial</a></li>
      <li><a href="{{ route('aboutus') }}">About Us</a></li>
    </ul>
    <a href="https://api.whatsapp.com/send/?phone=6281234067022&text&type=phone_number&app_absent=0" class="btn">Book Now</a>
  </nav>

  <main>
    <header>
      <h1 data-aos="fade-up" data-aos-delay="100">About Us</h1>
    </header>

    <div class="container">
      <section class="about-section" data-aos="fade-up" data-aos-delay="200">
        <img src="{{ asset('asset/images/blog2.jpg') }}" alt="Team working" />
        <div class="about-text">
          <h2>Who are we</h2>
          <p>By Cosmic Nails is a nail art studio that celebrates creativity and self-expression. Our team consists of skilled artists who are passionate about providing stylish and personalized nail designs to all clients.</p>
          <p>We believe that beauty lies in the details. Every appointment is a chance to create a unique, relaxing, and empowering experience.</p>
        </div>
      </section>

      <section class="stats" data-aos="fade-up" data-aos-delay="300">
        <div class="stat-box">
          <h3>2021</h3>
          <p>Founded</p>
        </div>
        <div class="stat-box">
          <h3>800+</h3>
          <p>Designs created</p>
        </div>
        <div class="stat-box">
          <h3>5+</h3>
          <p>Artists</p>
        </div>
        <div class="stat-box">
          <h3>30+</h3>
          <p>Collaborations</p>
        </div>
      </section>

      <section class="goals-section" data-aos="fade-up" data-aos-delay="400">
        <div class="goals-text">
          <h2>Our Goals</h2>
          <ul>
            <li>Deliver the best nail care with style and hygiene.</li>
            <li>Empower clients through unique designs.</li>
            <li>Lead trends in the beauty industry.</li>
            <li>Collaborate with the creative community.</li>
          </ul>
        </div>
        <img src="{{ asset('asset/images/KYND.png') }}" alt="Team brainstorming" />
      </section>
    </div>
  </main>

  <footer>
    <p>&copy; Created with ♡ by Cosmic Nails. All rights reserved.</p>
  </footer>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="{{ asset('asset/js/script.js') }}"></script>
</body>
</html>