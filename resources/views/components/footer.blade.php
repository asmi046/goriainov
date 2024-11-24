<footer>
    <div class="container">
        <div class="col">
            <a href="#">
                <img class="logo_footer" src="{{asset('img/logo-white.svg')}}" alt="">

            </a>
            <p class="cr">{{ date("Y")}}© все права защищены</p>
        </div>
        <div class="col">
            <nav class="footer_navigation">
                <ul>
                    <x-menu-puncts></x-menu-puncts>
                </ul>
            </nav>
        </div>
        <div class="col f_contacts">
            <a href="tel:+7{{ phone_format(config('contacts.phone')) }}" class="phone">{{ config('contacts.phone') }}</a>
            <x-social></x-social>

            <a class="mail" href="mailto:dim02061989@yandex.ru">dim02061989@yandex.ru</a>
            <p class="adr">г. Курск ул. Павлуновског д. 48а</p>
        </div>
    </div>
</footer>
