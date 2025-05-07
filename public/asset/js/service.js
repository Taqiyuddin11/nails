AOS.init({
    duration: 1000,
    once: true
  });
  const modal = document.getElementById("myModal");
  const modalImg = document.getElementById("modalImg");
  const modalTitle = document.getElementById("modalTitle");
  const modalDesc = document.getElementById("modalDesc");
  const modalTime = document.getElementById("modalTime");

  const services = {
    basic: {
      img: "{{ asset('asset/basicmodal.jpg') }}",
      title: "Basic Color",
      desc: "A clean, elegant look with a single color of your choice. Perfect for everyday wear or a touch of subtle beauty.",
      time: "30 mins"
    },
    glitter: {
      img: "{{ asset('asset/glittermodal.jpg') }}",
      title: "Glitter Nails",
      desc: "Add some sparkle to your nails with our glitter polish options—shine bright wherever you go.",
      time: "60 mins"
    },
    french: {
      img: "{{ asset('asset/frenchmodal.jpg') }}",
      title: "French Tips",
      desc: "Classic and timeless. This design features a clean base with white-tipped edges, ideal for a chic and polished appearance.",
      time: "45 mins"
    },
    ombre: {
      img: "{{ asset('asset/ombremodal.jpg') }}",
      title: "Ombre Nails",
      desc: "Elegant effects that blend colors beautifully. Choose from soft transitions like ombre, natural blush tones, or a marble texture for a sophisticated finish.",
      time: "60 mins"
    },
    cateye: {
      img: "{{ asset('asset/cateyemodal.jpg') }}",
      title: "Cat Eye Nails",
      desc: "Trendy and eye-catching designs that reflect light beautifully, creating a cat-eye illusion or a high-shine glazed look.",
      time: "60 mins"
    },
    art: {
      img: "{{ asset('asset/artmodal.jpg') }}",
      title: "Hand-drawn Nail Art",
      desc: "Get a personalized touch with unique, hand-drawn designs. Ideal for showcasing your individual style or special themes.",
      time: "90 mins"
    },
    accessories: {
      img: "{{ asset('asset/3dmodall.jpg') }}",
      title: "3D Nail Accessories",
      desc: "Stand out with three-dimensional elements like gems, charms, and decals to give your nails an extra pop.",
      time: "90 mins"
    },
    custom: {
      img: "{{ asset('asset/pressmodal.jpg') }}",
      title: "Custom Press On Nails",
      desc: "Perfect for convenience without compromising on style. Our custom press-ons are designed to fit you perfectly and can be reused.",
      time: "3-7 Days"
    },
    remove: {
      img: "{{ asset('asset/removemodal.jpg') }}",
      title: "Remove",
      desc: "Safe and gentle nail removal service to ensure your nails stay healthy and damage-free.",
      time: "30 mins"
    }
  };

  function openModal(type) {
    const s = services[type];
    if (!s) return;
    modal.style.display = "block";
    modalImg.src = s.img;
    modalTitle.textContent = s.title;
    modalDesc.textContent = s.desc;
    modalTime.textContent = s.time;
  }

  function closeModal() {
    modal.style.display = "none";
  }

  window.onclick = function (event) {
    if (event.target == modal) {
      closeModal();
    }
  };