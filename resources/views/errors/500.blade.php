@extends('layouts.illustratedLayout')

@section('code', '500 😭')

@section('title', __('Page Not Found'))

@section('image')

<div style="height:400px;" style="background-image: url('/img/about.jpg');" class="absolute pin bg-no-repeat md:bg-left lg:bg-center">
</div>

@endsection

@section('message', __('Sorry, the page you are looking for could not be found.'))