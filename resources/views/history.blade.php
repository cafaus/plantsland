@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/history.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection

@section('content')

<div class="custom-container">
    <div class="title">History</div>
    <div>Currently there is no transaction history</div>
    @for ($i = 1; $i <= 2; $i++)
        <div class="history-item mb-5"> 
            <div class="history-date"> 12 December 2020 </div>
            @for ($j = 0; $j < $i+2; $j++)
                <div class="cart-item">
                    <div class="cart-image">
                        <img src="{{ asset('images/plant.jpg') }}" alt="plant" onerror="this.onerror=null;this.src='{{ asset('images/placeholder.jpg') }}';">
                    </div>
                    <div class="cart-name line-clamp-1">Cycus Revoluta Cycus</div>
                    <div class="cart-qty">
                        <div class="text">Qty</div>
                        <div class="value">1</div>
                    </div>
                    <div class="cart-price">
                        <div class="text">Price</div>
                        <div class="value">50.000.000</div>
                    </div>
                </div>
            @endfor
            <div class="h-line"></div>
            <div class="history-total">
                Total Price : 200.000.000
            </div>
        </div>
    @endfor
</div>

<div class="history-footer"></div>
@endsection
