import Swiper, { Navigation } from 'swiper';

const swiperStages = new Swiper('.swiper', {
    modules: [Navigation],
    speed: 600,

    loop: true,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    slidesPerView: 1,
    spaceBetween: 30,

    breakpoints: {
        720: {
          slidesPerView: 2,
        },
        960: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
    }
});