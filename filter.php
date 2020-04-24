<?php
?>


    <!---------------------------------Place type filter------------------------------------>
    <div class="search_wrap" data-value="all" data-name="type">
        <div class="search_button" onclick="openSearch(this);">
            <i class="fa fa-angle-down fa-2x" aria-hidden="true"></i>
            <div class="content">
                <p>Тип</p>
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>
        </div>
        <div class="search_list">
            <div class="item" data-value="food" onclick="chooseItem(this);">
                <i class="fa fa-cutlery" aria-hidden="true"></i>
                <p>Еда</p>
            </div>
            <div class="item subitem" data-value="meat" onclick="chooseItem(this);">
                <i class="fa fa-cutlery" aria-hidden="true"></i>
                <p>Мясо</p>
            </div>
            <div class="item subitem" data-value="fish" onclick="chooseItem(this);">
                <i class="fa fa-cutlery" aria-hidden="true"></i>
                <p>Рыба</p>
            </div>
            <div class="item" data-value="books" onclick="chooseItem(this);">
                <i class="fa fa-book" aria-hidden="true"></i>
                <p>Книги</p>
            </div>
            <div class="item" data-value="services" onclick="chooseItem(this);">
                <i class="fa fa-handshake-o" aria-hidden="true"></i>
                <p>Усуги</p>
            </div>
            <div class="item" onclick="refreshList(this, 'filter');">
                <i class="fa fa-refresh" aria-hidden="true"></i>
                <p>Показать всё</p>
            </div>
        </div>
    </div>
    <!---------------------------------Discount filter------------------------------------>
    <div class="search_wrap" data-value="all" data-name="discount">
        <div class="search_button" onclick="openSearch(this);">
            <i class="fa fa-angle-down fa-2x" aria-hidden="true"></i>
            <div class="content">
                <p>Скидка</p>
                <i class="fa fa-percent" aria-hidden="true"></i>
            </div>
        </div>
        <div class="search_list">
            <div class="item" data-value="15" onclick="chooseItem(this);">
                <i class="fa fa-percent" aria-hidden="true"></i>
                <p>15%</p>
            </div>
            <div class="item" data-value="20" onclick="chooseItem(this);">
                <i class="fa fa-percent" aria-hidden="true"></i>
                <p>20%</p>
            </div>
            <div class="item" data-value="50" onclick="chooseItem(this);">
                <i class="fa fa-percent" aria-hidden="true"></i>
                <p>50%</p>
            </div>
            <div class="item" data-type="discount" onclick="refreshList(this, 'discount');">
                <i class="fa fa-refresh" aria-hidden="true"></i>
                <p>Показать всё</p>
            </div>
        </div>
    </div>

    <!---------------------Submit button--------------->
    <div class="fontanka-button submit_search" onclick="submitFilters(this)";>
        <svg version="1.1" id="check_mark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 17.837 17.837" style="enable-background:new 0 0 17.837 17.837;" xml:space="preserve">
                <g>
                    <path d="M16.145,2.571c-0.272-0.273-0.718-0.273-0.99,0L6.92,10.804l-4.241-4.27
                        c-0.272-0.274-0.715-0.274-0.989,0L0.204,8.019c-0.272,0.271-0.272,0.717,0,0.99l6.217,6.258c0.272,0.271,0.715,0.271,0.99,0
                        L17.63,5.047c0.276-0.273,0.276-0.72,0-0.994L16.145,2.571z"/>
                </g>
                </svg>
    </div>

