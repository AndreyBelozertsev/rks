import Swiper, { Navigation, Pagination } from 'swiper';

const swiperDefault = new Swiper('.swiper-default', {
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

const swiperPhotography = new Swiper('.swiper-photography', {
  modules: [Navigation, Pagination],
  speed: 600,
  loop: true,

  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  slidesPerView: 1,
  spaceBetween: 30,

  breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 35,
      },
      960: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
  }
});
