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

  <!-- Navigation -->
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
    <a href="https://api.whatsapp.com/send/?phone=6281234067022" class="btn">Book Now</a>
  </nav>

  <!-- Main Content -->
  <main>
    <h1 data-aos="fade-up">Happy Clients</h1>
    <p class="subtitle" data-aos="fade-up" data-aos-delay="100">Stories from those who’ve been pampered by us 💕</p>

    <!-- Form Testimoni -->
    <form action="{{ route('testimonials.store') }}" method="POST" data-aos="fade-up" data-aos-delay="200">
      @csrf
      <input type="text" name="name" placeholder="Nama Anda" required>
      <textarea name="message" rows="4" placeholder="Tulis testimonial Anda..." required>{{ old('message') }}</textarea>
      <button type="submit">Kirim Testimoni</button>
    </form>

    <!-- Testimoni dari Database -->
    <div class="swiper mySwiper1" data-aos="fade-up" data-aos-delay="300">
      <div class="swiper-wrapper">
        @foreach ($testimonials as $testimonial)
        <div class="swiper-slide">
          <img src="{{ asset('asset/images/default-client.jpg') }}" alt="Client">
          <p>"{{ $testimonial->message }}"</p>
          <h4>- {{ $testimonial->name }}</h4>
        </div>
        @endforeach
      </div>
    </div>

    <!-- Instagram -->
    <div class="instagram" data-aos="fade-up" data-aos-delay="500">
      <p>Follow us on Instagram 👉 <a href="https://www.instagram.com/bycosmicnails" target="_blank">@bycosmicnails</a></p>
    </div>
  </main>

  <!-- Footer -->
  <footer>
    <p>&copy; Created with ♡ by Cosmic Nails. All rights reserved.</p>
  </footer>

  <!-- Notifikasi Popup -->
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

  <!-- JS Library -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    AOS.init();
    new Swiper('.mySwiper1', {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      autoplay: { delay: 4000 },
    });
  </script>
</body>
</html>