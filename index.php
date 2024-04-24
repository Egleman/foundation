<?php
// Этот код располагается в самом верху страницы, с которой нужно делать редирект
// Ссылка от корня, куда редиректим при выполнении условий
$redirectTo = '/second.php';
// Получаем ЮТМ-метку из УРЛа, вместо utm_campaign можно вставить любой индекс метки (utm_campaign, utm_source, ...)
$utm = $_GET['utm_campaign'] ?? null;
// Проверяем есть ли метка в УРЛе и начинается ли она с 1
if ($utm && $utm[0] == 1) {
$queryParams = http_build_query($_GET); // Получаем все параметры GET запроса как строку
$redirectTo .= '?' . $queryParams; // Добавляем параметры GET к URL-адресу перенаправления    
  // Если метка есть и правило редиректа найдено, то редиректим
  header("Location: {$redirectTo}");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/logo-new.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Фундамент любой сложности под ключ в Москве и Московской области</title>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) { if (document.scripts[j].src === r) { return; } }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(96630363, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/96693045" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
            <a href="/" class="header__logo">
                    <picture id="test">
                        <source media="(max-width: 1200px)" srcset="./img/logo-new.png">
                        <img src="./img/logo-new.png">
                    </picture>
                </a>
                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__list-item"><a href="#services" scroll class="header__list-link">Услуги</a></li>
                        <li class="header__list-item"><a href="#why" scroll class="header__list-link">Почему мы?</a></li>
                        <li class="header__list-item"><a href="#about" scroll class="header__list-link">О компании</a></li>
                        <li class="header__list-item"><a href="#stock" scroll class="header__list-link">Акции</a></li>
                        <li class="header__list-item"><a href="#faq" scroll class="header__list-link">Вопросы и ответы</a></li>
                    </ul>
                </nav>
                <div class="header__contacts">
                    <a href="tel:74951420818" class="header__phone">
                        <img src="./img/phone-ico.png" alt="phone-icon">
                        +7 495 142-08-18
                    </a>
                    <button class="button header__button" toggle="#callback">Заказать звонок</button>
                </div>
                <button class="header__burger">
                    <img src="./img/burger-ico.svg" alt="burger-icon">
                </button>
            </div>
        </div>
    </header>
    <main>
        <section class="hero">
            <div class="anchor" id="hero"></div>
            <div class="container">
                <div class="hero__wrapper">
                    <h1 class="hero__title">
                        Фундамент под ключ в Москве<br>
                        и Московской области
                    </h1>
                    <p class="hero__subtitle">
                        Не знаете какой фундамент выбрать? Мы проконсультируем<br>
                        по всем вопросам и подберем подходящий тип фундамента:
                    </p>
                    <button class="button hero__button" toggle="#callback">Оставить заявку</button>
                    <div class="hero__grid">
                        <div class="hero__card">
                            <img src="./img/hero-card-1.png" alt="icon" class="hero__card-img">
                            <p class="hero__card-text">
                                Выезд специалиста
                                бесплатно
                            </p>
                        </div>
                        <div class="hero__card">
                            <img src="./img/hero-card-2.png" alt="icon" class="hero__card-img">
                            <p class="hero__card-text">Проект в подарок</p>
                        </div>
                        <div class="hero__card">
                            <img src="./img/hero-card-3.png" alt="icon" class="hero__card-img">
                            <p class="hero__card-text">Фиксированная цена</p>
                        </div>
                        <div class="hero__card">
                            <img src="./img/hero-card-4.png" alt="icon" class="hero__card-img">
                            <p class="hero__card-text">Скидка до 30% на материалы</p>
                        </div>
                    </div>
                    <a href="#stock" scroll class="hero__spinner">
                        <div class="hero__spinner-wrap">
                            <img src="./img/hero-ico.svg" alt="text-icon" class="hero__spinner-img">
                            <div class="hero__spinner-circle"></div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="anchor" id="services"></div>
            <div class="container">
                <h2 class="title services__title">Наши услуги</h2>
            </div>
            <div class="services__container">
                <div class="services__wrap left">
                    <button class="services__button left">
                        <svg role="presentation" focusable="false" style="display: block" viewBox="0 0 10.6 18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polyline fill="none" stroke="#ffffff" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="2" points="1,1 9,9 1,17"></polyline></svg>
                    </button>
                </div>
                <div class="services__slider">
                    <div class="services__swiper swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="services__card">
                                    <div class="services__card-img"><img src="./img/services-4.jpg" alt="image"></div>
                                    <div class="services__card-price">
                                        <span class="new">от 2200 р/м²</span>
                                        <span class="old">от 2590 р/м²</span>
                                    </div>
                                    <p class="services__card-name">Фундаментная плита</p>
                                    <p class="services__card-text">Сплошная монолитная железобетонная конструкция</p>
                                    <button class="button services__card-button" toggle="#callback">Подробнее</button>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services__card">
                                    <div class="services__card-img"><img src="./img/services-5.jpg" alt="image"></div>
                                    <div class="services__card-price">
                                        <span class="new">от 3800 р/м²</span>
                                        <span class="old"></span>
                                    </div>
                                    <p class="services__card-name">Ленточный фундамент</p>
                                    <p class="services__card-text">Одним из самых надежных и подходит для большинства типов грунтов</p>
                                    <button class="button services__card-button" toggle="#callback">Подробнее</button>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services__card">
                                    <div class="services__card-img"><img src="./img/services-6.jpg" alt="image"></div>
                                    <div class="services__card-price">
                                        <span class="new">от 7000 р/м²</span>
                                        <span class="old"></span>
                                    </div>
                                    <p class="services__card-name">УШП</p>
                                    <p class="services__card-text">Железобетонная плита со встроенными коммуникациями и системой обогрева «теплый пол»</p>
                                    <button class="button services__card-button" toggle="#callback">Подробнее</button>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services__card">
                                    <div class="services__card-img"><img src="./img/services-7.jpg" alt="image"></div>
                                    <div class="services__card-price">
                                        <span class="new">от 4200 р/м²</span>
                                        <span class="old"></span>
                                    </div>
                                    <p class="services__card-name">Свайный фундамент</p>
                                    <p class="services__card-text">Конструкция, состоящая из вертикальных опор, погруженных в грунт</p>
                                    <button class="button services__card-button" toggle="#callback">Подробнее</button>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services__card">
                                    <div class="services__card-img"><img src="./img/services-1.jpg" alt="image"></div>
                                    <div class="services__card-price">
                                        <span class="new">от 3000 р/м²</span>
                                        <span class="old"></span>
                                    </div>
                                    <p class="services__card-name">Столбчатый фундамент</p>
                                    <p class="services__card-text">Сооружается под строительство небольших и легких построек</p>
                                    <button class="button services__card-button" toggle="#callback">Подробнее</button>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services__card">
                                    <div class="services__card-img"><img src="./img/services-2.jpg" alt="image"></div>
                                    <div class="services__card-price">
                                        <span class="new">от 3000 м/п</span>
                                        <span class="old"></span>
                                    </div>
                                    <p class="services__card-name">Блочный фундамент</p>
                                    <p class="services__card-text">Недорогой и быстровозводимый тип фундамента</p>
                                    <button class="button services__card-button" toggle="#callback">Подробнее</button>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services__card">
                                    <div class="services__card-img"><img src="./img/services-3.jpg" alt="image"></div>
                                    <div class="services__card-price">
                                        <span class="new">от 6000 р/м²</span>
                                        <span class="old"></span>
                                    </div>
                                    <p class="services__card-name">Свайно-ростверковый фундамент</p>
                                    <p class="services__card-text">Конструкцию из свай, заглубленных в грунт ниже глубины промерзания почвы</p>
                                    <button class="button services__card-button" toggle="#callback">Подробнее</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services__wrap right">
                    <button class="services__button right">
                        <svg role="presentation" focusable="false" style="display: block" viewBox="0 0 10.6 18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polyline fill="none" stroke="#ffffff" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="2" points="1,1 9,9 1,17"></polyline></svg>
                    </button>
                </div>
            </div>
        </section>
        <section class="calc">
            <div class="container">
                <div class="calc__wrapper">
                    <h2 class="calc__title">Расчет стоимости фундамента</h2>
                    <p class="calc__subtitle">Получите подробную <span>смету за одну минуту!</span></p>
                    <div class="calc__wrap">
                        <svg role="presentation" class="calc__wrap-arrow2" style="fill:#ffe100;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 70"><path d="M31.5 47c-1.1-.9-2.7-.7-3.5.4L20.2 57V5.8c0-1.4-1.1-2.5-2.5-2.5s-2.5 1.1-2.5 2.5V57l-7.8-9.7c-.8-1-2.4-1.2-3.5-.3-1.1.9-1.2 2.4-.4 3.5l12.2 15.2c.5.6 1.2.9 1.9.9s1.5-.3 1.9-.9l12.2-15.2c1-1.1.9-2.6-.2-3.5z"></path></svg>
                        <button class="button button_animated calc__button" toggle="#calc">Рассчитать</button>
                        <svg class="calc__wrap-arrow" role="presentation" style="fill:#ffe100; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 180"><path d="M54.1 109c-.8 0-1.6-.4-2-1.1-.8-1.1-.5-2.7.6-3.5 1.3-.9 6.8-4 11.6-6.6-15.9-1.3-29.2-8.3-38.5-20.2C8.9 56 8.5 24.1 13.2 3.4c.3-1.3 1.7-2.2 3-1.9 1.3.3 2.2 1.7 1.9 3-4.5 19.6-4.2 49.8 11.6 70 9 11.5 21.5 17.7 37.2 18.4l-1.8-2.3c-1.4-1.7-2.7-3.4-4.1-5.1-.7-.9-1.5-1.9-2.3-2.9-.9-1.1-.7-2.6.4-3.5 1.1-.9 2.6-.7 3.5.4 0 0 0 .1.1.1l6.4 7.9c.5.5.9 1.1 1.4 1.7 1.5 1.8 3.1 3.6 4.4 5.6 0 .1.1.1.1.2.1.3.2.5.3.8v.6c0 .2-.1.4-.2.6-.1.1-.1.3-.2.4-.1.2-.3.4-.5.6-.1.1-.3.2-.5.3-.1 0-.1.1-.2.1-1.2.6-16 8.6-18.1 10-.5.5-1 .6-1.5.6z"></path></svg>
                    </div>
                </div>
            </div>
        </section>
        <section class="why">
            <div class="anchor" id="why"></div>
            <div class="container">
                <h2 class="title why__title">Почему мы?</h2>
                <div class="why__grid">
                    <div class="why__card">
                        <div class="why__card-number">1</div>
                        <div class="why__card-info">
                            <p class="why__card-title">Цена известна заранее</p>
                            <p class="why__card-text">
                                Она фиксирована. Мы составляем план и смету в день приезда специалиста.
                            </p>
                        </div>
                    </div>
                    <div class="why__card">
                        <div class="why__card-number">2</div>
                        <div class="why__card-info">
                            <p class="why__card-title">Проект</p>
                            <p class="why__card-text">
                                Может быть полностью ваш или доработан после консультации с нашим проектировщиком
                            </p>
                        </div>
                    </div>
                    <div class="why__card">
                        <div class="why__card-number">3</div>
                        <div class="why__card-info">
                            <p class="why__card-title">Гарантия на работы</p>
                            <p class="why__card-text">
                                На все работы мы даем официальную гарантию десять лет.
                            </p>
                        </div>
                    </div>
                    <div class="why__card">
                        <div class="why__card-number">4</div>
                        <div class="why__card-info">
                            <p class="why__card-title">Качественные материалы</p>
                            <p class="why__card-text">
                                Закупка и доставка на нас. Мы работаем только с проверенными поставщиками.
                            </p>
                        </div>
                    </div>
                    <div class="why__card">
                        <div class="why__card-number">5</div>
                        <div class="why__card-info">
                            <p class="why__card-title">Специалисты своего дела</p>
                            <p class="why__card-text">
                                Мы за разделение труда. Над каждым проектом работают специалисты узкого профиля.
                            </p>
                        </div>
                    </div>
                    <div class="why__card">
                        <div class="why__card-number">6</div>
                        <div class="why__card-info">
                            <p class="why__card-title">Поэтапная оплата</p>
                            <p class="why__card-text">
                                Прием работ заказчиком и оплата поделены на 4 части.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="anchor" id="about"></div>
            <div class="container">
                <h2 class="title about__title">О компании в цифрах</h2>
                <div class="about__grid">
                    <div class="about__card">
                        <div class="about__card-number">15</div>
                        <div class="about__card-text">
                            лет опыта
                            в строительстве
                        </div>
                    </div>
                    <div class="about__card">
                        <div class="about__card-number">> 10</div>
                        <div class="about__card-text">
                            профессиональных бригад
                        </div>
                    </div>
                    <div class="about__card">
                        <div class="about__card-number">> 600</div>
                        <div class="about__card-text">Довольных клиентов</div>
                    </div>
                    <div class="about__card">
                        <div class="about__card-number">> 120 000 м²</div>
                        <div class="about__card-text">
                            Возведенного фундамента
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="stock">
            <div class="anchor" id="stock"></div>
            <div class="container">
                <h2 class="title stock__title">Акции</h2>
                <div class="stock__grid">
                    <a href="#" class="stock__card stock__card_1" toggle="#callback">
                        <h3 class="stock__card-title">Услуги строительной техники <span> в подарок</span></h3>
                        <p class="stock__card-subtitle">При заказе <span>фундаментной плиты</span> от 120 м2</p>
                        <button class="button stock__card-button">Получить</button>
                    </a>
                    <a href="#" class="stock__card stock__card_2" toggle="#callback">
                        <h3 class="stock__card-title">Коммуникации <span>в подарок</span></h3>
                        <p class="stock__card-subtitle">При заказе <span>фундаментной плиты</span>  прокладка коммуникаций (вода, электричество, канализация) <span>в подарок</span>!</p>
                        <button class="button stock__card-button">Получить</button>
                    </a>
                    <a href="#" class="stock__card stock__card_3" toggle="#callback">
                        <h3 class="stock__card-title">Видеонаблюдение <span>в подарок</span></h3>
                        <p class="stock__card-subtitle">При заказе <span>фундаментной плиты</span> видеонаблюдение за ходом строительства <span>в подарок</span>!</p>
                        <button class="button stock__card-button">Получить</button>
                    </a>
                    <a href="#" class="stock__card stock__card_4" toggle="#callback">
                        <h3 class="stock__card-title">Геология участка <span>в подарок</span>!</h3>
                        <p class="stock__card-subtitle">
                            При заказе <span>фундаментной плиты</span> геология участка <span>в подарок</span>!
                        </p>
                        <button class="button stock__card-button">Получить</button>
                    </a>
                    <a href="#" class="stock__card stock__card_5" toggle="#callback">
                        <h3 class="stock__card-title">Отделка <span>в подарок!</span></h3>
                        <p class="stock__card-subtitle">
                            При заказе <span>строительства гаража</span> под ключ отделка <span>в подарок</span>!
                        </p>
                        <button class="button stock__card-button">Получить</button>
                    </a>
                    <a href="#" class="stock__card stock__card_6" toggle="#callback">
                        <h3 class="stock__card-title">Проект дома <span>в подарок</span>!</h3>
                        <p class="stock__card-subtitle">
                            При заказе <span>строительства дома</span> под ключ проект дома <span>в подарок</span>!
                        </p>
                        <button class="button stock__card-button">Получить</button>
                    </a>
                </div>
            </div>
        </section>
        <section class="faq">
            <div class="anchor" id="faq"></div>
            <div class="container">
                <h2 class="title faq__title">Самые частые вопросы<br> и ответы на них</h2>
                <div id="accordion" class="accordion faq__accordion">
                    <div class="accordion__item faq__accordion-item">
                        <div class="accordion__header faq__accordion-header">
                            <div class="faq__accordion-title">Сколько стоит вызов специалиста?</div>
                            <div class="faq__accordion-icon">
                                <svg role="presentation" focusable="false" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                        <g transform="translate(1.000000, 1.000000)" stroke="#000000">
                                            <path d="M0,11 L22,11"></path><path d="M11,0 L11,22"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="accordion__body faq__accordion-body">
                            <div class="accordion__content faq__accordion-content">
                                Эта бесплатная услуга
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__accordion-item">
                        <div class="accordion__header faq__accordion-header">
                            <div class="faq__accordion-title">Как узнать точную стоимость нужного мне фундамента?</div>
                            <div class="faq__accordion-icon">
                                <svg role="presentation" focusable="false" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                        <g transform="translate(1.000000, 1.000000)" stroke="#000000">
                                            <path d="M0,11 L22,11"></path><path d="M11,0 L11,22"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="accordion__body faq__accordion-body">
                            <div class="accordion__content faq__accordion-content">
                                Оставьте заявку и мы бесплатно отправим Вам смету в день обращения.
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__accordion-item">
                        <div class="accordion__header faq__accordion-header">
                            <div class="faq__accordion-title">Когда можете приступить к работам?</div>
                            <div class="faq__accordion-icon">
                                <svg role="presentation" focusable="false" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                        <g transform="translate(1.000000, 1.000000)" stroke="#000000">
                                            <path d="M0,11 L22,11"></path><path d="M11,0 L11,22"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="accordion__body faq__accordion-body">
                            <div class="accordion__content faq__accordion-content">
                                На следующий день после подписания договора.
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__accordion-item">
                        <div class="accordion__header faq__accordion-header">
                            <div class="faq__accordion-title">Сколько времени занимает постройка фундамента?</div>
                            <div class="faq__accordion-icon">
                                <svg role="presentation" focusable="false" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                        <g transform="translate(1.000000, 1.000000)" stroke="#000000">
                                            <path d="M0,11 L22,11"></path><path d="M11,0 L11,22"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="accordion__body faq__accordion-body">
                            <div class="accordion__content faq__accordion-content">
                                Это зависит от типа фундамента и площади. В среднем комплекс работ занимает 10 дней.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq__bottom">
                    <p class="faq__bottom-text">Остались вопросы?</p>
                    <button class="button faq__button" toggle="#callback">Заказать звонок</button>
                </div>
            </div>
        </section>
        <section class="profi">
            <div class="container">
                <div class="profi__wrapper">
                    <h2 class="profi__title">
                        Выезд специалиста<br>
                        и расчет стоимости работ <span>бесплатно</span>
                    </h2>
                    <p class="profi__subtitle">
                        При заказе <span>фундаментной плиты</span> прокладка коммуникаций (вода, электричество, канализация) <span>в подарок</span>
                    </p>
                    <button class="button button_animated profi__button" toggle="#callback">Отправить заявку</button>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer__wrapper">
                <a href="/" class="footer__logo">
                    <img src="./img/logo-footer.png" alt="logo-image">
                </a>
                <div class="footer__info">
                    <p class="footer__label">Контакты</p>
                    <ul class="footer__list">
                        <li class="footer__list-item"><a href="mailto:info@mosvipstroy.ru" class="footer__list-link">info@mosvipstroy.ru</a></li>
                        <li class="footer__list-item"><a href="tel:74951420818" class="footer__list-link">+7 495 142-08-18</a></li>
                    </ul>
                    <p class="footer__label">Адрес</p>
                    <ul class="footer__address">
                        <li class="footer__address-item">
                            <p class="footer__address-text">Московская область, г. Мытищи, ул. Комарова, 12/3 • этаж 2, офис №8</p>
                        </li>
                        <li class="footer__address-item">
                            <p class="footer__address-text">
                                Время работы:<br>
                                ПН-ВС 08:00–20:00
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <a href="#hero" class="button-top">
        <svg role="presentation" width="50" height="50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="50" height="50" rx="50" fill="#ffffff" fill-opacity="0.90" stroke="none"></rect>
            <path d="M14 28L25 18l10 10" stroke="#000000" stroke-width="1" fill="none"></path>
        </svg>
    </a>
    <button class="button button-smeta" toggle="#smeta">Получить смету онлайн</button>
    <div class="mobile-menu">
        <div class="mobile-menu__body">
            <button class="mobile-menu__close">
                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.51465 8.51465L25.4852 25.4852" stroke="black" stroke-width="2.5"
                        stroke-linecap="round" />
                    <path d="M25.4854 8.51465L8.51479 25.4852" stroke="black" stroke-width="2.5"
                        stroke-linecap="round" />
                </svg>
            </button>
            <div class="mobile-menu__wrapper">
                <a href="/" class="mobile-menu__logo">
                    <img src="./img/logo.jpg" alt="logo-image">
                </a>
                <ul class="header__list">
                    <li class="header__list-item"><a href="#services" scroll class="header__list-link">Услуги</a></li>
                    <li class="header__list-item"><a href="#why" scroll class="header__list-link">Почему мы?</a></li>
                    <li class="header__list-item"><a href="#about" scroll class="header__list-link">О компании</a></li>
                    <li class="header__list-item"><a href="#stock" scroll class="header__list-link">Акции</a></li>
                    <li class="header__list-item"><a href="#faq" scroll class="header__list-link">Вопросы и ответы</a></li>
                </ul>
                <div class="header__contacts header__contacts_mobile">
                    <a href="tel:74951420818" class="header__phone">
                        <img src="./img/phone-ico.png" alt="phone-icon">
                        +7 495 142-08-18
                    </a>
                    <button class="button header__button">Заказать звонок</button>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay" id="callback">
        <div class="modal">
            <a href="#" class="modal__close" toggle="#callback">
                <svg viewBox="0 0 50 50" id="icon" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M27.8286 25L45.4144 7.41421L42.5859 4.58578L25.0002 22.1716L7.41436 4.58578L4.58594 7.41421L22.1717 25L4.58594 42.5858L7.41436 45.4142L25.0002 27.8284L42.5859 45.4142L45.4144 42.5858L27.8286 25Z" />
                </svg>
            </a>
            <div class="modal__title">
                Закажите звонок
            </div>
            <div class="modal__subtitle">Мы свяжемся с вами в ближайшее время</div>
            <form action="#" class="modal__form">
                <div class="modal__form-wrap">
                    <input type="text" name="name" placeholder="Имя">
                    <p class="modal__form-error">Поле должно быть заполнено</p>
                </div>
                <div class="modal__form-wrap">
                    <input type="text" name="phone" placeholder="+7 (999) 999-99-99" data-input="masked" data-message="error">
                    <p class="modal__form-error" data-err="phone">Поле должно быть заполнено</p>
                </div>
                <button type="submit" class="button modal__form-button">Отправить</button>
            </form>
        </div>
    </div>
    <div class="overlay" id="smeta">
        <div class="modal">
            <a href="#" class="modal__close" toggle="#smeta">
                <svg viewBox="0 0 50 50" id="icon" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M27.8286 25L45.4144 7.41421L42.5859 4.58578L25.0002 22.1716L7.41436 4.58578L4.58594 7.41421L22.1717 25L4.58594 42.5858L7.41436 45.4142L25.0002 27.8284L42.5859 45.4142L45.4144 42.5858L27.8286 25Z" />
                </svg>
            </a>
            <div class="modal__title">
                Получить смету онлайн
            </div>
            <div class="modal__subtitle">
                Ответьте на 4 простых вопроса<br>
                и получите скидку <b>10 000 рублей</b>!
            </div>
            <form action="#" class="modal__form" data-block="quiz">
                <div class="modal__form-wrap modal__form-wrap_triangle" data-step="0">
                    <p class="modal__form-label">Площадь постройки (м2)</p>
                    <select name="square" class="modal__form-select">
                        <option value="До 50" selected>До 50</option>
                        <option value="50 - 100">50 - 100</option>
                        <option value="100 - 150">100 - 150</option>
                        <option value="150 - 200">150 - 200</option>
                        <option value="Больше 200">Больше 200</option>
                    </select>
                </div>
                <div class="modal__form-wrap modal__form-wrap_triangle modal__form-wrap_hidden" data-step="1">
                    <p class="modal__form-label">Толщина фундамента (мм)</p>
                    <select name="weight" class="modal__form-select">
                        <option value="200" selected>200</option>
                        <option value="250">250</option>
                        <option value="300">300</option>
                        <option value="350">350</option>
                        <option value="400">400</option>
                        <option value="Не знаю">Не знаю</option>
                    </select>
                </div>
                <div class="modal__form-wrap modal__form-wrap_triangle modal__form-wrap_hidden" data-step="2">
                    <p class="modal__form-label">Начало работ</p>
                    <select name="time" class="modal__form-select">
                        <option value="На этой неделе" selected>На этой неделе</option>
                        <option value="В течениe месяца">В течениe месяца</option>
                        <option value="В течение трёх месяцев">В течение трёх месяцев</option>
                        <option value="В течение полугода">В течение полугода</option>
                        <option value="Не знаю">Не знаю</option>
                    </select>
                </div>
                <div class="modal__form-wrap modal__form-wrap_triangle modal__form-wrap_hidden" data-step="3">
                    <p class="modal__form-label">Куда отправить смету</p>
                    <select name="social" class="modal__form-select">
                        <option value="Whatsapp" selected>Whatsapp</option>
                        <option value="СМС">СМС</option>
                        <option value="Telegram">Telegram</option>
                    </select>
                </div>
                <div class="modal__form-wrap modal__form-wrap_hidden" data-step="4">
                    <input type="text" name="phone" placeholder="+7 (999) 999-99-99" data-input="masked" data-message="error">
                    <p class="modal__form-error" data-err="phone">Поле должно быть заполнено</p>
                </div>
                <div class="modal__form-steps">
                    <button class="button modal__form-back" style="opacity: 0;">← Назад</button>
                    <div class="modal__form-counter">
                        <span class="count">1/5</span>
                        <svg class="t-form__screen-progress" style="-webkit-transform:rotate(-90deg);-ms-transform:rotate(-90deg);transform:rotate(-90deg);" width="30" height="30" viewport="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <circle class="t-form__screen-progress-circle" r="10" cx="15" cy="15" fill="transparent" stroke-dasharray="0" stroke-dashoffset="0"></circle>
                            <circle class="t-form__screen-progress-bar" r="10" cx="15" cy="15" fill="transparent" stroke-dasharray="62.8319" stroke-dashoffset="50.266" style="stroke-dashoffset: 50.266;"></circle>
                        </svg>
                    </div>
                    <button class="button modal__form-next">Дальше →</button>
                    <button type="submit" class="button modal__form-button modal__form-button_quiz" style="display: none; ">Получить смету</button>
                </div>
                
            </form>
        </div>
    </div>
    <div class="overlay" id="calc">
        <div class="modal">
            <a href="#" class="modal__close" toggle="#calc">
                <svg viewBox="0 0 50 50" id="icon" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M27.8286 25L45.4144 7.41421L42.5859 4.58578L25.0002 22.1716L7.41436 4.58578L4.58594 7.41421L22.1717 25L4.58594 42.5858L7.41436 45.4142L25.0002 27.8284L42.5859 45.4142L45.4144 42.5858L27.8286 25Z" />
                </svg>
            </a>
            <div class="modal__title">
                Расчет стоимости<br> фундамента онлайн
            </div>
            <div class="modal__subtitle">
                Ответьте на несколько простых вопросов и<br> получите ориентировочную стоимость
            </div>
            <form action="#" class="modal__form">
                <div class="modal__form-wrap modal__form-wrap_triangle">
                    <p class="modal__form-label">Тип постройки</p>
                    <select name="square" class="modal__form-select">
                        <option value="Дом" selected>Дом</option>
                        <option value="Баня">Баня</option>
                        <option value="Гараж">Гараж</option>
                        <option value="Другое">Другое</option>
                        <option value="Больше 200">Больше 200</option>
                    </select>
                </div>
                <div class="modal__form-wrap">
                    <p class="modal__form-label">Тип фундамента</p>
                    <div class="modal__form-grid">
                        <input type="radio" checked name="foundation" id="foundation-1" value="Ленточный">
                        <label for="foundation-1" class="modal__form-images">
                            <div class="modal__form-img">
                                <img src="./img/services-5.jpg" alt="image">
                            </div>
                            <p>Ленточный</p>
                            <div class="modal__form-check">
                                <img src="./img/check-ico.svg" alt="check">
                            </div>
                        </label>
                        <input type="radio" name="foundation" id="foundation-2" value="Фундаментная плита">
                        <label for="foundation-2" class="modal__form-images">
                            <div class="modal__form-img">
                                <img src="./img/services-4.jpg" alt="image">
                            </div>
                            <p>Фундаментная плита</p>
                            <div class="modal__form-check">
                                <img src="./img/check-ico.svg" alt="check">
                            </div>
                        </label>
                        <input type="radio" name="foundation" id="foundation-3" value="Свайный">
                        <label for="foundation-3" class="modal__form-images">
                            <div class="modal__form-img">
                                <img src="./img/services-7.jpg" alt="image">
                            </div>
                            <p>Свайный</p>
                            <div class="modal__form-check">
                                <img src="./img/check-ico.svg" alt="check">
                            </div>
                        </label>
                        <input type="radio" name="foundation" id="foundation-4" value="Столбчатый">
                        <label for="foundation-4" class="modal__form-images">
                            <div class="modal__form-img">
                                <img src="./img/services-1.jpg" alt="image">
                            </div>
                            <p>Столбчатый</p>
                            <div class="modal__form-check">
                                <img src="./img/check-ico.svg" alt="check">
                            </div>
                        </label>
                        <input type="radio" name="foundation" id="foundation-5" value="УШП">
                        <label for="foundation-5" class="modal__form-images">
                            <div class="modal__form-img">
                                <img src="./img/services-6.jpg" alt="image">
                            </div>
                            <p>УШП</p>
                            <div class="modal__form-check">
                                <img src="./img/check-ico.svg" alt="check">
                            </div>
                        </label>
                        <input type="radio" name="foundation" id="foundation-6" value="Блочный">
                        <label for="foundation-6" class="modal__form-images">
                            <div class="modal__form-img">
                                <img src="./img/services-2.jpg" alt="image">
                            </div>
                            <p>Блочный</p>
                            <div class="modal__form-check">
                                <img src="./img/check-ico.svg" alt="check">
                            </div>
                        </label>
                        <input type="radio" name="foundation" id="foundation-7" value="Свайно-ростверковый">
                        <label for="foundation-7" class="modal__form-images">
                            <div class="modal__form-img">
                                <img src="./img/services-3.jpg" alt="image">
                            </div>
                            <p>Свайно-ростверковый</p>
                            <div class="modal__form-check">
                                <img src="./img/check-ico.svg" alt="check">
                            </div>
                        </label>
                        <input type="radio" name="foundation" id="foundation-8" value="Не знаю">
                        <label for="foundation-8" class="modal__form-images">
                            <div class="modal__form-img">
                                <img src="./img/don-know.png" alt="image">
                            </div>
                            <p>Не знаю</p>
                            <div class="modal__form-check">
                                <img src="./img/check-ico.svg" alt="check">
                            </div>
                        </label>
                    </div>
                </div>
                <div class="modal__form-wrap">
                    <p class="modal__form-label">У вас уже есть проект фундамента?</p>
                    <div class="modal__form-projects">
                        <input type="radio" name="project" id="project-1" checked>
                        <label for="project-1">
                            <div class="border">
                                <div class="circle"></div>
                            </div>
                            <p>Да</p>
                        </label>
                        <input type="radio" name="project" id="project-2">
                        <label for="project-2">
                            <div class="border">
                                <div class="circle"></div>
                            </div>
                            <p>Нет</p>
                        </label>
                        <input type="radio" name="project" id="project-3">
                        <label for="project-3">
                            <div class="border">
                                <div class="circle"></div>
                            </div>
                            <p style="color: #00bd00;">Получить проект в подарок</p>
                        </label>
                    </div>
                </div>
                <div class="modal__form-wrap">
                    <p class="modal__form-label">Длина постройки</p>
                    <output class="bubble"></output>
                    <input type="range" name="width" min="1" max="25" value="15" class="styled-slider slider-progress">
                    <div class="modal__form-range">
                        <span>1</span>
                        <span>25</span>
                    </div>
                </div>
                <div class="modal__form-wrap">
                    <p class="modal__form-label">Ширина постройки</p>
                    <output class="bubble"></output>
                    <input type="range" name="width-2" min="1" max="25" value="10" class="styled-slider slider-progress">
                    <div class="modal__form-range">
                        <span>1</span>
                        <span>25</span>
                    </div>
                </div>
                <div class="modal__form-wrap modal__form-wrap_triangle">
                    <p class="modal__form-label">Толщина фундамента (мм)</p>
                    <select name="weight-found" class="modal__form-select">
                        <option value="Не знаю" selected>Не знаю</option>
                        <option value="200">200</option>
                        <option value="250">250</option>
                        <option value="300">300</option>
                        <option value="350">350</option>
                        <option value="400">400</option>
                    </select>
                </div>
                <div class="modal__form-wrap">
                    <textarea name="comment" placeholder="Комментарий (необязательно)"></textarea>
                </div>
                <div class="modal__form-wrap">
                    <input type="text" name="name" placeholder="Имя">
                </div>
                <div class="modal__form-wrap">
                    <input type="text" name="email" placeholder="Email (необязательно)">
                </div>
                <div class="modal__form-wrap">
                    <input type="text" name="phone" placeholder="+7 (999) 999-99-99" data-input="masked" data-message="error">
                    <p class="modal__form-error" data-err="phone">Поле должно быть заполнено</p>
                </div>
                <button type="submit" class="button modal__form-button">Получить рассчёт</button>
            </form>
        </div>
    </div>
    <div class="overlay" id="thanks">
        <div class="modal">
            <a href="#" class="modal__close" toggle="#thanks">
                <svg viewBox="0 0 50 50" id="icon" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M27.8286 25L45.4144 7.41421L42.5859 4.58578L25.0002 22.1716L7.41436 4.58578L4.58594 7.41421L22.1717 25L4.58594 42.5858L7.41436 45.4142L25.0002 27.8284L42.5859 45.4142L45.4144 42.5858L27.8286 25Z" />
                </svg>
            </a>
            <div class="modal__body">
                <div class="modal__title"><b>Спасибо за заявку</b></div>
                <div class="modal__subtitle">
                    Ваш заявка принята в обработку.
                    Мы свяжемся с вами в ближайшее время
                </div>
                <button class="modal__form-button button" toggle="#thanks">Готово</button>
            </div>
        </div>
    </div>
    <script src="./script/inputmask.min.js"></script>
    <script src="./script/swiper-bundle.min.js"></script>
    <script src="./script/index.js"></script>
</body>

</html>