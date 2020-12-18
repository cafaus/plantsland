@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endsection

@section('content')
<div class="main-container">
    <img src="{{asset('images/placeholder.jpg')}}" alt="main-background">
    <div class="main-content">
        <div class="text">Find your <br> Best Garderner</div>
        <a class="btn" href="/gardener">Garderner</a>
    </div>
</div>

<div class="custom-container pt-4 pb-5">
    <div class="title mb-3">Top Sales Plants</div>
    <div class="d-flex flex-wrap justify-content-center">
        @for ($i = 0; $i < 10; $i++)
            <a href="{{ "/store/plantname" }}" class="plant-card shadow m-2">
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
</div>
@endsection
