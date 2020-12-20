@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/gardenerDetail.css') }}">
@endsection

@section('content')
<div class="custom-breadcrumb">
    <?php 
        $i = 0;
        $links = Request::segments();
        array_unshift($links, 'Home');
        $links[count($links)-1] = $gardener->name;
    ?>

    @if (count($links) > 1)
        @foreach($links as $segment)
            <?php 
                $name = $segment;
                $href = $i == 0 ? "/" : "/" . $segment; 
                if ( $i == count($links)-1 ) $href =  '/gardener/' . $gardener->id;
            ?>
            <a href="{{$href}}" class="custom-breadcrumb-item">{{$name}}</a>
            @if ($i < count($links) - 1)
                <div class="fa fa-angle-right separator"></div>
            @endif  
            <?php $i++ ?>
        @endforeach
    @endif

</div>
<div class="custom-container">
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

<div class="gardener-profile-container">
    <div class="profile-pict-container"> 
        <img class="profile-pict" src="{{asset($gardener->image)}}" alt="profile-pict" onerror="this.onerror=null;this.src='{{ asset('images/people.png') }}';">
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
        @can('isAdmin')
            <div class="d-flex">
                <div class="mr-2">   
                    <a href="/edit/gardener/{{$gardener->id}}" class="btn action-update"> Update </a>
                </div>
                        
                <form action="/gardener/{{$gardener->id}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method("DELETE")
                    <button class="btn action-delete"> Delete </button>
                </form>  
            </div>
        @endcan
        @can('isMember')
            <form action="/gardenerCart/{{$gardener->id}}" enctype="multipart/form-data" method="post" class="gardener-cart mt-2">
                @csrf
                <input id="rentDays"
                    type="number"
                    class="{{ $errors->has('rentDays') ? ' is-invalid' : '' }}"
                    name="rentDays"
                    value="{{ old('rentDays') ?? 1}}"
                    placeholder="days"
                    autocomplete="rentDays" autofocus
                >
                <button type="submit" class="btn">Make Appointment</button>
            </form>
        @endcan
    </div>
</div>

<div class="custom-container pt-4 pb-5">
    <div class="title mb-3">Portfolio</div>
    <div class="d-flex flex-wrap justify-content-center"> 
        @foreach ($gardener->gardenerPortofolios as $portofolio)
            <div class="portfolio-wrapper"> 
                <img class="portfolio" src="{{asset($portofolio->image)}}" alt="portfolio" onerror="this.onerror=null;this.src='{{ asset('images/placeholder.jpg') }}';">
            </div>
        @endforeach
    </div>
</div>
@endsection
