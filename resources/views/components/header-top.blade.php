<div class="top_head">
    <a href="" class="logo">
        <img src="{{ asset('img/logo_top.svg') }}" alt=" {{ config('contacts.sitename') }}">
    </a>
    <nav class="top_menu">
        <x-menues.puncts></x-menues.puncts>
    </nav>
    <div class="top_contacts">
        <a href="tel:+7{{ phone_format(config('contacts.phone')) }}" class="circl_btn green phone">{{ config('contacts.phone') }}</a>
        <x-social></x-social>
    </div>
</div>
