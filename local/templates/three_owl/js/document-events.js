document.addEventListener('click', function (e) {
    if (e.target.closest('.burger') || e.target.classList.contains('burger')) {
        document.querySelector('.header-mibble-links').classList.toggle('active')
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
        document.querySelector('.search').classList.add('active')
    }
    if (e.target.closest('.close-search')) {
        document.querySelector('.search').classList.remove('active')
    }

    if (e.target.closest('.catalog-item')) {
        e.target.closest('.catalog-item').classList.toggle('active')
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
    }

    if (e.target.closest(".first" )) {
        document.querySelector('.sort').classList.toggle('active')
    }

    if (e.target.closest('.kat-btn')) {
        document.querySelector('.katalog-aside').classList.toggle('active')
    }
})