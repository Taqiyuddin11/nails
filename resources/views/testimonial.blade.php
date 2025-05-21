<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Testimonials | Cosmic Nails</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="{{ asset('asset/css/testimonial.css') }}">
</head>
<body>
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

  <main>
    <h1 data-aos="fade-up">Happy Clients</h1>
    <p class="subtitle" data-aos="fade-up" data-aos-delay="100">Stories from those who’ve been pampered by us 💕</p>

    <form action="{{ route('testimonials.store') }}" method="POST" data-aos="fade-up" data-aos-delay="200">
      @csrf
      <input type="text" name="name" placeholder="Nama Anda" required>
      <textarea name="message" rows="4" placeholder="Tulis testimonial Anda..." required>{{ old('message') }}</textarea>
      <button type="submit">Kirim Testimoni</button>
    </form>

    <section class="testimonial-preview-background">
    @foreach ($testimonials as $item)
    <div class="testimonial-bg-item">
      <p>"{{ $item->message }}"</p>
      <span>- {{ $item->name }}</span>
    </div>
  @endforeach
</section>

    <div class="swiper mySwiper1" data-aos="fade-up" data-aos-delay="300">
      <div class="swiper-wrapper">
        @foreach ($testimonials as $testimonial)
        <div class="swiper-slide">
          <p>"{{ $testimonial->message }}"</p>
          <h4>- {{ $testimonial->name }}</h4>
        </div>
        @endforeach
      </div>
    </div>

    <div class="instagram" data-aos="fade-up" data-aos-delay="500">
      <p>Follow us on Instagram 👉 <a href="https://www.instagram.com/bycosmicnails" target="_blank">@bycosmicnails</a></p>
    </div>
  </main>

  <footer>
    <p>&copy; Created with ♡ by Cosmic Nails. All rights reserved.</p>
  </footer>

  @if (session('success'))
  <div class="popup" id="popup">
    <p>{{ session('success') }}</p>
    <button onclick="document.getElementById('popup').style.display='none'">Oke</button>
  </div>
  <script>
    window.onload = function() {
      document.getElementById('popup').style.display = 'block';
    };
  </script>
  @endif

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('asset/js/testimonial.js') }}"></script>
</body>
</html>