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

    <div class="h-scroller">
        @for ($i = 0; $i < 25; $i++)
        <div class="sm-image-container">
            <img src="{{ asset('images/placeholder.jpg') }}" alt="image-name">
        </div>
        @endfor
    </div>

    <div class="h-line-grey"></div>

    <div class="origin-container"> 
        <div class="title">Origin</div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio tempore nemo voluptatibus recusandae iste. Ex itaque eveniet ab suscipit illum exercitationem! Rerum accusantium voluptatem illo ullam rem reprehenderit enim cupiditate?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio tempore nemo voluptatibus recusandae iste. Ex itaque eveniet ab suscipit illum exercitationem! Rerum accusantium voluptatem illo ullam rem reprehenderit enim cupiditate?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio tempore nemo voluptatibus recusandae iste. Ex itaque eveniet ab suscipit illum exercitationem! Rerum accusantium voluptatem illo ullam rem reprehenderit enim cupiditate?</p>
    </div>

    <div class="h-line-grey"></div>
</div>


<div class="custom-container">
    <div class="title">Care</div>
    <div class="care-list-container">
        <div class="img-container">
            <img src="{{ asset('images/placeholder.jpg' )}}" alt="plantname">
        </div>
        <div class="list-container">
            @for ($i = 0; $i < 6; $i++)
                <div class="list-item">
                    <div class="list-icon">
                        <img src="{{ asset('images/leaf.png')}}" alt="list-icon">
                    </div>
                    <div class="list-text">
                        Lorem, ipsum dolor sit amet consectetur
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <?php
        $cares = [
            [
                'title' => 'Temperature',
                'desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus esse eveniet iste debitis ipsa voluptatibus rem totam ex assumenda, reprehenderit atque nesciunt exercitationem quas! Porro ullam omnis deserunt quae ut?'
            ],
            [
                'title' => 'Watering',
                'desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus esse eveniet iste debitis ipsa voluptatibus rem totam ex assumenda, reprehenderit atque nesciunt exercitationem quas! Porro ullam omnis deserunt quae ut? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus esse eveniet iste debitis ipsa voluptatibus rem totam ex assumenda, reprehenderit atque nesciunt exercitationem quas! Porro ullam omnis deserunt quae ut? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus esse eveniet iste debitis ipsa voluptatibus rem totam ex assumenda, reprehenderit atque nesciunt exercitationem quas! Porro ullam omnis deserunt quae ut? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus esse eveniet iste debitis ipsa voluptatibus rem totam ex assumenda, reprehenderit atque nesciunt exercitationem quas! Porro ullam omnis deserunt quae ut?'
            ],
            [
                'title' => 'Prunning',
                'desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus esse eveniet iste debitis ipsa voluptatibus rem totam ex assumenda, reprehenderit atque nesciunt exercitationem quas! Porro ullam omnis deserunt quae ut?'
            ],
            [
                'title' => 'Repotting',
                'desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus esse eveniet iste debitis ipsa voluptatibus rem totam ex assumenda, reprehenderit atque nesciunt exercitationem quas! Porro ullam omnis deserunt quae ut? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus esse eveniet iste debitis ipsa voluptatibus rem totam ex assumenda, reprehenderit atque nesciunt exercitationem quas! Porro ullam omnis deserunt quae ut? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus esse eveniet iste debitis ipsa voluptatibus rem totam ex assumenda, '
            ],
            [
                'title' => 'Nutrition',
                'desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus esse eveniet iste debitis ipsa voluptatibus rem totam ex assumenda'
            ],
        ];
    ?>
    <div class="procedures">
        @foreach ($cares as $care )
            <div class="procedure-container">
                <div class="sm-title">{{ $care['title'] }} </div>
                <div class="care-desc">{{ $care['desc'] }} </div>
            </div>
        @endforeach
    </div>
    <div class="h-line"></div>

    
</div>
<div class="custom-container">
    <div class="title">Related Products</div>
    <div class="h-scroller">
        @for ($i = 0; $i < 10; $i++)
            <a href="/store/plantname" class="plant-card shadow m-2">
                <img src="{{ asset('images/plant.jpg') }}" alt="plant">
                <div class="plant-content"> 
                    <div class="name line-clamp-2">Bonsai Ficus Ficus Ficus Ficus Ficus Ficus Ficus Ficus</div>
                    <div class="h-line"></div>
                    <div class="detail">
                        <div class="detail-content">
                            <div class="sub-title line-clamp-1">Height</div>
                            <div class="desc line-clamp-1">± 999 cm</div>
                        </div>
                        <div class="v-line"></div>
                        <div class="detail-content">
                            <div class="sub-title line-clamp-1">Pot ∅</div>
                            <div class="desc line-clamp-1">999 cm</div>
                        </div>
                    </div>
                    <div class="h-line"></div>
                    <div class="price">Rp {{ number_format( 9999999 , 0, ".", ".") }}</div>
                </div>
            </a>  
        @endfor
    </div>

</div>
<div class="blank-footer"></div>

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