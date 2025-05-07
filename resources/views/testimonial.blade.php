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

  <main>
    <h1 data-aos="fade-up">Happy Clients</h1>
    <p class="subtitle" data-aos="fade-up" data-aos-delay="100">Stories from those who’ve been pampered by us 💕</p>

    <div class="swiper-container-wrapper">
      <div class="swiper mySwiper1" data-aos="fade-up" data-aos-delay="200">
        <div class="swiper-wrapper">
          @foreach (['7427','8047','7397','7221','7917','9320','9546','7652'] as $img)
          <div class="swiper-slide">
            <img src="{{ asset('asset/images/IMG_'.$img.(in_array($img, ['7917','9320','9546','7652']) ? '.jpg' : '.JPG')) }}" alt="Client" />
            <p>
              @switch($img)
                @case('7427') "Nail art-nya cantik banget dan hasilnya awet! Staff-nya juga ramah dan detail." @break
                @case('8047') "Sudah beberapa kali ke sini, hasilnya selalu memuaskan dan awet." @break
                @case('7397') "Tempatnya nyaman, bersih, dan staff-nya profesional semua!" @break
                @case('7221') "Suka banget sama desain kuku di sini, selalu up to date dan elegan." @break
                @case('7917') "Booking-nya gampang, pengerjaan cepat tapi tetap rapi!" @break
                @case('9320') "Kuku jadi kelihatan lebih sehat dan cantik, recommended banget!" @break
                @case('9546') "Pertama kali coba langsung jatuh cinta, pasti balik lagi!" @break
                @case('7652') "Harga sesuai dengan kualitas, worth every rupiah!" @break
              @endswitch
            </p>
            <h4>
              @switch($img)
                @case('7427') - Evanda @break
                @case('8047') - Cindy @break
                @case('7397') - Caca @break
                @case('7221') - Nisa @break
                @case('7917') - Tantri @break
                @case('9320') - Jihan @break
                @case('9546') - Intan @break
                @case('7652') - Pratiwi @break
              @endswitch
            </h4>
          </div>
          @endforeach
        </div>
      </div>

      <div class="swiper mySwiper2" data-aos="fade-up" data-aos-delay="400">
        <div class="swiper-wrapper">
          @foreach (['7427','8047','7397','7221','7917','9320','9546','7652'] as $img)
          <div class="swiper-slide">
            <img src="{{ asset('asset/images/IMG_'.$img.(in_array($img, ['7917','9320','9546','7652']) ? '.jpg' : '.JPG')) }}" alt="Client" />
            <p>
              @switch($img)
                @case('7427') "Nail art-nya cantik banget dan hasilnya awet! Staff-nya juga ramah dan detail." @break
                @case('8047') "Sudah beberapa kali ke sini, hasilnya selalu memuaskan dan awet." @break
                @case('7397') "Tempatnya nyaman, bersih, dan staff-nya profesional semua!" @break
                @case('7221') "Suka banget sama desain kuku di sini, selalu up to date dan elegan." @break
                @case('7917') "Booking-nya gampang, pengerjaan cepat tapi tetap rapi!" @break
                @case('9320') "Kuku jadi kelihatan lebih sehat dan cantik, recommended banget!" @break
                @case('9546') "Pertama kali coba langsung jatuh cinta, pasti balik lagi!" @break
                @case('7652') "Harga sesuai dengan kualitas, worth every rupiah!" @break
              @endswitch
            </p>
            <h4>
              @switch($img)
                @case('7427') - Evanda @break
                @case('8047') - Cindy @break
                @case('7397') - Caca @break
                @case('7221') - Nisa @break
                @case('7917') - Tantri @break
                @case('9320') - Jihan @break
                @case('9546') - Intan @break
                @case('7652') - Pratiwi @break
              @endswitch
            </h4>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <div class="instagram" data-aos="fade-up" data-aos-delay="600">
      <p>Follow us on Instagram 👉 <a href="https://www.instagram.com/bycosmicnails" target="_blank">@bycosmicnails</a></p>
    </div>
  </main>

  <footer>
    <p>&copy; Created with ♡ by Cosmic Nails. All rights reserved.</p>
  </footer>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('asset/js/testimonial.js') }}"></script>
</body>
</html>