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
        <div class="cart-item cart-shadow mb-3">
            <div class="cart-image">
                <img src="{{ asset($plantCart->plant->image) }}" onerror="this.onerror=null;this.src='{{ asset('images/placeholder.jpg') }}';" alt="plant">
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
                <div class="value">{{ number_format( $price , 0, ".", ".") }}</div>
            </div>
           
            <div class="cart-action-btn-container">
                <form class="cart-edit-container" action="/plantCart/{{$plantCart->id}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('PATCH')
                    <input id="quantity"
                          type="number"
                          class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}"
                          name="quantity"
                          value="{{ old('quantity') }}"
                          placeholder=""
                          autocomplete="quantity" autofocus>
                    @if ($errors->has('quantity'))
                          <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('quantity') }}</strong>
                          </span>
                    @endif
                    @if (session('alert'))
                        <div class="alert alert-danger">
                              {{ session('alert') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <button class="cart-action-btn" type="submit">
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
        <div class="cart-item cart-shadow mb-3">
            <div class="cart-image">
                <img src="{{ asset($gardenerCart->gardener->image) }}" onerror="this.onerror=null;this.src='{{ asset('images/people.png') }}';" alt="plant">
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
                <div class="value">{{ number_format( $price , 0, ".", ".") }}</div>
            </div>
           
            <div class="cart-action-btn-container">
                
                <form class="cart-edit-container" action="/gardenerCart/{{$gardenerCart->id}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('PATCH')
                    <input id="rentDays"
                          type="number"
                          class="form-control{{ $errors->has('rentDays') ? ' is-invalid' : '' }}"
                          name="rentDays"
                          value="{{ old('rentDays') }}"
                          placeholder=""
                          autocomplete="rentDays" autofocus>
                    @if ($errors->has('rentDays'))
                          <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('rentDays') }}</strong>
                          </span>
                    @endif
                    @if (session('alert'))
                        <div class="alert alert-danger">
                              {{ session('alert') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <button class="cart-action-btn" type="submit">
                            <i class="fa fa-edit"></i>
                        </button>
                    
                </form>
                
                <form action="/gardenerCart/{{$gardenerCart->id}}" method="post">
                    @csrf
                    @method("DELETE")
                    <button class="cart-action-btn">
                        <i class="fa fa-trash-alt"></i>
                    </button>
                </form>
            </div>
        </div>
    @endforeach
    @if (count($plantCarts) != 0 && count($gardenerCarts) != 0)
        <form action="/cart/checkout" class="checkout-btn-container mt-2 mb-5" enctype="multipart/form-data" method="get"> 
            @csrf
            <button class="btn checkout-btn"> Checkout </button>
        </form>
        
    @endif
    @if (session('alert'))
        <div class="alert alert-danger"> {{ session('alert') }} </div>
        @endif
    @if (session('success'))
       <div class="alert alert-success"> {{ session('success') }} </div>
    @endif

</div>

@endsection
