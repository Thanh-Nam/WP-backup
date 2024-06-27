// Banner
const progressCircle = document.querySelector(".autoplay-progress svg");
const progressContent = document.querySelector(".autoplay-progress span");
var swiper = new Swiper(".slide-banner", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".banner-next",
    prevEl: ".banner-prev",
  },
  loop: true,
  on: {
    autoplayTimeLeft(s, time, progress) {
      progressCircle.style.setProperty("--progress", 1 - progress);
      progressContent.textContent = `${Math.ceil(time / 1000)}s`;
    },
  },
});

// Statis
var swiper = new Swiper(".statis-slide", {
  slidesPerView: 2,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  },
});

// Product
var swiper = new Swiper(".product-slide", {
  slidesPerView: 1.5,
  spaceBetween: 10,
  breakpoints: {
    460: {
      slidesPerView: 2.5,
      spaceBetween: 15,
    },
    768: {
      slidesPerView: 3.5,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 4.5,
      spaceBetween: 20,
    },
  },
});

// Feedback
var swiper = new Swiper(".feedback-slide", {
  slidesPerView: 1,
  spaceBetween: 10,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
  },
});

//Media
var swiper = new Swiper(".media-slide", {
  slidesPerView: 2,
  grid: {
    rows: 2,
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 5,
    },
  },
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
// Detail product
var swiper = new Swiper(".detail-product", {
  loop: true,
  spaceBetween: 6,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".detail-product-2", {
  loop: true,
  spaceBetween: 10,
  thumbs: {
    swiper: swiper,
  },
});
// Relate detail product
var swiper = new Swiper(".relate-slide", {
  slidesPerView: 1.5,
  spaceBetween: 10,
  breakpoints: {
    460: {
      slidesPerView: 2.5,
      spaceBetween: 15,
    },
    768: {
      slidesPerView: 3.5,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 4.5,
      spaceBetween: 20,
    },
  },
});