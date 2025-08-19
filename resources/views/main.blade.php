@extends('layouts.all')

@php
    $title = "Адвокат Дмитрий Горяинов";
    $description = "Адвокат Дмитрий Горяинов - правовая защита грвждан";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

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

<section class="about left_line">
    <div class="container">
        <div class="about_main">
            {{-- <div class="photo">
                <img src="{{ asset('img/about.jpg') }}" alt="{{ config('contacts.sitename') }}">
            </div> --}}
            <div class="text text_styles">
                <h2>Дмитрий Горяинов</h2>
                <h3>Адвокат</h3>
                <p>Я осуществляю свою деятельность в г. Курске и Курской области. При необходимости выезжаю и в другие города РФ или оказываю юридическую помощь дистанционно.</p>
                <p>В 2011 году окончил Курский институт социального образования (филиал Российского Государственного социального университета) по специальности «Юриспруденция».</p>
                <p>С 2011 года работал по специальности в НО «Арбитражная коллегия адвокатов» и КА «Истина» Адвокатской палаты Курской области.</p>
                <p>В 2014 году сдал квалификационный экзамен на присвоение статуса адвоката.</p>
                <p>Регулярно занимаюсь самообразованием и прохожу курсы повышения квалификации, организуемые Федеральной палатой адвокатов Российской Федерации</p>
                <p>C начала карьеры преимущественно осуществляю защиту прав и законных интересов доверителей в арбитражных спорах - корпоративных,  гражданско-правовых и делах о банкротстве.</p>
                <p>Более 10 лет я занимаюсь юридической защитой прав и законных интересов доверителей.</p>
            </div>
        </div>
    </div>
</section>

<section class="steps left_line">
    <div class="container">
        <h2 class="h2_with_line">Как я работаю:</h2>
        <div class="steps_wrapper">
            <div class="step">
                <div class="icon"></div>
                <div class="number">
                    <span class="ch">01</span>
                    <p>Звонок</p>
                </div>
                <div class="caption text_styles">
                    Позвоните и запишитесь на бесплатную консультацию. Со мной можно также связаться с помощью электронной почты, WhatsApp или Telegramm.
                </div>
            </div>

            <div class="step">
                <div class="icon"></div>
                <div class="number">
                    <span class="ch">02</span>
                    <p>Встреча</p>
                </div>
                <div class="caption text_styles">
                    Мы встретимся в удобное для Вас время, оценим Вашу проблему, наметим пути её разрешения и обсудим условия нашего сотрудничества, заключим Соглашение об оказании юридической помощи.
                </div>
            </div>

            <div class="step">
                <div class="icon"></div>
                <div class="number">
                    <span class="ch">03</span>
                    <p>Работа</p>
                </div>
                <div class="caption text_styles">
                    Я приступаю к работе по Вашему делу согласно утвержденной стратегии.
                </div>
            </div>

            <div class="line"></div>
        </div>
    </div>
</section>

<section class="services_section left_line">
    <div class="container">
        <h2 class="h2_with_line">Услуги:</h2>
        <x-services-in-main></x-services-in-main>
    </div>
</section>

<section class="contacts_section">
    <div class="container">
        <div class="icon"></div>
        <h2>Контакты</h2>

        <div class="contacts__info">
            <p class="person">Дмитрий Горяинов</p>
            <a href="tel:+7{{ phone_format(config('contacts.phone')) }}" class="phone">{{ config('contacts.phone') }}</a>
            <div class="social_button">
                <a href="#" class="button button-white">Написать в WhatsApp</a>
                <a href="#" class="button button-white">Написать в Telegram</a>
            </div>

            <a class="mail" href="mailto:dim02061989@yandex.ru">dim02061989@yandex.ru</a>
            <p class="adr">г. Курск ул. Павлуновског д. 48а</p>
        </div>
    </div>
</section>

@endsection

