@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection

@section('content')

<div class="custom-container mt-2">
    <div class="title">Plant Cart</div>
    @if (count($plantCarts) == 0)
        <div>currently there is no item in you plant cart</div>
    
        
    @endif
    @foreach ($plantCarts as $plantCart)
        <div class="cart-item">
            <div class="cart-image">
                <img src="{{ asset($plantCart->plant->image) }}" alt="plant">
            </div>
            <div class="cart-name line-clamp-1">{{$plantCart->plant->name}}</div>
            <div class="cart-qty">
                <div class="text">Qty</div>
                <div class="value">{{$plantCart->quantity}}</div>
            </div>
            @php
                $price = $plantCart->quantity * $plantCart->plant->price;
            @endphp
            <div class="cart-price">
                <div class="text">Price</div>
                <div class="value">{{$price}}</div>
            </div>
           
            <div class="cart-action-btn-container">
                <form action="#" class="cart-edit-container">
                    <input type="number" name="qty" value="1">
                    <button class="cart-action-btn">
                        <i class="fa fa-edit"></i>
                    </button>
                </form>
                <form action="/plantCart/{{$plantCart->id}}" method="post">
                    @csrf
                    @method("DELETE")
                    <button class="cart-action-btn">
                        <i class="fa fa-trash-alt"></i>
                    </button>
                </form>
            </div>
        </div>
    @endforeach


    <div class="title">Gardener Cart</div>
    @if (count($gardenerCarts) == 0)
        <div>currently there is no item in you gardener cart</div>
    
    @endif
    @foreach ($gardenerCarts as $gardenerCart)
        <div class="cart-item">
            <div class="cart-image">
                <img src="{{ asset($gardenerCart->gardener->image) }}" alt="plant">
            </div>
            <div class="cart-name line-clamp-1">{{$gardenerCart->gardener->name}}</div>
            <div class="cart-qty">
                <div class="text">Days</div>
                <div class="value">{{$gardenerCart->rent_days}}</div>
            </div>
            @php
                $price = $gardenerCart->rent_days * $gardenerCart->gardener->price_per_day;
            @endphp
            <div class="cart-price">
                <div class="text">Price</div>
                <div class="value">{{$price}}</div>
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
    @endforeach
    

</div>

@endsection
