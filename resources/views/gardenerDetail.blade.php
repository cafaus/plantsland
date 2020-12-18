@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/gardenerDetail.css') }}">
@endsection

@section('content')
<?php $links = ['Home', 'Gardener', $gardener->name]; ?>
<div class="custom-breadcrumb">
    @for ($i = 0; $i < count($links); $i++)
        <a href="#" class="custom-breadcrumb-item">{{ $links[$i] }}</a>
        @if ($i < count($links)-1)
            <div class="fa fa-angle-right separator"></div>
        @endif
    @endfor
</div>

<div class="garderner-profile-container">
    <div class="profile-pict-container"> 
        <img class="profile-pict" src="{{asset($gardener->image)}}" alt="profile-pict">
    </div>
    <div class="main-content">
        <div class="name line-clamp-1">{{$gardener->name}}</div>
        <div class="h-line"></div>
        <div class="detail">
            <div class="left">
                <div class="top">{{$gardener->likes}}%</div>
                <div class="bottom">Likes</div>
            </div>
            <div class="right">
                <div class="top">{{$gardener->experience}} Years</div>
                <div class="bottom">Experience</div>
            </div>
        </div>
        <div class="price">Rp {{ number_format( $gardener->price_per_day , 0, ".", ".") }}/Day</div>
        <div class="btn mt-2">Make Appointment</div>
    </div>
</div>

<div class="custom-container pt-4 pb-5">
    <div class="title mb-3">Portfolio</div>
    <div class="d-flex flex-wrap justify-content-center"> 
        @foreach ($gardener->gardenerPortofolios as $portofolio)
            <div class="portfolio-wrapper"> <img class="portfolio" src="{{asset($portofolio->image)}}" alt="portfolio"></div>
        @endforeach
    </div>
</div>
@endsection
