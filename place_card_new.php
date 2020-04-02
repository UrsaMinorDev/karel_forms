<?php

?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="place_card_new.css">
    <!--    ЗДЕСЬ (НИЖЕ) ПОДКЛЮЧАЕТСЯ ШРИФТ!! -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!--    ЗДЕСЬ (НИЖЕ) ПОДКЛЮЧАЕТСЯ AWESOME! -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <title></title>
</head>

<body>

<div class="leaflet-control-container">
    <div class="leaflet-top leaflet-left">
            <section id="section-infobox" class="section-infobox-wrapper invisible leaflet-control" data-leaflet-control-position="topleft" style="display: block;"><div style="text-align: left" class="section-infobox-header">
                    <h1 class="section-infobox-title">
                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                        &nbsp;Bar 76</h1>

                    <button id="actor-infobox-close" class="section-infobox-button-close">
                        <i class="fa fa-times fa-2x" aria-hidden="true"></i> <!--  Вот тут был просто "Х", который я заменила на крестик из awesome(!!)-->
                    </button>
                </div>

                <div id="section-infobox-content" class="section-infobox-content">
                    <div class="infobox-desc">
                        <fieldset>
                            <legend>Род занятий</legend>
                            Гастрономический бар
                        </fieldset>

                        <fieldset>
                            <legend>Наши особенности</legend>
                            Вкусная еда. Очень быстро и вкусно готовят на ресторанном уровне за очень умеренные деньги.
                        </fieldset>

                        <fieldset>
                            <legend>Скидки и особые условия для соседей</legend>
                            Бесплатная доставка по Петроградской стороне. Скидка 20 % к меню, оплата наличными и картой через мобильный терминал.
                        </fieldset>
                    </div>

                    <fieldset>
                        <legend>Наши контакты</legend>
                        <!--  ПРАВКА В ВЕРСТКЕ!!! (цвет внутри Спана удален). Стиль для ссылки прописан. Если это должно быть ссылкой, нужно в шаблоне заменить на <a>-->
                        <strong>Адрес:</strong><br> <span>Малый проспект Петроградской стороны, 76 </span> <br>

                        <strong>Наш телефон:</strong><br><span>https://www.facebook.com/Bar76SPb/ </span> <br>
                    </fieldset>

<!--                    <br>-- Удалить из верстки. -->
<!--                    <br>-->
                    <div class="infobox-site">
                        <a href="нет" target="_blank">нет</a>
                    </div>
                </div>
                <!--    Внесена правка: добавлен стиль, прописанные ранее стили вынесены в сss-таблицу-->
                <span class="footer">Escape - закрыть это окно</span>

            </section>
    </div>
</div>
</body>
</html>