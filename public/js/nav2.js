document.addEventListener('DOMContentLoaded', function() {
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function() {
        if (window.scrollY > nav.offsetHeight) {
            nav.classList.add('fixed-nav');
            document.body.style.paddingTop = nav.offsetHeight + 'px';
        } else {
            nav.classList.remove('fixed-nav');
            document.body.style.paddingTop = 0;
        }
    });
});