const jsmainSlider = new Swiper('.js-mainSlider', {
   slidesToScroll: 1,
   slidesPerView: 1,
   navigation: {
      prevEl: '.prev-main-slide',
      nextEl: '.next-main-slide'
   },
   pagination:{
      el: '.main-pagination',
      type: 'bullets'
   },
   spaceBetween: 19,
   /*    pagination: {
         el: '.swiper-pagination',
         type: '',
      }, */
   breakpoints: {
      320: {
         spaceBetween: 0,
      },
      768: {
         spaceBetween: 19
      }
   }
})

const jsFirstMiniSlider = new Swiper('.js-first-mini-slider', {
   slidesToScroll: 1,
   slidesPerView: 4,
   navigation: {
      prevEl: '.js-first-mini-slider .prev-mini-slide',
      nextEl: '.js-first-mini-slider .next-mini-slide'
   },
   spaceBetween: 30,
   pagination: {
      el: '.first-slider-pagination',
      type: 'bullets'
   },
   breakpoints: {
      320: {
         slidesPerView: 1,
      },
      426: {
         slidesPerView: 2,
         spaceBetween: 60,
      },
      998: {
         slidesPerView: 4,
         spaceBetween: 30,
      }
   }
})
const jsSecondMiniSlider = new Swiper('.js-second-mini-slider', {
   slidesToScroll: 1,
   slidesPerView: 4,
   navigation: {
      prevEl: '.js-second-mini-slider .prev-mini-slide',
      nextEl: '.js-second-mini-slider .next-mini-slide'
   },
   pagination: {
      el: '.second-slider-pagination',
      type: 'bullets'
   },
   spaceBetween: 30,
   breakpoints: {
      320: {
         slidesPerView: 1,
      },
      426: {
         slidesPerView: 2,
         spaceBetween: 60,
      },
      998: {
         slidesPerView: 4,
         spaceBetween: 30,
      }
   }
})
const jsRequestsSlider2 = new Swiper('.js-bigest-detail-slider', {
   slidesToScroll: 1,
   slidesPerView: 1,
   navigation: {
      prevEl: ".small-prev",
      nextEl: ".small-next",
   },
})
const jsRequestsSlider3 = new Swiper('.js-detail-photo-slider', {
   slidesToScroll: 1,
   slidesPerView: 5,
   spaceBetween: 30,
   breakpoints:{
      320: {
         spaceBetween:5,
         slidesPerView: 4,
      },
      768: {
         spaceBetween: 30,
      },
   },
})
/* const jsAllKases = new Swiper('.js-all-kases', {
   slidesToScroll: 1,
   slidesPerView: 1,
   navigation: {
      prevEl: '.prev-swiper-slide',
      nextEl: '.next-swiper-slide'
   },
}) */
let jsNumberSlider = new Swiper('.js-number-slider', {
   slidesPerView: 'auto',
   slidesToScroll: 'auto',
   spaceBetween: 36,
})
let jsAllKasesLength = document.querySelector('.all-numbers-slides')
if (jsNumberSlider && jsAllKasesLength) {
   /* jsAllKasesLength.innerHTML = jsNumberSlider.slides.length; */
   document.querySelector('.current-slide').innerHTML = jsNumberSlider.realIndex + 1 + ' ' + '/'
}
jsNumberSlider.on('transitionStart', function () {
   document.querySelector('.current-slide').innerHTML = jsNumberSlider.realIndex + 1 + ' ' + '/'
})

let sliderBlock = document.querySelector('.js-we-help-slider')
if (sliderBlock) {
   let jsWeHelpSlider = new Swiper('.js-we-help-slider', {
      slidesPerView: 3,
      slidesToScroll: 1,
      spaceBetween: 36,
      navigation: {
         prevEl: ".help-prev",
         nextEl: ".help-next",
      },
      breakpoints: {
         320: {
            slidesPerView: 1,
         },
         768: {
            slidesPerView: 2,
         },
         1024: {
            slidesPerView: 3,
         },
      }
   })
}


let sliderBlock2 = document.querySelector('.js-smallest-detail-slider')
if (sliderBlock2) {
   let jsWeHelpSlider = new Swiper('.js-smallest-detail-slider', {
      slidesPerView: 4,
      slidesToScroll: 1,
      spaceBetween: 25,
      direction: 'vertical',
      mousewheel: true,
      loop: true,
      navigation: {
         prevEl: ".small-prev",
         nextEl: ".small-next",
      },
      breakpoints: {
         320: {
            slidesPerView: 3,
            direction: 'horizontal',
         },
         575: {
            slidesPerView: 3,
            direction: 'horizontal',
         },
         998: {
            slidesPerView: 3,
            direction: 'horizontal',
         },
         1141: {
            slidesPerView: 4,
            direction: 'vertical',
         },
      }
   })
}



