import Swiper from 'swiper/bundle'

// import Swiper and modules styles
import 'swiper/css/bundle';

const swiper = new Swiper('.swiper-characters', {
    speed: 1000,
    autoplay: {
        delay: 3000,
    },
    loop: true,
    effect: 'coverflow',
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false
    },
    keyboard: {
        enabled: true,
    },
    grabCursor: true,
    slidesPerView: 3,
    centeredSlides: true,
});
