const productHeadings = document.querySelectorAll('.product-page a[data-heading]');
const productContents = document.querySelectorAll('.description');

productHeadings.forEach((link) => {
    link.addEventListener('click', (e) => {
        e.preventDefault();

        productHeadings.forEach((link) => {
            link.classList.remove('active');
        });

        productContents.forEach((content) => {
            if(content.dataset.content === link.dataset.heading) {
                link.classList.add('active'); 
                content.classList.remove('hidden'); 
            } else {               
                content.classList.add('hidden'); 
            }
        });
    })
});