const smoothScroll = () => {
    const scrollLinks = document.querySelectorAll('a[href^="#"]:not(a[href="#"])');
    scrollLinks.forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            e.preventDefault();
            let id = anchor.getAttribute('href');
            id = id.substring(1);
            document.getElementById(id).scrollIntoView({
                behavior: 'smooth'
            });
        })
    });
}
smoothScroll();