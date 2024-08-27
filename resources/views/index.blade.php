@extends('layouts.all')

@php
    $title = "Адвокат Дмитрий Горяинов";
    $description = "Адвокат Дмитрий Горяинов - правовая защита грвждан";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

<div class="zagl_wrapper">
    <img src="{{ asset('img/logo.svg') }}" alt="{{ $title }}">
</div>

@endsection

