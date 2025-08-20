@extends('layouts.all')

@section('main')
    <x-header-all></x-header-all>
    <x-page-header title="Контакты" ></x-page-header>


    <section>
        <div class="container">
            <h3>Адрес</h3>
            <p>{{ config('contacts.address') }}</p>
            <h3>Контактный телефон</h3>
            <p>{{ config('contacts.phone') }}</p>
            <h3>Электронная почта</h3>
            <p>{{ config('contacts.email') }}</p>
            <h3>Как добраться</h3>
            <x-map.map-in-page
                :name="config('contacts.company_name')"
                :geo="config('contacts.geo')"
                :adres="config('contacts.adress')"
                :phone="config('contacts.phone')">
            </x-map.map-in-page>
        </div>
    </section>


@endsection

