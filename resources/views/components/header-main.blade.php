
<header class="main_header">
    <div class="container">
        <div class="top_head">
            <a href="" class="logo">
                <img src="{{ asset('img/logo_top.svg') }}" alt=" {{ config('contacts.sitename') }}">
            </a>

            <nav class="top_menu">
                <ul>
                    <x-menu-puncts></x-menu-puncts>
                </ul>
            </nav>

            <div class="top_contacts">
                <a href="tel:+7{{ phone_format(config('contacts.phone')) }}" class="circl_btn green phone">{{ config('contacts.phone') }}</a>
                <x-social></x-social>
            </div>
        </div>

        <div class="banner_info">
            <div class="text_blk">
                <p>
                    Обеспечиваем
                    <br><span class="white_text">профессиональную
                    <br>защиту</span> Ваших
                    <br>интересов
                    </p>
                <a href="#" class="button button-white ">Получить консультацию</a>
            </div>
            <div class="main_trip">
                <div class="tr t1">
                    <img src="{{ asset('img/main_tp_1.jpg') }}" alt="">
                </div>
                <div class="tr t2">
                    <img src="{{ asset('img/main_tp_2.jpg') }}" alt="">
                </div>
                <div class="tr t3">
                    <img src="{{ asset('img/main_tp_3.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</header>
