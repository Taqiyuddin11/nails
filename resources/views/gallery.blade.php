<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery | Polish Me Pretty</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('asset/css/gallery.css') }}">
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

    <section>
        <h2 class="gallery-title" data-aos="fade-up">Our Stunning Nail Art Collection</h2>
        <div class="gallery-cards">
            <div class="card" data-aos="fade-up">
                <img src="{{ asset('asset/images/red nails.jpg') }}" alt="Red Nails">
                <div class="overlay">
                    <h3>Red Nails</h3>
                    <p>Basic Red Design</p>
                    <a href="{{ route('service') }}"class="btn">View Details</a>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('asset/images/glitter nails.jpg') }}" alt="Glitter Nails">
                <div class="overlay">
                    <h3>Glitter Nail Art</h3>
                    <p>Shiny & Bold</p>
                    <a href="{{ route('service') }}" class="btn">View Details</a>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('asset/images/french tips.jpg') }}" alt="French Tip Nails">
                <div class="overlay">
                    <h3>French Tip Design</h3>
                    <p>Classic Elegance</p>
                    <a href="{{ route('service') }}" class="btn">View Details</a>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('asset/images/nail art.jpg') }}" alt="Nail Art">
                <div class="overlay">
                    <h3>Intricate Nail Art</h3>
                    <p>Artistic Style</p>
                    <a href="{{ route('service') }}" class="btn">View Details</a>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="400">
                <img src="{{ asset('asset/images/ombre nails.jpg') }}" alt="Ombre Nails">
                <div class="overlay">
                    <h3>Ombre Design</h3>
                    <p>Soft Gradient</p>
                    <a href="{{ route('service') }}" class="btn">View Details</a>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="500">
                <img src="{{ asset('asset/images/cat eye.jpg') }}" alt="Cat Eye Nails">
                <div class="overlay">
                    <h3>Cat Eye Nail Art</h3>
                    <p>Mesmerizing Shine</p>
                    <a href="{{ route('service') }}" class="btn">View Details</a>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="500">
                <img src="{{ asset('asset/images/IMG_7342.JPG') }}" alt="7342">
                <div class="overlay">
                    <h3>Cat Eye Nail Art</h3>
                    <p>Mesmerizing Shine</p>
                    <a href="{{ route('service') }}" class="btn">View Details</a>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="500">
                <img src="{{ asset('asset/images/paint.png') }}" alt="Paint">
                <div class="overlay">
                    <h3>Cat Eye Nail Art</h3>
                    <p>Mesmerizing Shine</p>
                    <a href="{{ route('service') }}" class="btn">View Details</a>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="500">
                <img src="{{ asset('asset/images/IMG_7652.jpg') }}" alt="7652">
                <div class="overlay">
                    <h3>Cat Eye Nail Art</h3>
                    <p>Mesmerizing Shine</p>
                    <a href="{{ route('service') }}" class="btn">View Details</a>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="500">
                <img src="{{ asset('asset/images/beach.jpg') }}" alt="beach">
                <div class="overlay">
                    <h3>Cat Eye Nail Art</h3>
                    <p>Mesmerizing Shine</p>
                    <a href="{{ route('service') }}" class="btn">View Details</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; Created with ♡ by Cosmic Nails. All rights reserved.</p>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('asset/js/script.js') }}"></script>
</body>

</html>