@extends('layouts.filter')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/gardenerList.css') }}">
@endsection

@section('nav-search')
<form action="/store" method="GET" class="nav-item search-bar" id="search-form">
    <input class="search-input" type="text" name="name" placeholder="Search Gardener Name...">
    <button id="search-icon"><i class="fa fa-search"></i></button>
</form>
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
            <?php 
                $name = $segment;
                $href = $i == 0 ? "/" : "/" . $segment; 
            ?>
            <a href="{{$href}}" class="custom-breadcrumb-item">{{$name}}</a>
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

<div class="pagination-container" style="justify-content:flex-end;">
    {{ $gardeners->links() }}
</div>

@foreach ($gardeners as $gardener)
<a class="gardener-card shadow" href="/gardener/{{$gardener->id}}">
    <div class="pict-container">
        <img src="{{ asset($gardener->image) }}" alt="portfolio" onerror="this.onerror=null;this.src='{{ asset('images/people.png') }}';">
    </div>
    <div class="detail-container">
        <div class="name line-clamp-1">{{$gardener->name}}</div>
        <div class="h-line"></div>
        <div class="detail">
            <div class="left">
                <div class="top">{{$gardener->likes}}%</div>
                <div class="bottom">Likes</div>
            </div>
            <div class="center">
                <div class="top">{{$gardener->competence->name}}</div>
                <div class="bottom">Competence</div>
            </div>
            <div class="right">
                <div class="top">{{$gardener->experience}} Years</div>
                <div class="bottom">Experience</div>
            </div>
        </div>
        <div class="price">Rp {{ number_format( $gardener->price_per_day , 0, ".", ".") }}/Day</div>
    </div>
    <div class="portfolio-container">
        <img src="{{ asset($gardener->gardenerPortofolios[0]->image) }}" alt="portfolio" onerror="this.onerror=null;this.src='{{ asset('images/placeholder.jpg') }}';">
    </div>
</a>
@endforeach
@endsection