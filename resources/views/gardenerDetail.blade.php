@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/gardenerDetail.css') }}">
@endsection

@section('content')
<?php $links = ['Home', 'Gardener', $gardener->name]; ?>
<div class="custom-breadcrumb">
    @for ($i = 0; $i < count($links); $i++)
        <a href="#" class="custom-breadcrumb-item">{{ $links[$i] }}</a>
        @if ($i < count($links)-1)
            <div class="fa fa-angle-right separator"></div>
        @endif
    @endfor
</div>

<div class="garderner-profile-container">
    <div class="profile-pict-container"> 
        <img class="profile-pict" src="{{asset($gardener->image)}}" alt="profile-pict">
    </div>
    <div class="main-content">
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
        <div>
            <form action="/cart/{{$gardener->id}}" class="add-cart-container" enctype="multipart/form-data" method="post">
                @csrf
                <div class="qty-wrapper">
                    
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
                      
                    
                </div>
               
                <div class="btn mt-2">Make Appointment</div>
            </form>
            
        </div>
        
    </div>
</div>

<div class="custom-container pt-4 pb-5">
    <div class="title mb-3">Portfolio</div>
    <div class="d-flex flex-wrap justify-content-center"> 
        @foreach ($gardener->gardenerPortofolios as $portofolio)
            <div class="portfolio-wrapper"> <img class="portfolio" src="{{asset($portofolio->image)}}" alt="portfolio"></div>
        @endforeach
    </div>
</div>
@endsection
