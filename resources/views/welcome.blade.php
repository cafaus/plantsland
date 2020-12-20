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
    <div class="title mb-3">Types of Plant</div>
    <div class="d-flex flex-wrap justify-content-center">
        @foreach( $plants as $plant )
            <a href="/store?category={{$plant->plantCategory->name}}" class="plant-card shadow m-2">
                <div class="plant-image">
                    <img src="{{ asset($plant->image) }}" alt="plant" onerror="this.onerror=null;this.src='{{ asset('images/placeholder.jpg') }}';">
                </div>
                <div class="plant-content"> 
                    <div class="name">
                        <div class="line-clamp-2">{{$plant->name}}</div>
                    </div>
                    <div class="h-line"></div>
                    <div class="detail">
                        <div class="detail-content">
                            <div class="sub-title line-clamp-1">Height</div>
                            <div class="desc line-clamp-1">± {{$plant->height}} cm</div>
                        </div>
                        <div class="v-line"></div>
                        <div class="detail-content">
                            <div class="sub-title line-clamp-1">Pot ∅</div>
                            <div class="desc line-clamp-1">{{$plant->pot_size}} cm</div>
                        </div>
                    </div>
                    <div class="h-line"></div>
                    <div class="price">Rp {{ number_format( $plant->price , 0, ".", ".") }}</div>
                </div>
            </a>  
        @endforeach
    </div>
</div>
@endsection
