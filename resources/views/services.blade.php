@extends('layouts.all')

@section('main')
    <x-header-all></x-header-all>
    <x-page-header title="Услуги" ></x-page-header>

    <section class="services_section_page">
        <div class="container">
            <x-services-in-main></x-services-in-main>
        </div>
    </section>
@endsection

