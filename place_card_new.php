<?php

?>

    <link rel="stylesheet" href="place_card_new.css">

<div class="place_card_cont">
    <div class="leaflet-top leaflet-left">
            <section id="section-infobox" class="section-infobox-wrapper invisible leaflet-control" data-leaflet-control-position="topleft" style="display: block;"><div style="text-align: left" class="section-infobox-header">
                    <h1 class="section-infobox-title">
                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                        &nbsp;Bar 76</h1>

                    <button id="actor-infobox-close" class="section-infobox-button-close" onclick="closeModal();">
                        <i class="fa fa-times fa-2x" aria-hidden="true"></i> <!--  Вот тут был просто "Х", который я заменила на крестик из awesome(!!)-->
                    </button>
                </div>

                <div id="section-infobox-content" class="section-infobox-content">
                    <div class="infobox-desc">
                        <a href="https://usvoih.fontanka.ru/storage/2020/04/02/2c720014-0775-48e0-b167-3be8a9edf540.png" target="_blank">
                            <img src="https://usvoih.fontanka.ru/storage/2020/04/02/2c720014-0775-48e0-b167-3be8a9edf540_preview.jpg" width="350" height="250">
                        </a>
                    </div>
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
