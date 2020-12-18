@extends('layouts.filter')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/storeList.css') }}">
@endsection

@section('breadcrumb')
<div class="custom-breadcrumb">
    <?php 
        $i = 0;
        $links = Request::segments();
        array_unshift($links, 'Home');
    ?>
    @if (count($links) > 1)
        @foreach($links as $segment)
            <a href="{{ $segment }}" class="custom-breadcrumb-item">{{$segment}}</a>
            @if ($i < count($links) - 1)
                <div class="fa fa-angle-right separator"></div>
            @endif  
            <?php $i++ ?>
        @endforeach
    @endif
</div>
@endsection

@section('filter-box')
<div class="filter-box shadow">
    <?php $count = 4 ?>
    @for ($i = 0; $i < $count; $i++)
        <div class="filter-section">
            <div class="f-title line-clamp-1">Experience </div>
            @for ($j = 0; $j < 3; $j++)
                <div class="checkbox-container">
                    <input type="checkbox" >
                    <div class="text line-clamp-1">1 - 5 Years</div>
                </div>
            @endfor
            @if ($i < $count-1)
                <div class="h-line"></div>
            @endif
        </div>
    @endfor
</div>
@endsection

@section('filter-content')
<div class="d-flex flex-wrap justify-content-center">
    @foreach ($plants as $plant)
        <a href="/store/{{$plant->id}}" class="plant-card shadow m-2">
            <div class="plant-image">
                <img src="{{ asset($plant->image) }}" onerror="this.onerror=null;this.src='{{ asset('images/placeholder.jpg') }}';" alt="plant">
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
@endsection