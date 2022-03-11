let urlInput = document.querySelector('.urlInput')
urlInput.addEventListener('keydown', function () {
   document.querySelector('.urlSpan').classList.add('formClicked')
})

document.querySelector('.form').addEventListener('click', function () {
   if (urlInput.value == '') {
      document.querySelector('.urlSpan').classList.remove('formClicked')
   } false
})
