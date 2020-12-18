@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection

@section('content')

<div class="custom-container mt-2">
    <div class="title">Cart</div>
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
            <div class="cart-action-btn-container">
                <form action="#" class="cart-edit-container">
                    <input type="number" name="qty" value="1">
                    <button class="cart-action-btn">
                        <i class="fa fa-edit"></i>
                    </button>
                </form>
                <form action="#">
                    <button class="cart-action-btn">
                        <i class="fa fa-trash-alt"></i>
                    </button>
                </form>
            </div>
        </div>

    @endfor
    

</div>

@endsection
