@extends('layouts.front.main')

@section('title')
    Selamat Datang
@endsection
@section('content')
    <!-- One -->
    <section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
        <div class="content">
            <h1>{{ config('app.name', 'Laravel') }}</h1>
            <p class="major">Sistem Audit Energi Listrik Gedung</p>
            <p class="major">Studi Kasus : Gedung D Universitas Wahid Hasyim Semarang</p>
            
            <ul class="actions vertical">
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('home') }}" class="button big wide smooth-scroll-middle">Dashboard</a></li>
                    @else
                       <li><a href="{{ url('login') }}" class="button big wide smooth-scroll-middle">Login</a></li>
                    @endauth
                @endif
                
            </ul>
        </div>
        <div class="image">
            <img src="images/banner.jpg" alt="" />
        </div>
    </section>
@endsection