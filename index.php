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
            <img class="desktop" src="logo-20years.c7a3f31.svg">
            <img class="mobile" src="logo_mini.png">
            <div class="title_wrap">
                <div class="title">"Покупай у своих"</div>
                <div class="sub_title">Проект по поддержке малого бизнеса Петербурга</div>
            </div>

<!---------------------------------Filter------------------------------------>
            <div class="search_area desktop">
                <?php include_once('filter.php'); ?>
            </div>

            <div class="search_area mobile" data-value="filter" onclick="showModal(this);">
                <div class="search_button">
                    <div class="content">
                        <p>Фильтр</p>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
 <!---------------------------- / Filter------------------------------------>

        </div>

<!--       / Header -->

<!--        Content -->
        <div class="content">
            <div class="content_button_wrap">
                <div class="fontanka-button" data-value="form" onclick="showModal(this)">Добавить</div>
            </div>
            <div class="leaflet-control-zoomslider leaflet-bar leaflet-control"><a class="leaflet-control-zoomslider-in leaflet-bar-part leaflet-bar-part-top" href="#" title="Zoom in"></a>
                <div class="leaflet-control-zoomslider-wrap leaflet-bar-part">
                    <div class="leaflet-control-zoomslider-body" style="height: 120px;">
                        <div class="leaflet-control-zoomslider-knob" style="transform: translate3d(0px, 33px, 0px);">
                        </div>
                    </div>
                </div>
                <a class="leaflet-control-zoomslider-out leaflet-bar-part leaflet-bar-part-bottom" href="#" title="Zoom out"></a>
            </div>

<!--        Place button --> <div data-value="place" onclick="showModal(this)" style="width: 100px; background-color: #eeeeee; margin-left: 20px; cursor: pointer;">Место 1</div>

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
            <div class="place_card_modal modal">
                <?php include('place_card_new.php'); ?>
            </div>

            <div class="mobile_filter_modal modal">
                <div class="header_modal">
                    <div class="title">Фильтры для карты</div>
                    <i class="fa fa-times" aria-hidden="true" onclick="closeModal(this);"></i>
                </div>
                <div class="search_area">
                     <?php include('filter.php'); ?>
                </div>
            </div>
        </div>
<!--       / Modal area-->

<!--        Footer -->
        <footer>
            <div class="footer_wrap">
                <div class="marketing_block">
<!--                    <div class="marketing_button" onclick="showPartners(this);">Наши партнёры</div>-->
<!--                    <div class="logo">-->
<!--                        <a href=""><img src="logo_mini.png"></a>-->
<!--                        <a href=""><img src="logo_mini.png"></a>-->
<!--                        <a href=""><img src="logo_mini.png"></a>-->
<!--                        <a href=""><img src="logo_mini.png"></a>-->
<!--                        <a href=""><img src="logo_mini.png"></a>-->
<!--                        <i class="fa fa-times" aria-hidden="true" onclick="closePartners(this);"></i>-->
<!--                    </div>-->
                    <div class="phone"><p>По вопросам сотрудничества и размещения рекламы:</p> <a href="tel:+78124167773"> +7 812 416 777 3</a></div>
                </div>
                <div class="content">
                    <div class="buttons_wrap">
                        <div class="fontanka-button" data-value="about" onclick="showModal(this);">
                            <i class="fa fa-question" aria-hidden="true"></i>
                            <p>О проекте</p>
                        </div>
                        <a class="fontanka-button">
                            <i class="fa fa-wifi" aria-hidden="true"></i>
                            <p>Online сервисы</p>
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
            <div class="list_row"></div>

        </footer>

    </body>
