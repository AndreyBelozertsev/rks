//import Swiper, { Navigation } from 'swiper';

import Swiper from 'swiper/bundle'
const swiper = new Swiper('.swiper', {
    effect: 'coverflow',
    coverflowEffect: {
      rotate: 30,
      slideShadows: false,
    },
   

    // configure Swiper to use modules
    //modules: [Navigation],

    //loop: true,
  
    // // Navigation arrows
    // navigation: {
    //   nextEl: '.swiper-button-next',
    //   prevEl: '.swiper-button-prev',
    // },
  
    // // And if we need scrollbar
    // scrollbar: {
    //   el: '.swiper-scrollbar',
    // },
   
});