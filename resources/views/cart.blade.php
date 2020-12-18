@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection

@section('content')

<div class="custom-container">
    @for ($i = 0; $i < 5; $i++)
        <div class="cart-item">
            <div class="cart-image">
                <img src="{{ asset('images/plant.jpg') }}" alt="plant">
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
            <form action="#">
                <button class="cart-delete-btn">
                    <i class="fa fa-trash-alt"></i>
                </button>
            </form>
        </div>

    @endfor
    

</div>

@endsection
