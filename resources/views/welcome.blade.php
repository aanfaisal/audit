@extends('layouts.front.main')

@section('title')
    Selamat Datang
@endsection
@section('content')
    <!-- One -->
    <section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
        <div class="content">
            <h1>{{ config('app.name', 'Laravel') }}</h1>
            <p class="major">A (modular, highly tweakable) responsive one-page template designed by.</p>
            <ul class="actions vertical">
                <li><a href="{{ url('login') }}" class="button big wide smooth-scroll-middle">Login</a></li>
            </ul>
        </div>
        <div class="image">
            <img src="images/banner.jpg" alt="" />
        </div>
    </section>
@endsection