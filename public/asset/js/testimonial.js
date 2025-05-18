AOS.init({ duration: 1000, once: true });

var swiper1 = new Swiper(".mySwiper1", {
  slidesPerView: 'auto',
  spaceBetween: 20,
  freeMode: true,
  speed: 1200,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
    reverseDirection: true,
  },
  loop: true,
});

var swiper2 = new Swiper(".mySwiper2", {
  slidesPerView: 'auto',
  spaceBetween: 20,
  freeMode: true,
  speed: 1200,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
    reverseDirection: true, 
  },
  loop: true,
});
document.querySelectorAll('.testimonial-bg-item').forEach((item, index) => {
  item.style.setProperty('--i', index);
});