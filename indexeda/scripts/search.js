const searchBtn = document.querySelector('.search-mobile');
const searchInput = document.querySelector('.search');
 searchBtn.addEventListener('click', () => {       
    searchBtn.classList.toggle('search-close');
    if(searchBtn.classList.contains('search-close')) {
        searchInput.style.display = 'block';
    } else {
        searchInput.style.display = 'none';
    }
}); 