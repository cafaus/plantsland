@extends('layouts.filter')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/storeList.css') }}">
@endsection

@section('breadcrumb')
<?php $links = ['Home', 'Store']; ?>
<div class="custom-breadcrumb">
    @for ($i = 0; $i < count($links); $i++)
        <a href="#" class="custom-breadcrumb-item">{{ $links[$i] }}</a>
        @if ($i < count($links)-1)
            <div class="fa fa-angle-right separator"></div>
        @endif
    @endfor
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
<div class="d-flex flex-wrap justify-content-center">
    @for ($i = 0; $i < 10; $i++)
        <a href="{{ "#" }}" class="plant-card shadow m-2">
            <img src="{{ asset('images/plant.jpg') }}" alt="plant">
            <div class="plant-content"> 
                <div class="name line-clamp-2">Bonsai Ficus Ficus Ficus Ficus Ficus Ficus Ficus Ficus</div>
                <div class="h-line"></div>
                <div class="detail">
                    <div class="detail-content">
                        <div class="sub-title line-clamp-1">Height</div>
                        <div class="desc line-clamp-1">± 999 cm</div>
                    </div>
                    <div class="v-line"></div>
                    <div class="detail-content">
                        <div class="sub-title line-clamp-1">Pot ∅</div>
                        <div class="desc line-clamp-1">999 cm</div>
                    </div>
                </div>
                <div class="h-line"></div>
                <div class="price">Rp {{ number_format( 9999999 , 0, ".", ".") }}</div>
            </div>
        </a>  
    @endfor
</div>
@endsection