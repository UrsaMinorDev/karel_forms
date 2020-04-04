<?php

?>
    <!DOCTYPE html>
    <html lang="ru-RU" itemscope itemtype="http://schema.org/WebSite">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="index.css">
        <script src="index.js" type="text/javascript"></script>
        <!--    ЗДЕСЬ (НИЖЕ) ПОДКЛЮЧАЕТСЯ ШРИФТ!! -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <!--    ЗДЕСЬ (НИЖЕ) ПОДКЛЮЧАЕТСЯ AWESOME! -->
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <title></title>
    </head>

    <body>
        <div class="header">
            <img class="desctop" src="logo-20years.c7a3f31.svg">
            <img class="mobile" src="logo_mini.png">
            <div class="title">"Поддержи своих"</div>
            <div class="search_wrap">
                <div class="search_button" onclick="openSearch(this);">
                    <i class="fa fa-angle-down fa-2x" aria-hidden="true"></i>
                    <div class="content">
                        <p>Фильтр</p>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="search_list">
                    <div class="item" data-value="food" onclick="chooseItem(this);">
                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                        <p>Еда</p>
                    </div>
                    <div class="item" data-value="books" onclick="chooseItem(this);">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <p>Книги</p>
                    </div>
                    <div class="item" data-value="services" onclick="chooseItem(this);">
                        <i class="fa fa-handshake-o" aria-hidden="true"></i>
                        <p>Усуги</p>
                    </div>
                    <div class="item" onclick="refreshList(this);">
                        <i class="fa fa-refresh" aria-hidden="true"></i>
                        <p>Показать всё</p>
                    </div>
                </div>
            </div>
        </div>
<!--       / Header -->

<!--        Content -->
        <div class="content">
            <div class="content_button_wrap">
                <div class="fontanka-button" data-value="form" onclick="showModal(this)">Добавить</div>
            </div>

        </div>
 <!--        /Content -->

<!--        Modal area-->
        <div class="modal_background" id="modal_background">
            <div class="about_modal modal">
                <div class="header_modal">
                    <div class="title">О проекте</div>
                    <i class="fa fa-times" aria-hidden="true" onclick="closeModal(this);"></i>
                </div>
                <div class="text">
                    <p>«Фонтанка» приглашает читателей посмотреть, какие предприниматели в это тяжелое время не опускают руки, а продолжают каждый день работать, чтобы вкусную и здоровую еду, нужные товары и востребованные каждый день услуги могли получить как можно больше жителей Петербурга.</p>
                    <p>Рядом с каждым из нас работают соседи: булочные, кафе, ателье,арикмахерские. Им очень тяжело сейчас, но их пончики и кофе все такие же вкусные, а руки такие же умелые, и работают они так же профессионально, как и раньше.</p>
                    <p>Если у вас есть возможность, поддержите их. Лучшее, что вы можете сделать — заказать у соседей то, что вы и так все время покупаете где-то.</p>
                    <p>На нашей карте будут постоянно появляться точки, где петербуржцы не опускают руки, несмотря на кризис, падение рубля и коронавирус.</p>
                    <p>Если вы хотите добавить на карту соседскую или даже свою компанию,</p>
                    <div class="fontanka-button" data-value="form" onclick="showModal(this)" >подайте заявку через форму</div>
                    <p>или напишите сюда: <a href="mailto:usvoih@fontanka.ru">usvoih@fontanka.ru</a></p>
                    <p>Жалобы, комментарии и предложения отправляйте, пожалуйста, на тот же адрес.</p>
                    <p>И туда же пишите, если вы хотите рассказать «Фонтанке» подробнее о своем бизнесе.</p>
                    <p>Наш проект называется «Поддержи своих», и в нем есть не только эта карта.</p>
                </div>
            </div>
            <div class="form_modal modal">
                <?php include('form.php'); ?>
            </div>
        </div>
<!--       / Modal area-->

<!--        Footer -->
        <footer>
            <div class="footer_wrap">
                <div class="marketing_block">
                    <div class="logo">
                        <a href=""><img src="logo_mini.png"></a>
                        <a href=""><img src="logo_mini.png"></a>
                        <a href=""><img src="logo_mini.png"></a>
                        <a href=""><img src="logo_mini.png"></a>
                        <a href=""><img src="logo_mini.png"></a>
                    </div>
                    <div class="phone">По вопросам сотрудничества и размещения рекламы: <a href="tel:+78124167773"> +7 812 416 777 3</a></div>
                </div>
                <div class="content">
                    <div class="buttons_wrap">
                        <div class="fontanka-button" data-value="about" onclick="showModal(this);">
                            О проекте
                        </div>
                        <a class="fontanka-button">
                            Online сервисы
                        </a>
                    </div>
                    <div class="social_media">
                        <div class="title">Поделиться в соцсетях:</div>
                        <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                        <script src="https://yastatic.net/share2/share.js"></script>
                        <div class="ya-share2" data-services="vkontakte,facebook,twitter,telegram"></div>
                    </div>
                    <div class="copyright">
                        © Копирайты: Фонтанка.Ру, Leaflet, OpenSteetMaps, Yandex Geocoder
                    </div>
                </div>
            </div>

        </footer>

    </body>
