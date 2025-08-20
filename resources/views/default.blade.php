@extends('layouts.all')

@section('main')
    <x-header-all></x-header-all>
    <x-page-header :title="$page->title"  :banner="$page->banner"></x-page-header>
@endsection

