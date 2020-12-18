@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/history.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection

@section('content')

<div class="custom-container">
    <div class="title">Transaction History</div>
    @if (count($transactionHistories) == 0)
        <div>Currently there is no transaction history</div>
    @else
        @foreach ($transactionHistories as $transactionHistory)
            <div class="history-item mb-5"> 
                <div class="history-date"> {{$transactionHistory->created_at}} </div>

                <div class="title ml-3">Plant</div>

                @foreach ($transactionHistory->plantTransactionHistories as $plantTransactionHistory)
                    <div class="cart-item">
                        <div class="cart-image">
                            <img src="{{ asset($plantTransactionHistory->image) }}" alt="plant">
                        </div>
                        <div class="cart-name line-clamp-1">{{$plantTransactionHistory->name}}</div>
                        <div class="cart-qty">
                            <div class="text">Qty</div>
                            <div class="value">{{$plantTransactionHistory->quantity}}</div>
                        </div>
                        <div class="cart-price">
                            <div class="text">Price</div>
                            <div class="value">{{ number_format( $plantTransactionHistory->totalPrice , 0, ".", ".") }}</div>
                        </div>
                    </div>
                @endforeach

                <div class="title ml-3">Gardener</div>

                @foreach ($transactionHistory->gardenerTransactionHistories as $gardenerTransactionHistory)
                    <div class="cart-item">
                        <div class="cart-image">
                            <img src="{{ asset($gardenerTransactionHistory->image) }}" alt="gardener">
                        </div>
                        <div class="cart-name line-clamp-1">{{$gardenerTransactionHistory->name}}</div>
                        <div class="cart-qty">
                            <div class="text">Qty</div>
                            <div class="value">{{$gardenerTransactionHistory->rent_days}}</div>
                        </div>
                        <div class="cart-price">
                            <div class="text">Price</div>
                            <div class="value">{{ number_format( $gardenerTransactionHistory->totalPrice , 0, ".", ".") }}</div>
                        </div>
                    </div>
                @endforeach
                <div class="h-line"></div>
                <div class="history-total">
                    Total Price : {{ number_format( $subTotal , 0, ".", ".") }}
                </div>
            </div>
        @endforeach
    @endif
    
    
</div>

<div class="history-footer"></div>
@endsection
