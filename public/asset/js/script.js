
AOS.init({
  duration: 1000,
  once: true
});

const menuToggle = document.getElementById('menu-toggle');
const navLinks = document.getElementById('nav-links');
const closeBtn = document.getElementById('close-btn');
const body = document.body;

menuToggle.addEventListener('click', () => {
  navLinks.classList.add('active');
  body.classList.add('shifted');
});

if (closeBtn) {
  closeBtn.addEventListener('click', () => {
    navLinks.classList.remove('active');
    body.classList.remove('shifted');
  });
}

function toggleMenu() {
  navLinks.classList.toggle('active');
  body.classList.toggle('shifted');
}