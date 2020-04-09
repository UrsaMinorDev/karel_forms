<!DOCTYPE html>
<html lang="ru-RU" itemscope itemtype="http://schema.org/WebSite">
<head>
    <meta charset="UTF-8">
    <title>{$config.app.title} &mdash; {$config.app.title_sub} &mdash; добавление организации успешно! </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!--    {include file="_inner/meta_favicons.tpl"}-->

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/form_style.css">
    <title>Поддержи своих - мы рассмотрим вашу заявку</title>
</head>

<body>
<div id="section-infobox-content" class="section-infobox-content success_message">
    <img src="/frontend/logo-20years.svg">
    <h1 class="form_title">Добавление организации</h1>

    <div class="">
        <div class="header">
            Ваш запрос успешно отправлен!
        </div>
        <div class="text">
            <p>Большое спасибо, что помогаете нам сделать карту более подробной.</p>
            <p>Наши модераторы рассмотрят вашу заявку в кратчайшие сроки и добавят её на карту.
                Вы получите уведомление на указанный e-mail. В случае необходимости мы свяжемся с вами.
            </p>
            <div class="form_buttons_wrap">
                <button class="button" data-url="/" onclick="if(window.jQuery || parent.jQuery) { parent.jQuery.colorbox.close(); } else { window.location.href='/'; } return false;">Назад на карту</button>
            </div>
        </div>
    </div>
    <!--        /Error and success massages-->
</div>

</body>