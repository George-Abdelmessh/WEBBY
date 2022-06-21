function changeColour() {
    var Enav = document.getElementById('Enav');
    var scrollValue = window.scrollY;

    if (scrollValue < 200) {
        Enav.classList.remove('navBg');
    }
    else {
        Enav.classList.add('navBg');
    }

}
window.addEventListener('scroll', changeColour);



var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });





  