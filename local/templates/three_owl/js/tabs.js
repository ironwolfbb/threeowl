//добавление активного класса табам в футере
document.addEventListener('click', function (e) {
  if (e.target.closest('.form-count-row')) {
    let active = document.querySelector('.form-count-row li.active')
    let countValue = document.querySelector('.form-count input')
    active.classList.remove('active')
    countValue.value = e.target.textContent
    e.target.classList.add('active')
  }

  if (e.target.closest('.form-kind')) {
    let active = document.querySelector('.form-kind li.active')
    let kindValue = document.querySelector('.form-kind input')
    active.classList.remove('active')
    kindValue.value = e.target.textContent
    e.target.classList.add('active')
  }
})

