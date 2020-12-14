@extends('layouts.filter')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/gardenerList.css') }}">
@endsection

@section('breadcrumb')
<?php $segments = ''; ?>
<div class="custom-breadcrumb">
    <?php 
        $i = 0;
        $links = Request::segments();
        array_unshift($links, 'Home');
    ?>
    @if (count($links) > 1)
        @foreach($links as $segment)
            <a href="{{ $segment }}" class="custom-breadcrumb-item">{{$segment}}</a>
            @if ($i < count($links) - 1)
                <div class="fa fa-angle-right separator"></div>
            @endif  
            <?php $i++ ?>
        @endforeach
    @endif
</div>
@endsection

@section('filter-box')
<div class="filter-box shadow">
    <?php $count = 4 ?>
    @for ($i = 0; $i < $count; $i++)
        <div class="filter-section">
            <div class="f-title line-clamp-1">Experience </div>
            @for ($j = 0; $j < 3; $j++)
                <div class="checkbox-container">
                    <input type="checkbox" >
                    <div class="text line-clamp-1">1 - 5 Years</div>
                </div>
            @endfor
            @if ($i < $count-1)
                <div class="h-line"></div>
            @endif
        </div>
    @endfor
</div>
@endsection

@section('filter-content')
@foreach ($gardeners as $gardener)
<a class="gardener-card shadow" href="/gardener/detail">
    <div class="pict-container">
        <img src="{{ asset($gardener->image) }}" alt="portfolio">
    </div>
    <div class="detail-container">
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
    </div>
    <div class="portfolio-container">
        <img src="{{ asset($gardener->gardenerPortofolios->find(1)->image) }}" alt="portfolio">
    </div>
</a>
@endforeach
@endsection