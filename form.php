<?php

?>
<!DOCTYPE html>
<html lang="ru-RU" itemscope itemtype="http://schema.org/WebSite">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="form_style.css">
    <script src="form.js" type="text/javascript"></script>
<!--    ЗДЕСЬ (НИЖЕ) ПОДКЛЮЧАЕТСЯ ШРИФТ!! -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title></title>
</head>

<body>
    <div id="section-infobox-content" class="section-infobox-content">
        <img src="logo-20years.c7a3f31.svg">
        <h1 class="form_title">Добавление интересного места</h1>
        <div class="form_annotation"><div class="orange_point">*</div>- поля, отмеченные этим символом, являются обязательными для заполнения.</div>

<!--        Error and success massages-->
        <div class="form_error">
            <svg version="1.1" id="attention" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 485.811 485.811" style="enable-background:new 0 0 485.811 485.811;" xml:space="preserve">
                    <g>
                        <path d="M476.099,353.968l-170.2-294.8c-27.8-48.7-98.1-48.7-125.8,0l-170.3,294.8c-27.8,48.7,6.8,109.2,62.9,109.2h339.9
                            C468.699,463.168,503.899,402.068,476.099,353.968z M242.899,397.768c-14.8,0-27.1-12.3-27.1-27.1s12.3-27.1,27.1-27.1
                            c14.8,0,27.1,12.3,26.5,27.8C270.099,385.468,257.099,397.768,242.899,397.768z M267.599,222.568c-1.2,21-2.5,41.9-3.7,62.9
                            c-0.6,6.8-0.6,13-0.6,19.7c-0.6,11.1-9.3,19.7-20.4,19.7s-19.7-8-20.4-19.1c-1.8-32.7-3.7-64.8-5.5-97.5
                            c-0.6-8.6-1.2-17.3-1.9-25.9c0-14.2,8-25.9,21-29.6c13-3.1,25.9,3.1,31.5,15.4c1.9,4.3,2.5,8.6,2.5,13.6
                            C269.499,195.468,268.199,209.068,267.599,222.568z"/>
                    </g>
            </svg>
            <p>
                <b>Ошибка:</b> К сожалению, ваша заявка не была отправлена, так как вы заполнили не все обязательные поля формы. Проверьте, пожалуйста E-mail для обратной связи, Название места и его Адрес.
            </p>
        </div>
        <div class="form_success_massage">
            <div class="header">
                Ваш запрос успешно отправлен!

            </div>
            <div class="text">
                <p>Большое спасибо, что помогаете нам сделать карту более подробной.</p>
                <p>Наши модераторы рассмотрят вашу заявку в кратчайшие сроки и добавят её на карту. Вы получите уведомление на указанный e-mail. В случае необходимости мы свяжемся с вами. </p>
                <div class="form_buttons_wrap">
                    <div class="button">Назад на карту</div>
                </div>
            </div>
        </div>
<!--        /Error and success massages-->
<!--        Form -->
        <form class="form">

            <div class="form_field_wrap">
                <div class="form_field_title necessary">E-mail (для обратной связи)</div>
                <input
                        class="form_field necessary"
                        id="user_email"
                        contenteditable="true"
                        type="text"
                        name="user_email"
                        placeholder="E-mail"
                >
            </div>

            <div class="form_field_wrap">
                <div class="form_field_title necessary">Название</div>
                <input
                        class="form_field necessary"
                        id="place_name"
                        contenteditable="true"
                        type="text"
                        name="place_name"
                        placeholder="Название"
                >
            </div>

            <div class="form_field_wrap">
                <div class="form_field_title">Отрасль</div>
                <div class="list_wrap">
                    <input
                            class="form_field"
                            id="place_occupation"
                            contenteditable="false"
                            type="text"
                            name="place_occupation"
                            placeholder="..."
                            onclick="this.closest('.list_wrap').classList.toggle('opened')"
                            readonly
                    >
                    <svg onclick="this.closest('.list_wrap').classList.toggle('opened')" version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="98.148px" height="98.149px" viewBox="0 0 98.148 98.149" style="enable-background:new 0 0 98.148 98.149;"
                         xml:space="preserve">
                        <g>
                            <path d="M97.562,64.692L50.49,17.618c-0.75-0.75-2.078-0.75-2.828,0L0.586,64.693C0.211,65.068,0,65.577,0,66.106
                                c0,0.53,0.211,1.039,0.586,1.414l12.987,12.987c0.391,0.391,0.902,0.586,1.414,0.586c0.512,0,1.023-0.195,1.414-0.586
                                l32.674-32.674L81.75,80.506c0.75,0.751,2.078,0.75,2.828,0l12.984-12.987C98.344,66.739,98.344,65.472,97.562,64.692z"/>
                        </g>
                    </svg>

                    <div class="list">
                        <div class="item" onclick="this.closest('.list_wrap').querySelector('.form_field').value=this.innerText; this.closest('.list_wrap').classList.toggle('opened')">Общепит</div>
                        <div class="item" onclick="this.closest('.list_wrap').querySelector('.form_field').value=this.innerText; this.closest('.list_wrap').classList.toggle('opened')">Магазин</div>
                        <div class="item" onclick="this.closest('.list_wrap').querySelector('.form_field').value=this.innerText; this.closest('.list_wrap').classList.toggle('opened')">Услуги</div>
                    </div>
                </div>
            </div>

            <div class="form_field_wrap">
                <div class="form_field_title">Чем вы занимаетесь?</div>
                <input
                    class="form_field"
                    id="place_occupation"
                    contenteditable="true"
                    type="text"
                    name="place_occupation"
                    placeholder=""
                >
            </div>

            <div class="form_field_wrap">
                <div class="form_field_title">В чем ваши особенности?</div>
                <textarea
                        class="form_field"
                        id="place_description"
                        contenteditable="true"
                        spellcheck="false"
                        name="place_description"
                        placeholder=""
                        maxlength="300"
                        oninput="counter(this)"
                ></textarea>
                <div class="counter">Осталось символов: <div class="number"></div></div>
            </div>

            <div class="form_field_wrap">
                <div class="form_field_title">Скидки и особые условия для соседей</div>
                <textarea
                        class="form_field"
                        id="place_discounts"
                        contenteditable="true"
                        spellcheck="false"
                        name="place_discounts"
                        placeholder=""
                        maxlength="300"
                        oninput="counter(this)"
                ></textarea>
                <div class="counter">Осталось символов: <div class="number"></div></div>
            </div>

            <div class="form_field_wrap load">
                <div class="form_field_title">Загрузите фото</div>
                <input id="uploadphoto" class="form_field" tabindex="7" type="file" name="uploadfiles[]">
            </div>

            <div class="form_field_wrap">
                <div class="form_field_title necessary">Адрес</div>
                <textarea
                        class="form_field necessary"
                        id="place_discounts"
                        contenteditable="true"
                        spellcheck="false"
                        name="place_discounts"
                        placeholder=""
                        maxlength="300"
                        oninput="counter(this)"
                ></textarea>
                <div class="counter">Осталось символов: <div class="number"></div></div>
                <div class="form_field_description">
                    Если есть какие-то особенности адреса (домофон, охрана в бизнес-центре или третий поворот направо во втором дворе в доме напротив памятника Чижику-Пыжыку) - укажите их! Это поможет людям найти вас!
                </div>
            </div>

            <div class="form_field_wrap">
                <div class="form_field_title">Телефон</div>
                <input
                        class="form_field"
                        id="place_phone"
                        contenteditable="true"
                        type="text"
                        name="place_phone"
                        placeholder=""
                >
            </div>
            <div class="form_field_wrap">
                <div class="form_field_title">Сайт</div>
                <input
                        class="form_field"
                        id="place_website"
                        contenteditable="true"
                        type="text"
                        name="place_website"
                        placeholder=""
                >
            </div>
            <div class="form_field_wrap">
                <div class="form_field_title">Группа ВКонтакте</div>
                <input
                        class="form_field"
                        id="place_vk"
                        contenteditable="true"
                        type="text"
                        name="place_vk"
                        placeholder=""
                >
            </div>

            <div class="form_afterword">
                <svg version="1.1" id="attention" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 485.811 485.811" style="enable-background:new 0 0 485.811 485.811;" xml:space="preserve">
                    <g>
                        <path d="M476.099,353.968l-170.2-294.8c-27.8-48.7-98.1-48.7-125.8,0l-170.3,294.8c-27.8,48.7,6.8,109.2,62.9,109.2h339.9
                            C468.699,463.168,503.899,402.068,476.099,353.968z M242.899,397.768c-14.8,0-27.1-12.3-27.1-27.1s12.3-27.1,27.1-27.1
                            c14.8,0,27.1,12.3,26.5,27.8C270.099,385.468,257.099,397.768,242.899,397.768z M267.599,222.568c-1.2,21-2.5,41.9-3.7,62.9
                            c-0.6,6.8-0.6,13-0.6,19.7c-0.6,11.1-9.3,19.7-20.4,19.7s-19.7-8-20.4-19.1c-1.8-32.7-3.7-64.8-5.5-97.5
                            c-0.6-8.6-1.2-17.3-1.9-25.9c0-14.2,8-25.9,21-29.6c13-3.1,25.9,3.1,31.5,15.4c1.9,4.3,2.5,8.6,2.5,13.6
                            C269.499,195.468,268.199,209.068,267.599,222.568z"/>
                    </g>
                </svg>
                К сожалению, мы не можем показать ваше интересное место на карте без проверки. Наши модераторы рассмотрят вашу заявку в кратчайшие сроки и добавят её на карту. Вы получите уведомление на указанный e-mail. В случае необходимости мы свяжемся с вами.
            </div>
            <div class="form_buttons_wrap">
                <div class="button">Назад на карту</div>
                <div class="button" onclick="checkForm(this)">Подать заявку на рассмотрение</div>

            </div>
        </form>
    </div>

</body>