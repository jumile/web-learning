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
        <link rel="stylesheet" href="css/style.min.css">
        <script src="scripts/html5shiv.js"></script>
        <script src="scripts/smoothScroll.js" defer></script>
        <script src="scripts/moreExamples.js" defer></script>
    </head>
    <body class="page">
        <div class="page__wrapper">
            <header class="page__header">
                <div class="logo page__logo">
                    <div class="logo__logo-text">W</div>
                    <div class="logo__inner-logo"></div>
                </div>
                <nav class="page__nav">
                    <ul class="nav">
                        <li class="nav__item"><a class="nav__link" href="#langs">Технологии</a></li>
                        <li class="nav__item"><a class="nav__link" href="#examples">Примеры работ</a></li>
                        <li class="nav__item"><a class="nav__link" href="#lessons">Как проходят занятия</a></li>
                    </ul>
                </nav>
            </header>
            <section class="page__intro intro">
                <div class="intro__text-box">
                    <h1 class="intro__title">Обучение веб-разработке</h1>
                    <p class="intro__text">Меня зовут Ирина, я преподаю на компьютерных курсах. У меня учатся люди, желающие
                        найти работу в&nbsp;сфере создания сайтов. Они осваивают верстку сайтов
                        "с&nbsp;нуля", учатся применять CSS и&nbsp;JavaScript. Если хотите попробовать себя в&nbsp;этой
                        области&nbsp;— обращайтесь.</p>
                    <p class="intro__text">Я работаю и со взрослыми, и с детьми (от 13 лет).</p>
                    <div class="logo page__logo">
                        <div class="logo__inner-logo"></div>
                        <a class="logo__link" href="#contacts">Пишите</a>
                    </div>
                </div>
                <div class="intro__image-box">
                    <img class="intro__image" src="images/me.svg" alt="Фото автора" width="363">
                </div>
            </section>
            <main class="page__main content" id="langs">
                <h2 class="content__title">Технологии</h2>
                <h3 class="content__subtitle content__subtitle--mb33">Чему я могу вас научить</h3>
                <div class="content__grid tech">
                    <section class="tech__column">
                        <h4 class="tech__title tech__title--html">HTML5</h4>
                        <p class="tech__description">Язык разметки гипертекста HTML&nbsp;— это основа любого сайта
                            в&nbsp;Интернете. Именно
                            при&nbsp;помощи этого языка на&nbsp;веб-страницы добавляют самое разное содержимое&nbsp;—
                            заголовки, абзацы, списки, таблицы, формы обратной связи с&nbsp;посетителями, изображения, звук,
                            видео и,&nbsp;конечно&nbsp;же, гиперссылки, которые делают сайт частью Всемирной паутины.
                            Современная версия&nbsp;— HTML5.</p>
                    </section>
                    <section class="tech__column">
                        <h4 class="tech__title tech__title--css">CSS3</h4>
                        <p class="tech__description">CSS&nbsp;— ещё один язык, который используется при&nbsp;создании
                            сайтов. С&nbsp;помощью CSS
                            на&nbsp;веб-страницы добавляют оформление, превращают обычную разметку HTML в&nbsp;яркие
                            современные сайты. На&nbsp;CSS можно изменять шрифт, размер и&nbsp;цвет текста, добавлять
                            элементам страницы поля, границы, тени, применять фон и&nbsp;фоновые изображения, создавать
                            фотогалереи, выполнять стилизацию гиперссылок и&nbsp;создавать меню, делать интерактивные
                            элементы&nbsp;— ролловеры и&nbsp;анимацию, управлять положением элементов на&nbsp;странице,
                            создавать колонки и&nbsp;многое-многое другое. Всё, что мы сегодня видим на&nbsp;сайтах,
                            выполнено с&nbsp;использованием языка CSS.</p>
                    </section>
                    <section class="tech__column">
                        <h4 class="tech__title tech__title--js">JavaScript</h4>
                        <p class="tech__description">Выпадающие меню, интерактивные галереи, слайдеры, вкладки («табы»),
                            сворачивающиеся панели,
                            проверка веб-форм, анимация&nbsp;— все эти привычные на&nbsp;современных сайтах элементы
                            позволяет создавать язык программирования JavaScript. Освоив его, вы станете веб-разработчиком,
                            а&nbsp;не&nbsp;просто верстальщиком.</p>
                    </section>
                </div>
                <h2 class="content__title" id="examples">Примеры вёрстки</h2>
                <h3 class="content__subtitle content__subtitle--mb23">Вы тоже так сможете</h3>
                <div class="content__gallery gallery">
                    <section class="example example--yellow">
                        <h4 class="example__title">Лендинг для книги</h4>
                        <div class="example__header">
                            <ul class="example__list">
                                <li class="example__list-item">HTML5 + CSS3 + PHP</li>
                                <li class="example__list-item">Многоколоночная вёрстка</li>
                                <li class="example__list-item">Гибкие сетки (grids)</li>
                                <li class="example__list-item">Адаптивность: версии для ПК, планшетов и мобильных</li>
                            </ul>
                            <div class="logo example__logo">
                                <div class="logo__inner-logo"></div>
                                <a class="logo__link example__link" href="https://owls.gladiols.ru" target="blank"
                                    rel="noopener noreferrer">Посмотреть</a>
                            </div>
                        </div>
                        <picture>
                            <source type="image/webp" srcset="images/screenshots/owls.webp">
                            <img class="example__img" src="images/screenshots/owls.png" alt="Лендинг для книги">
                        </picture>
                    </section>
                    <section class="example example--blue2">
                        <h4 class="example__title">Сайт о гладиолусах</h4>
                        <div class="example__header">
                            <ul class="example__list">
                                <li class="example__list-item">HTML5 + CSS3 + jQuery + PHP</li>
                                <li class="example__list-item">Семантическая разметка</li>
                                <li class="example__list-item">&quot;Плавающие&quot; элементы</li>
                                <li class="example__list-item">Адаптивность главной страницы: версии для ПК и мобильных</li>
                            </ul>
                            <div class="logo example__logo">
                                <div class="logo__inner-logo"></div>
                                <a class="logo__link example__link" href="https://www.gladiols.ru" target="blank"
                                    rel="noopener noreferrer">Посмотреть</a>
                            </div>
                        </div>
                        <picture>
                            <source type="image/webp" srcset="images/screenshots/glads.webp">
                            <img class="example__img" src="images/screenshots/glads.png" alt="Сайт о гладиолусах">
                        </picture>
                    </section>
                    <section class="example example--cerin example--hidden">
                        <h4 class="example__title">Демо-макет: Wyfly</h4>
                        <div class="example__header">
                            <ul class="example__list">
                                <li class="example__list-item">HTML5 + CSS3 + JavaScript</li>
                                <li class="example__list-item">Семантическая разметка</li>
                                <li class="example__list-item">Адаптивность: версии для ПК, планшетов и мобильных</li>
                                <li class="example__list-item">Интерактивные элементы формы</li>
                            </ul>
                            <div class="logo example__logo">
                                <div class="logo__inner-logo"></div>
                                <a class="logo__link example__link" href="wyfly/index.html" target="blank"
                                    rel="noopener noreferrer">Посмотреть</a>
                            </div>
                        </div>
                        <picture>
                            <source type="image/webp" srcset="images/screenshots/wyfly.webp">
                            <img class="example__img" src="images/screenshots/wyfly.png"
                                alt="Демо-макет: сайт заказа билетов">
                        </picture>
                    </section>
                    <section class="example example--pink example--hidden">
                        <h4 class="example__title">Демо-макет: Гостиница для кошек</h4>
                        <div class="example__header">
                            <ul class="example__list">
                                <li class="example__list-item">HTML5 + CSS3 + JavaScript + jQuery</li>
                                <li class="example__list-item">&quot;Гибкие&quot; контейнеры</li>
                                <li class="example__list-item">Адаптивность: версии для ПК, планшетов и мобильных</li>
                                <li class="example__list-item">Интерактивность: фильтры, карты</li>
                            </ul>
                            <div class="logo example__logo">
                                <div class="logo__inner-logo"></div>
                                <a class="logo__link example__link" href="cats/index.html" target="blank"
                                    rel="noopener noreferrer">Посмотреть</a>
                            </div>
                        </div>
                        <picture>
                            <source type="image/webp" srcset="images/screenshots/cats.webp">
                            <img class="example__img" src="images/screenshots/cats.png"
                                alt="Демо-макет: Гостиница для кошек">
                        </picture>
                    </section>
                    <section class="example example--blue example--hidden">
                        <h4 class="example__title">Демо-макет: Garden City Center</h4>
                        <div class="example__header">
                            <ul class="example__list">
                                <li class="example__list-item">HTML5 + CSS3 + jQuery</li>
                                <li class="example__list-item">&quot;Гибкие&quot; контейнеры</li>
                                <li class="example__list-item">Адаптивность: версии для ПК, планшетов и мобильных</li>
                                <li class="example__list-item">Фотогалереи с прокруткой</li>
                            </ul>
                            <div class="logo example__logo">
                                <div class="logo__inner-logo"></div>
                                <a class="logo__link example__link" href="garden_city/index.html" target="blank"
                                    rel="noopener noreferrer">Посмотреть</a>
                            </div>
                        </div>
                        <picture>
                            <source type="image/webp" srcset="images/screenshots/garden.webp">
                            <img class="example__img" src="images/screenshots/garden.png"
                                alt="Демо-макет: Garden City Center">
                        </picture>
                    </section>
                    <section class="example example--yellow example--hidden">
                        <h4 class="example__title">Демо-макет: Индекс Еда</h4>
                        <div class="example__header">
                            <ul class="example__list">
                                <li class="example__list-item">HTML5 + CSS3 + JavaScript + jQuery</li>
                                <li class="example__list-item">&quot;Гибкие&quot; контейнеры</li>
                                <li class="example__list-item">Адаптивность: версии для ПК и мобильных</li>
                                <li class="example__list-item">Интерактивность: &quot;табы&quot;, меню</li>
                            </ul>
                            <div class="logo example__logo">
                                <div class="logo__inner-logo"></div>
                                <a class="logo__link example__link" href="indexeda/index.html" target="blank"
                                    rel="noopener noreferrer">Посмотреть</a>
                            </div>
                        </div>
                        <picture>
                            <source type="image/webp" srcset="images/screenshots/indexEda.webp">
                            <img class="example__img" src="images/screenshots/indexEda.png" alt="Демо-макет: Индекс Еда">
                        </picture>
                    </section>              
                    <button type="button" class="button gallery__moreButton">
                        <span>Показать ещё</span>
                        <span class="button--hidden">Скрыть</span>
                    </button>
                </div> 
                <div class="lessons" id="lessons">
                    <div class="lessons__image-box">
                        <img class="lessons__image" src="images/lessons.svg" alt="Обучение веб-разработке" width="395">
                    </div>
                    <div class="lessons__schema">
                        <h3 class="content__subtitle">Как проходят занятия</h3>
                        <ul class="lessons__mes-list">
                            <li class="lessons__mes-item lessons__mes-item--es">Я</li>
                            <li class="lessons__mes-item lessons__mes-item--jus">Вы</li>
                        </ul>
                        <ul class="lessons__order-list">
                            <li class="lessons__order-item lessons__order-item--left">Объясняю новый материал</li>
                            <li class="lessons__order-item lessons__order-item--left">Показываю использование новых
                                элементов на практике</li>
                            <li class="lessons__order-item lessons__order-item--right">Вместе со мной пробуете применять
                                новые знания</li>
                            <li class="lessons__order-item lessons__order-item--left">Даю задания для самостоятельной работы
                            </li>
                            <li class="lessons__order-item lessons__order-item--right">Отрабатываете новый материал</li>
                            <li class="lessons__order-item lessons__order-item--right lessons__order-item--m20">Задаете
                                вопросы</li>
                            <li class="lessons__order-item lessons__order-item--left">Объясняю сложные и непонятные моменты
                            </li>
                            <li class="lessons__order-item lessons__order-item--right">С середины курса работаете над
                                самостоятельным проектом</li>
                            <li class="lessons__order-item lessons__order-item--left lessons__order-item--m10">По мере
                                необходимости даю Вам консультации</li>
                        </ul>
                    </div>
                </div>
                <div class="content__technologies technologies">
                    <picture>
                        <source type="image/webp" srcset="images/icon_zoom.webp 1x, images/icon_zoom@2x.webp 2x">
                        <img class="technologies__item" src="images/icon_zoom.png" srcset="images/icon_zoom@2x.png 2x"
                            alt="Логотип Zoom" title="Zoom">
                    </picture>
                    <picture>
                        <source type="image/webp" srcset="images/icon_notepad.webp 1x, images/icon_notepad@2x.webp 2x">
                        <img class="technologies__item" src="images/icon_notepad.png" srcset="images/icon_notepad@2x.png 2x"
                            alt="Логотип Notepad++" title="Notepad++">
                    </picture>
                    <picture>
                        <source type="image/webp" srcset="images/icon_vscode.webp 1x, images/icon_vscode@2x.webp 2x">
                        <img class="technologies__item" src="images/icon_vscode.png" srcset="images/icon_vscode@2x.png 2x"
                            alt="Логотип Visual Studio Code" title="Visual Studio Code">
                    </picture>
                    <picture>
                        <source type="image/webp" srcset="images/icon_figma.webp 1x, images/icon_figma@2x.webp 2x">
                        <img class="technologies__item" src="images/icon_figma.png" srcset="images/icon_figma@2x.png 2x"
                            alt="Логотип Figma" title="Figma">
                    </picture>
                    <picture>
                        <source type="image/webp" srcset="images/icon_github.webp 1x, images/icon_github@2x.webp 2x">
                        <img class="technologies__item" src="images/icon_github.png" srcset="images/icon_github@2x.png 2x"
                            alt="Логотип GitHub" title="GitHub">
                    </picture>
                </div>
                <aside class="content__about">
                    <h2 class="content__title">Факты обо мне</h2>
                    <ul class="about">
                        <li class="about__card">
                            <h4 class="about__title">Первый сайт</h4>
                            <p class="about__details">разработала в 2000 году. Он существует до сих пор.</p>
                        </li>
                        <li class="about__card">
                            <h4 class="about__title">Опыт преподавания</h4>
                            <p class="about__details">с 2012 года</p>
                        </li>
                        <li class="about__card">
                            <h4 class="about__title">Изучала JavaScript </h4>
                            <p class="about__details">в Учебном центре «Специалист» при&nbsp;МГТУ
                                им.&nbsp;Н.&nbsp;Э.&nbsp;Баумана</p>
                            <p class="about__details serts">
                                <a class="serts__link" href="https://www.specialist.ru/graduate/groupcert/1121457"
                                    target="_blank" rel="noopener noreferrer">Сертификат 1</a>
                                <a class="serts__link" href="https://www.specialist.ru/graduate/groupcert/1121458"
                                    target="_blank" rel="noopener noreferrer">Сертификат 2</a>
                            </p>
                        </li>
                        <li class="about__card">
                            <h4 class="about__title">Более 30 человек </h4>
                            <p class="about__details">обучаю ежегодно индивидуально и&nbsp;в&nbsp;мини-группах</p>
                        </li>
                    </ul>
                </aside>
                <div class="content__contacts contacts" id="contacts">
                    <h2 class="content__title">Свяжитесь со мной</h2>
                    <?php if($output) { ?>    
                    <h3 class="content__subtitle">Если заинтересованы в обучении, свяжитесь со мной</h3>
                    <form class="contacts__form" action="<?php echo $_SERVER['PHP_SELF']; ?>#contacts" method="post">
                        <?php if(!empty($err)) {echo "<p class='red'>$err</p>"; } ?>
                        <div class="row">
                            <input class="row__input input" type="text" name="name" id="name" placeholder="Ваше имя" value="<?php echo $name; ?>">
                            <label class="row__label" for="name">Ваше имя</label>
                        </div>            
                        <div class="row">
                            <input class="row__input input" type="email" name="email" id="email" required
                                placeholder="Ваш e-mail" value="<?php echo $email; ?>">
                            <label class="row__label" for="email">Ваш e-mail</label>
                        </div>
                        <div class="row row--border">
                            <label class="row__label" for="course">Чему хотите учиться?</label>
                            <select class="row__select select" name="course" id="course">
                                <option class="select__option" label="HTML5" value="HTML5">HTML5</option>
                                <option class="select__option" label="CSS3" value="CSS3">CSS3</option>
                                <option class="select__option" label="JavaScript" value="JavaScript">JavaScript ES6
                                </option>
                            </select>
                        </div>
                        <button class="contacts__button button" type="submit">Отправить</button>
                    </form>
                    <?php } else { ?>
                        <h3 class="content__subtitle">Спасибо за заявку!</h3>
                        <p>Я свяжусь с Вами в течение двух дней.</p>
                    <?php } ?>
                </div>
            </main>
        </div>
    </body>
</html>