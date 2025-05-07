<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog | Polish Me Pretty</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('asset/css/blog.css') }}">
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

  <!-- Main Content -->
  <main>
    <h1>Our Blog</h1>
    <p class="subtitle">Latest tips, trends, and nail inspo just for you 💖</p>

    <div class="blog-post">
      <div class="post">
        <div class="post-content">
          <h3>5 Tren Nail Art 2025 yang Wajib Kamu Coba</h3>
          <small>April 15, 2025</small>
          <p>Dari warna pastel ke 3D nail art—intip tren kuku terkini yang lagi hits dan bisa kamu coba hari ini juga!</p>
          <a href="https://www.beautynesia.id/fashion/kreativitas-tanpa-batas-nail-art-yang-diprediksi-akan-populer-di-tahun-2025-wajib-dicoba/b-299553" target="_blank">Read More</a>
        </div>
        <img src="{{ asset('asset/images/blog1.jpg') }}" alt="Blog 1">
      </div>

      <div class="post reverse">
        <div class="post-content">
          <h3>Tips Merawat Kuku Setelah Gel Polish</h3>
          <small>April 7, 2025</small>
          <p>Biar kuku kamu tetap sehat dan cantik meski sering diwarnai, simak rahasia perawatan simple ini!</p>
          <a href="https://wolipop.detik.com/makeup-and-skincare/d-3708987/5-tips-agar-nail-art-lebih-tahan-lama" target="_blank">Read More</a>
        </div>
        <img src="{{ asset('asset/images/blog2.jpg') }}" alt="Blog 2">
      </div>

      <div class="post">
        <div class="post-content">
          <h3>Korean Glass Nails: Gaya Cantik nan Elegan</h3>
          <small>Maret 30, 2025</small>
          <p>Nail style ala Korea yang bening dan glowing? Yuk kenalan sama glass nails yang super aesthetic!</p>
          <a href="https://www.refinery29.com/en-gb/korean-glass-nails-cat-eye-manicure-trend" target="_blank">Read More</a>
        </div>
        <img src="{{ asset('asset/images/blog3.jpg') }}" alt="Blog 3">
      </div>
    </div>
  </main>

  <footer>
    <p>&copy; Created with ♡ by Cosmic Nails. All rights reserved.</p>
  </footer>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="{{ asset('asset/js/script.js') }}"></script>

</body>
</html>