@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/plantDetail.css') }}">
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

@section('content')
<div class="custom-container">
    <div class="content-wrapper">
        <div class="img-container">
            <img src="{{ asset('images/placeholder.jpg' )}}" alt="plantname">
        </div>
        <div class="plant-detail-container">
            <div class="plant-name line-clamp-1">Sansievieria Cylindrica</div>
            <div class="h-line"></div>
            <div class="plant-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit itaque nihil veniam iure eum! Optio ex doloribus laboriosam dolor dolorem minima nesciunt blanditiis, commodi quisquam expedita maiores, natus aspernatur animi?
            </div>
            <div class="plant-detail">
                <div class="plant-height">
                    <div class="detail-text">Height</div>
                    <div class="detail-value">± 999 cm</div>
                </div>
                <div class="v-line"></div>
                <div class="plant-pot">
                    <div class="detail-text line-clamp-1">Pot ∅</div>
                    <div class="detail-value line-clamp-1">999 cm</div>
                </div>
                <div class="v-line"></div>
                <div class="plant-type">
                    <div class="detail-text">Type</div>
                    <div class="detail-value">sesuatu</div>
                </div>
            </div>
            <div class="plant-footer">
                <div class="price">Rp{{ number_format( 9999999 , 0, ".", ".") }}</div>
                <form class="add-cart-container">
                    <div class="qty-wrapper">
                        <div class="icon-container" id="minus">
                            <span class="fa fa-minus"></span>
                        </div>
                        <input id="qty" type="number" name="qty" value="1">
                        <div class="icon-container" id="plus">
                            <span class="fa fa-plus"></span>
                        </div>
                    </div>
                    <div class="btn">Add To Cart</div>
                </form>
            </div>
        </div>
    </div>

    <div class="image-list-scroller">
        @for ($i = 0; $i < 1 ; $i++)
        <div class="sm-image-container">
            <img src="{{ asset('images/placeholder.jpg') }}" alt="image-name">
        </div>
        @endfor
    </div>

    <div class="h-line-grey"></div>

    
</div>

@endsection

@section('script')
    <script type="text/javascript">
        window.addEventListener('load', qtyFunction);
        function qtyFunction () {
            console.log("loaded");
            const qtyEl = document.getElementById('qty');
            const plusEl = document.getElementById('plus');
            const minusEl = document.getElementById('minus');
            plusEl.onclick = (e) =>  {
                let value = Number(qtyEl.value);
                qtyEl.value = value + 1;
            }
            minusEl.onclick = (e) => {
                let value = Number(qtyEl.value);
                if( value > 1 )
                    qtyEl.value = value - 1;
            }
        }
    </script>
@endsection