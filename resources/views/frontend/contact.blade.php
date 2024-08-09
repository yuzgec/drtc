@extends('frontend.layout.app')
@section('content')
<section class="page-header page-header-modern bg-color-grey page-header-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="text-color-dark font-weight-bold">İletişim</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-flex justify-content-md-end text-3-5">
                    <li><a href="{{ route('home')}}" class="text-color-default text-color-hover-primary text-decoration-none">Anasayfa</a></li>
                    <li class="active">İletişim</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container py-4 my-5">
    <div class="row align-items-center">
        <div class="col-lg-5 col-xl-4 offset-xl-1 mb-5 mb-lg-0">
            <div class="overflow-hidden">
                <h2 class="text-color-dark font-weight-bold line-height-3 text-5-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">{{ config('settings.adres1')}}</h2>
            </div>
        
            <ul class="list list-unstyled text-color-dark font-weight-bold text-4 py-2 my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
                <li class="d-flex align-items-center mb-2">
                    <i class="icons icon-envelope text-color-dark me-2"></i>
                    Email: <a href="mailto:{{ config('settings.email1')}}" class="text-color-dark text-color-hover-primary text-decoration-none ms-1">{{ config('settings.email1')}}</a>
                </li>
                <li class="d-flex align-items-center mb-0">
                    <i class="icons icon-phone text-color-dark me-2"></i>
                    Telefon: <a href="tel:1234567890" class="text-color-dark text-color-hover-primary text-decoration-none ms-1">{{ config('settings.telefon1')}}</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-6 col-xl-5 offset-lg-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250">
            @include('frontend.layout.form')

        </div>
    </div>
</div>

    

<section class="section bg-transparent position-relative border-0 z-index-1 m-0 p-0">

    <svg class="custom-svg-3" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 193 495">
        <path fill="#1C5FA8" d="M193,25.73L18.95,247.93c-13.62,17.39-10.57,42.54,6.82,56.16L193,435.09V25.73z"/>
        <path fill="none" stroke="#FFF" stroke-width="1.5" stroke-miterlimit="10" d="M196,53.54L22.68,297.08c-12.81,18-8.6,42.98,9.4,55.79L196,469.53V53.54z"/>
    </svg>
</section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12051.880828869356!2d29.079998!3d40.9602315!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac78db35e1a1f%3A0x699dde364fd9f9f0!2sDr.%20Turan%20%C3%87etin%20psikiyatrist-psikoterapist!5e0!3m2!1str!2str!4v1692983961360!5m2!1str!2str" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection
