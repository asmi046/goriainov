@extends('layouts.all')

@section('main')
    <x-header-all></x-header-all>
    <x-page-header :title="$page->title"  :banner="$page->banner"></x-page-header>

    <section class="text_page">
        <div class="container text_styles">
            {!! $page->description !!}
        </div>
    </section>
@endsection

