import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js'

new Swiper(".mySwiper", {
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints:{
        300:{
          
            slidesPerView: 2,
        },
        640:{
            
            slidesPerView: 3,
        },
        768:{
           
            slidesPerView: 4,
        },
        1024:{
           
            slidesPerView: 5,
        },
        1280:{
           
            slidesPerView: 6,
        }
    },
    grabCursor: true,
  });

new Swiper(".mySwiperr", {
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints:{
        400:{
           
            slidesPerView: 2,
        },
        640:{
           
            slidesPerView: 2,
        },
        768:{
           
            slidesPerView: 3,
        },
        1024:{
           
            slidesPerView: 4,
        },
        1280:{
           
            slidesPerView: 4,
        }
    },
    grabCursor: true,
  });

var mySwiper = new Swiper(".mySwiperdeal", {
    breakpoints:{
        350:{
            slidesPerView: 2,
        },
        640:{
            slidesPerView: 3,
        },
        768:{
            slidesPerView: 3,
        },
        1024:{
            
            slidesPerView: 4,
        }
        
    },
    grid:{
        rows:2
    },
    spaceBetween: 30,
    grabCursor: true,
    navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
    },
    
    
    })

new Swiper(".mySwiperrelate", {
    
    breakpoints:{
        400:{
            
            slidesPerView: 2,
        },
        640:{
            
            slidesPerView: 2,
        },
        768:{
            
            slidesPerView: 3,
        },
        1024:{
            
            slidesPerView: 4,
        },
        1280:{
            
            slidesPerView: 5,
        }
    },
    grabCursor: true,
    spaceBetween: 30,
    navigation: {
        nextEl: ".button-nextt",
        prevEl: ".button-prevv",
    },

});

// -------------------------------------------

