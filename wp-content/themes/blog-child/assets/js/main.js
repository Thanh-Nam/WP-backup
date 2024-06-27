// Open menu mobile

const menuMobile = document.querySelector(".menu-mobile");
const menuOverlay = document.querySelector(".overlay");
const closeMenu = document.querySelector(".close-menu-mobile");

handleOpenMenu = function () {
  menuMobile.classList.add("open-menu");
  menuOverlay.classList.add("open-menu");
};
menuOverlay.onclick = function () {
  menuMobile.classList.remove("open-menu");
  menuOverlay.classList.remove("open-menu");
};
closeMenu.onclick = function () {
  menuMobile.classList.remove("open-menu");
  menuOverlay.classList.remove("open-menu");
};

// Back to top

const BacktioTop = document.querySelector(".back-to-top");
function handleScroll() {
  if (window.scrollY > 300) {
    BacktioTop.classList.add("flex");
    BacktioTop.classList.remove("hidden");
  } else {
    BacktioTop.classList.add("hidden");
    BacktioTop.classList.remove("flex");
  }
}
window.addEventListener("scroll", handleScroll);
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth", // Thêm hiệu ứng cuộn mượt mà
  });
}
BacktioTop.addEventListener("click", scrollToTop);

// Fancybox media
$('[data-fancybox="gallery"]').fancybox({
  buttons: ["slideShow", "thumbs", "zoom", "fullScreen", "share", "close"],
  loop: true,
  protect: true,
  clickOutside: "close",
});
// Slide toggle Tại sao chọn chúng tôi
$(document).ready(function() {
    $('.why-title').on('click', function() {
        var content = $(this).next('.why-content');
        content.slideToggle();
        $(this).find('i').toggleClass('rotate-180');
    });
});

// Tab detail product
$(document).ready(function() {
  $('.tab-button').on('click', function() {
      $('.tab-button').removeClass('active');
      $('.tab-content').removeClass('active').hide();

      $(this).addClass('active');
      $('#' + $(this).data('tab')).addClass('active').show();
  });

  $('.tab-button').first().click();
});