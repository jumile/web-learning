<?php require_once 'form.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-learning - Обучение веб-разработке</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;560&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="scripts/html5shiv.js"></script>
    <script src="scripts/smoothScroll.js" defer></script>
    <script src="scripts/moreExamples.js" defer></script>
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="logo">
                <div class="logoText">W</div>
                <div class="innerLogo"></div>
            </div>
            <nav>
                <ul>
                    <li><a href="#langs">Технологии</a></li>
                    <li><a href="#examples">Примеры работ</a></li>
                    <li><a href="#lessons">Как проходят занятия</a></li>
                </ul>
            </nav>
        </header>
        <div class="box">
            <div class="box-text">
                <h1>Обучение веб-разработке</h1>
                <p>Меня зовут Ирина, я преподаю на компьютерных курсах. У меня учатся люди, желающие найти работу в&nbsp;сфере создания сайтов. Они осваивают верстку сайтов "с&nbsp;нуля", учатся применять CSS и&nbsp;JavaScript. Если хотите попробовать себя в&nbsp;этой
                    области&nbsp;— обращайтесь.</p>
                <p>Я работаю и со взрослыми, и с детьми (от 13 лет).</p>
                <div class="logo">
                    <div class="innerLogo"></div>
                    <a href="#contacts">Пишите</a>
                </div>
            </div>
            <div class="box-image">
                <img src="images/me2.png" alt="Фото автора">
            </div>
        </div> 
        <main id="langs">
            <h2>Технологии</h2>
            <h3>Чему я могу вас научить</h3>
            <div class="learn">
                <section>
                    <h4 class="html">HTML5</h4>
                    <p>Язык разметки гипертекста HTML&nbsp;— это основа любого сайта в&nbsp;Интернете. Именно
                        при&nbsp;помощи этого языка на&nbsp;веб-страницы добавляют самое разное содержимое&nbsp;—
                        заголовки, абзацы, списки, таблицы, формы обратной связи с&nbsp;посетителями, изображения, звук,
                        видео и,&nbsp;конечно&nbsp;же, гиперссылки, которые делают сайт частью Всемирной паутины.
                        Современная версия&nbsp;— HTML5.</p>
                </section>
                <section>
                    <h4 class="css">CSS3</h4>
                    <p>CSS&nbsp;— ещё один язык, который используется при&nbsp;создании сайтов. С&nbsp;помощью CSS
                        на&nbsp;веб-страницы добавляют оформление, превращают обычную разметку HTML в&nbsp;яркие
                        современные сайты. На&nbsp;CSS можно изменять шрифт, размер и&nbsp;цвет текста, добавлять
                        элементам страницы поля, границы, тени, применять фон и&nbsp;фоновые изображения, создавать
                        фотогалереи, выполнять стилизацию гиперссылок и&nbsp;создавать меню, делать интерактивные
                        элементы&nbsp;— ролловеры и&nbsp;анимацию, управлять положением элементов на&nbsp;странице,
                        создавать колонки и&nbsp;многое-многое другое. Всё, что мы сегодня видим на&nbsp;сайтах,
                        выполнено с&nbsp;использованием языка CSS.</p>
                </section>
                <section>
                    <h4 class="js">JavaScript</h4>
                    <p>Выпадающие меню, интерактивные галереи, слайдеры, вкладки («табы»), сворачивающиеся панели,
                        проверка веб-форм, анимация&nbsp;— все эти привычные на&nbsp;современных сайтах элементы
                        позволяет создавать язык программирования JavaScript. Освоив его, вы станете веб-разработчиком,
                        а&nbsp;не&nbsp;просто верстальщиком.</p>
                </section>
            </div>
        </main>
        <div class="examples" id="examples">
            <h2>Примеры вёрстки</h2>
            <h3>Вы тоже так сможете</h3>
            <div class="gallery">
                <section class="example yellow">
                    <h4>Лендинг для книги</h4>
                    <div class="text">
                        <ul>
                            <li>HTML5 + CSS3 + PHP</li>
                            <li>Многоколоночная вёрстка</li>
                            <li>Гибкие сетки (grids)</li>
                            <li>Адаптивность: версии для ПК, планшетов и мобильных</li>
                        </ul>
                        <a href="https://owls.gladiols.ru" target="blank" rel="noopener noreferrer">Посмотреть</a>
                    </div>
                    <img src="images/screenshots/owls.png" alt="Лендинг для книги">
                </section>
                <section class="example blue2">
                    <h4>Сайт о гладиолусах</h4>
                    <div class="text">
                        <ul>
                            <li>HTML5 + CSS3 + jQuery + PHP</li>
                            <li>Семантическая разметка</li>
                            <li>&quot;Плавающие&quot; элементы</li>
                            <li>Адаптивность главной страницы: версии для ПК и мобильных</li>
                        </ul>
                        <a href="https://www.gladiols.ru" target="blank" rel="noopener noreferrer">Посмотреть</a>
                    </div>
                    <img src="images/screenshots/glads.png" alt="Сайт о гладиолусах">
                </section>
                <section class="example cerin hidden">
                    <h4>Демо-макет: Wyfly</h4>
                    <div class="text">
                        <ul>
                            <li>HTML5 + CSS3 + JavaScript</li>
                            <li>Семантическая разметка</li>
                            <li>Адаптивность: версии для ПК, планшетов и мобильных</li>
                            <li>Интерактивные элементы формы</li>
                        </ul>
                        <a href="wyfly/index.html" target="blank" rel="noopener noreferrer">Посмотреть</a>
                    </div>
                    <img src="images/screenshots/wyfly.png" alt="Сайт питомника собак">
                </section>                
                <section class="example pink hidden">
                    <h4>Демо-макет: Гостиница для кошек</h4>
                    <div class="text">
                        <ul>
                            <li>HTML5 + CSS3 + JavaScript + jQuery</li>
                            <li>&quot;Гибкие&quot; контейнеры</li>
                            <li>Адаптивность: версии для ПК, планшетов и мобильных</li>
                            <li>Интерактивность: фильтры, карты</li>
                        </ul>
                        <a href="cats/index.html" target="blank" rel="noopener noreferrer">Посмотреть</a>
                    </div>
                    <img src="images/screenshots/cats.png" alt="Демо-макет: Гостиница для кошек">
                </section>
                <section class="example blue hidden">
                    <h4>Демо-макет: Garden City Center</h4>
                    <div class="text">
                        <ul>
                            <li>HTML5 + CSS3 + jQuery</li>
                            <li>&quot;Гибкие&quot; контейнеры</li>
                            <li>Адаптивность: версии для ПК, планшетов и мобильных</li>
                            <li>Фотогалереи с прокруткой</li>
                        </ul>
                        <a href="garden_city/index.html" target="blank" rel="noopener noreferrer">Посмотреть</a>
                    </div>
                    <img src="images/screenshots/garden.png" alt="Демо-макет: Garden City Center">
                </section>
                <section class="example yellow hidden">
                    <h4>Сайт питомника собак</h4>
                    <div class="text">
                        <ul>
                            <li>HTML5 + CSS3 + JavaScript + jQuery</li>
                            <li>Бестабличная вёрстка</li>
                            <li>Адаптивность: версии для ПК, планшетов и мобильных</li>
                            <li>Интерактивность: &quot;табы&quot;, меню</li>
                        </ul>
                        <a href="https://www.yorki-westi.ru" target="blank" rel="noopener noreferrer">Посмотреть</a>
                    </div>
                    <img src="images/screenshots/yorki.png" alt="Сайт питомника собак">
                </section>                
                <button type="button" class="moreButton">
                    <span>Показать ещё</span>
                    <span class="hidden">Скрыть</span>
                </button>
            </div> 
        </div> 
        <div class="lessons" id="lessons">
            <div class="lessons-image">
                <img src="images/lessons.png" alt="Обучение веб-разработке">
            </div>
            <div class="schema">
                <h3>Как проходят занятия</h3>               
                <ul class="mes">
                    <li class="es">Я</li>
                    <li class="jus">Вы</li>
                </ul>
                <ul>
                    <li class="left">Объясняю новый материал</li>
                    <li class="left">Показываю использование новых элементов на практике</li>
                    <li class="right">Вместе со мной пробуете применять новые знания</li>
                    <li class="left">Даю задания для самостоятельной работы</li>
                    <li class="right">Отрабатываете новый материал</li>
                    <li class="right m20">Задаете вопросы</li>
                    <li class="left">Объясняю сложные и непонятные моменты</li>
                    <li class="right">С середины курса работаете над самостоятельным проектом</li>
                    <li class="left m10">По мере необходимости даю Вам консультации</li>
                </ul>                
            </div>                
        </div> 
        <div class="technologies">
            <img src="images/ZoomLogo.png" alt="Логотип Zoom">
            <img src="images/Notepad_icon.png" alt="Логотип Notepad++">
            <img src="images/VSC_icon.png" alt="Логотип Visual Studio Code">            
            <img src="images/figma_icon.png" alt="Логотип Figma">           
            <img src="images/githubLogo.png" alt="Логотип GitHub">  
        </div>

        <aside>
            <h2>Факты обо мне</h2>
            <div class="about">
                <div class="izgl">
                    <h4>Первый сайт</h4>
                    <p>разработала в 2000 году. Он существует до сих пор.</p>
                </div>
                <div class="izgl">
                    <h4>Опыт преподавания</h4>
                    <p>с 2012 года</p>
                </div>
                <div class="izgl">
                    <h4>Изучала JavaScript </h4>
                    <p>в Учебном центре «Специалист» при&nbsp;МГТУ им.&nbsp;Н.&nbsp;Э.&nbsp;Баумана</p>
                    <p class="serts">
                        <a href="https://www.specialist.ru/graduate/groupcert/1121457" target="_blank" rel="noopener noreferrer">Сертификат 1</a>
                        <a href="https://www.specialist.ru/graduate/groupcert/1121458" target="_blank" rel="noopener noreferrer">Сертификат 2</a>
                    </p>
                </div>                
                <div class="izgl">
                    <h4>Более 30 человек </h4>
                    <p>обучаю ежегодно индивидуально и&nbsp;в&nbsp;мини-группах</p>
                </div>                 
            </div>
        </aside>
        <div class="contacts" id="contacts">		
            <h2>Свяжитесь со мной</h2>
        <?php if($output) { ?>    
			<h3>Если заинтересованы в обучении, свяжитесь со мной</h3>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>#contacts" method="post">
			<?php if(!empty($err)) {echo "<p class='red'>$err</p>"; } ?>
                <div class="row">
                    <input type="text" name="name" id="name" placeholder="Ваше имя" value="<?php echo $name; ?>">
                    <label for="name">Ваше имя</label>
                </div>
                <div class="row">
                    <input type="email" name="email" id="email" required placeholder="Ваш e-mail" value="<?php echo $email; ?>">
                    <label for="email">Ваш e-mail</label>
                </div>
                <div class="row border">
                    <label for="course">Чему хотите учиться?</label>
                    <select name="course" id="course">
                        <option label="HTML5" value="HTML5">HTML5</option>
                        <option label="CSS3" value="CSS3">CSS3</option>
                        <option label="JavaScript" value="JavaScript">JavaScript ES6</option>
                    </select>
                </div>
                <button type="submit" name="submit">Отправить</button>
            </form>
		<?php } else { ?>
            <h3>Спасибо за заявку!</h3>
			<p>Я свяжусь с Вами в течение двух дней.</p>
		<?php } ?>
        </div>        
    </div>
</body>
</html>