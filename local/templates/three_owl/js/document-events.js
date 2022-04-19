let cont = document.querySelector('.header-middle .container');
document.addEventListener('click', function (e) {
    if (e.target.closest('.burger') || e.target.classList.contains('burger')) {
        document.querySelector('.header-mibble-links').classList.toggle('active')
        document.querySelector('.body').classList.toggle('noScroll')
        document.querySelector('.search').classList.remove('active')
        document.querySelector('.header-bottom-links').classList.remove('active')
        document.querySelector('.burger').classList.toggle('active')

    }

    if (e.target.closest('.js-detail-photo-slider .swiper-slide')) {
        document.querySelector('.popup-detail-slider-block').classList.toggle('active')
        document.querySelector('.body').classList.toggle('noScroll')
    }
    if (e.target.closest('.popup-slider-close-btn')) {
        document.querySelector('.popup-detail-slider-block').classList.toggle('active')
        document.querySelector('.body').classList.toggle('noScroll')
    }
    if (e.target.closest('.katalog-btn') || e.target.classList.contains('katalog-btn')) {
        document.querySelector('.header-bottom-links').classList.toggle('active')
    }
    if (e.target.closest('.catalog-close-btn') || e.target.classList.contains('catalog-close-btn')) {
        document.querySelector('.header-bottom-links').classList.toggle('active')
    }
    if (e.target.closest('.close-banner')) {
        document.querySelector('.header-top').style.display = 'none'
    }
    if (e.target.closest('.search-input') || e.target.classList.contains('search-img')) {
        if (window.screen.width > 575) {
            document.querySelector('.search').classList.add('active')
            document.querySelector('.body').classList.toggle('noScroll')
            document.querySelector('.header-mibble-links').classList.remove('active')
            document.querySelector('.burger').classList.remove('active')
            document.querySelector('.header-bottom-links').classList.remove('active')
        }
        else {
            document.querySelector('.search').classList.add('active')
            document.querySelector('.body').classList.toggle('noScroll')
            cont.classList.toggle('container')
            document.querySelector('.header-mibble-links').classList.remove('active')
            document.querySelector('.burger').classList.remove('active')
            document.querySelector('.header-bottom-links').classList.remove('active')
            return
        }
    }
    if (e.target.closest('.close-search')) {
        if (window.screen.width > 575) {
            document.querySelector('.search').classList.remove('active')
            document.querySelector('.body').classList.remove('noScroll')
            document.querySelector('.burger').classList.remove('active')
        }
        else {
            document.querySelector('.search').classList.remove('active')
            document.querySelector('.body').classList.remove('noScroll')
            document.querySelector('.burger').classList.remove('active')
            cont.classList.toggle('container')
            return
        }
    }

    if (e.target.closest('.catalog-item')) {
        e.target.closest('.catalog-item').classList.toggle('active')
    }
    if (e.target.closest('.big-feedback-el')) {
        e.target.closest('.big-feedback-el').classList.toggle('open')
        document.querySelector('.big-feedback').classList.toggle('full')
    }

    if (e.target.closest('.filter-checbox')) {
        e.target.closest('.filter-checbox').classList.toggle('active')

    }

    if (e.target.closest('.send-feedback-btn')) {
        document.querySelector('.feedback-section').classList.toggle('active')
    }

    if (e.target.closest('.filter-btn')) {
        document.querySelector('.filter ul').classList.toggle('active')
        document.querySelector('.filter button').classList.toggle('active')
        e.target.closest('.filter').classList.toggle('active')
    }

    if (e.target.closest(".first")) {
        document.querySelector('.sort').classList.toggle('active')
    }

    if (e.target.closest(".bottom-aside")) {
        document.querySelector('.bottom-aside').classList.toggle('active')
    }
    if (e.target.closest(".rubrik")) {
        document.querySelector('.rubrik').classList.toggle('active')
    }

    if (e.target.closest('.kat-btn')) {
        document.querySelector('.katalog-aside').classList.toggle('active')
    }
    if (e.target.closest('.agreement')) {
        document.querySelector('.agreement').classList.toggle('clicked')
    }
    if (e.target.closest('.btn-art')) {
        document.querySelector('.order-popup').classList.toggle('active')
        document.querySelector('.body').classList.toggle('noScroll')
    }
    if (e.target.closest('.order-close-popup-btn')) {
        document.querySelector('.order-popup').classList.toggle('active')
        document.querySelector('.body').classList.toggle('noScroll')
    }
    if (e.target.closest('.close-modal')) {
        document.querySelector('.popup-detail-modal').classList.toggle('active')
        document.querySelector('.body').classList.toggle('noScroll')
    }
    if (e.target.closest('.exposition')) {
        document.querySelector('.popup-detail-modal').classList.toggle('active')
        document.querySelector('.body').classList.toggle('noScroll')
    }
    if (e.target.closest('.openList')) {
        document.querySelector('.listUL').classList.toggle('active')
    }

})