const headings = document.querySelectorAll('.categories a[data-heading]');
const foodExamples = document.querySelectorAll('.food-examples');
const moreBtn = document.querySelector('.moreFood'); 
const lessBtn = document.createElement('button'); 
lessBtn.type='button'; 
lessBtn.classList.add('moreFood'); 
lessBtn.style.display='block'; 
lessBtn.innerHTML='Меньше блюд'; 

// отображаем кнопку Больше блюд при загрузке страницы, если на актив. вкладке больше 4 карточек
headings.forEach((link) => {
    if(link.classList.contains('active')) {
        foodExamples.forEach((foodExample) => {
            if(link.dataset.heading == foodExample.dataset.content) {
                const foodItems = foodExample.querySelectorAll('.food-item');
                if(foodItems.length > 4) {
                    moreBtn.style.display='block';                    
                }                
                moreBtn.addEventListener('click', () => {
                    foodItems.forEach((item) => {
                        item.classList.remove('hidden');                                             
                    })
                    moreBtn.after(lessBtn);                        
                    moreBtn.remove();
                });                            
            }
        });
        //сворачивание карточек по кн. Меньше блюд
        lessBtn.addEventListener('click', () => {            
            foodExamples.forEach((foodExample) => {
                if(link.dataset.heading == foodExample.dataset.content) {
                    const foodItems = foodExample.querySelectorAll('.food-item');
                    for(let i=4; i<foodItems.length; i++) {
                        foodItems[i].classList.add('hidden');
                    }
                    lessBtn.after(moreBtn);                        
                    lessBtn.remove();
                }
            });           
        })
    }
});

headings.forEach((link) => {
    link.addEventListener('click', (e) => {
        // снимаем цвет с активной ссылки
        headings.forEach((x) => {
            x.classList.remove('active'); 
        })

        e.preventDefault();        
        //сворачиваем карточки, если они были развернуты на предыд. вкладке
        foodExamples.forEach((foodExample) => {
            const foodItems = foodExample.querySelectorAll('.food-item');
            for(let i=4; i<foodItems.length; i++) {
                foodItems[i].classList.add('hidden');
            }
            lessBtn.after(moreBtn);                        
            lessBtn.remove();            
        });

        //отображаем содержимое вкладки        
        foodExamples.forEach((foodExample) => {
            if(link.dataset.heading === foodExample.dataset.content) {  
                link.classList.add('active');             
                foodExample.classList.remove('hidden');
                const foodItems = foodExample.querySelectorAll('.food-item');
                if(foodItems.length > 4) {  
                    moreBtn.style.display='block';  
                    // показать Больше блюд
                    moreBtn.addEventListener('click', () => {    
                        foodItems.forEach((item) => {
                            item.classList.remove('hidden');                                             
                        })
                        moreBtn.after(lessBtn);                        
                        moreBtn.remove();
                    });     
                } else {       
                    moreBtn.style.display='none';                                    
                }

                //сворачивание карточек по кн. Меньше блюд
                lessBtn.addEventListener('click', () => {            
                    foodExamples.forEach((foodExample) => {
                        if(link.dataset.heading == foodExample.dataset.content) {
                            const foodItems = foodExample.querySelectorAll('.food-item');
                            for(let i=4; i<foodItems.length; i++) {
                                foodItems[i].classList.add('hidden');
                            }
                            lessBtn.after(moreBtn);                        
                            lessBtn.remove();
                        }
                    });           
                })

            } else {
                foodExample.classList.add('hidden');
            }
        }); 
        
    });    
});