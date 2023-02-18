// class on scroll
function scrollHandler () {
    if (window.scrollY > 0) {
        document.body.classList.add('scrolled');
    } else {
        document.body.classList.remove('scrolled');
    }
}

window.addEventListener('scroll', scrollHandler);
