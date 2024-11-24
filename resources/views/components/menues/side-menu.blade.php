<div id="main_side_menue" class="side_menue_wrapper">
    <div class="shadow"></div>
    <nav class="side_menue">
        <a class="menue_logo" href=" {{ route('home') }}">
            <img  src="{{ asset('img/logo.svg') }}" alt="">
        </a>

        <ul>
            <x-menu-puncts></x-menu-puncts>
        </ul>
        <div class="contacts">
            <a href="tel:+7{{ phone_format(config('contacts.phone')) }}" class="phone">{{ config('contacts.phone') }}</a>

            <a class="mail" href="mailto:dim02061989@yandex.ru">dim02061989@yandex.ru</a>
            <p class="adr">г. Курск ул. Павлуновског д. 48а</p>
        </div>
    </nav>
</div>

<div class="show_menue_button">
    <x-burger-icon></x-burger-icon>
</div>

