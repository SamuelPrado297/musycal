window.addEventListener('scroll', function() {
    let header = document.querySelector('#nav')
    header.classList.toggle('rolagem', window.scrollY > 200)
})