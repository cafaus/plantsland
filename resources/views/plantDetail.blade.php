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
        $links[count($links)-1] = $plant->name;
    ?>

    @if (count($links) > 1)
        @foreach($links as $segment)
            <?php 
                $name = $segment;
                $href = $i == 0 ? "/" : "/" . $segment; 
                if ( $i == count($links)-1 ) $href = $segment;
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

@section('content')
<div class="custom-container">
    @if ($errors->has('quantity'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('quantity') }}</strong>
        </span>
    @endif
    @if (session('alert'))
        <div class="alert alert-danger"> {{ session('alert') }} </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success"> {{ session('success') }} </div>
    @endif

    <div class="content-wrapper">
        <div class="img-container">
            <img src="{{ asset($plant->image) }}" alt="plantname" onerror="this.onerror=null;this.src='{{ asset('images/placeholder.jpg') }}';">
        </div>
        <div class="plant-detail-container">
            <div class="plant-name line-clamp-1">{{$plant->name}}</div>
            <div class="h-line"></div>
            <div class="plant-desc">
                {{$plant->description}}
            </div>
            <div class="plant-detail">
                <div class="plant-height">
                    <div class="detail-text">Height</div>
                    <div class="detail-value">± {{$plant->height}} cm</div>
                </div>
                <div class="v-line"></div>
                <div class="plant-pot">
                    <div class="detail-text line-clamp-1">Pot ∅</div>
                    <div class="detail-value line-clamp-1">{{$plant->pot_size}} cm</div>
                </div>
                <div class="v-line"></div>
                <div class="plant-type">
                    <div class="detail-text">Type</div>
                    <div class="detail-value">{{$plant->plantCategory->name}}</div>
                </div>
                <div class="v-line"></div>
                <div class="plant-stock">
                    <div class="detail-text">Stock</div>
                    <div class="detail-value">{{$plant->stock}}</div>
                </div>
            </div>
            
            
            <div class="plant-footer">
                <div class="price">Rp{{ number_format( $plant->price , 0, ".", ".") }}</div>

                @can('isAdmin')
                    <div class="admin-action-container">
                    
                        <form action="" class="mr-2">   
                            <button class="btn action-update"> Update </button>
                        </form>
                        
                        <form action="/plant/{{$plant->id}}" enctype="multipart/form-data" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn action-delete"> Delete </button>
                        </form>
                        
                    </div>
                @endcan

                @can('isMember')
                    <form action="/plantCart/{{$plant->id}}" class="add-cart-container" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="qty-wrapper">
                            <div class="icon-container" id="minus">
                                <span class="fa fa-minus"></span>
                            </div>
                            
                            <input id="quantity"
                            type="number"
                            class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}"
                            name="quantity"
                            value="{{ old('quantity') ?? 1}}"
                            placeholder=""
                            autocomplete="quantity" autofocus>
                            
                            <div class="icon-container" id="plus">
                                <span class="fa fa-plus"></span>
                            </div>
                        </div>
                    
                        <button class="btn" type="submit">Add To Cart</button>
                    </form>
                @endcan

            </div>
        </div>
       
    </div>

    <div class="h-scroller">
        <div class="sm-image-container">
            <img src="{{ asset($plant->image) }}" alt="image-name" onerror="this.onerror=null;this.src='{{ asset('images/placeholder.jpg') }}';">
        </div>
    </div>

    <div class="h-line-grey"></div>

    <div class="origin-container"> 
        <div class="title">Origin</div>
        <p>{{$plant->plantOrigin->description}}</p>
        
    </div>

    <div class="h-line-grey"></div>
</div>


<div class="custom-container">
    <div class="title">Care</div>
    <div class="care-list-container">
        <div class="img-container">
            <img src="{{ asset('images/placeholder.jpg' )}}" alt="plantname" onerror="this.onerror=null;this.src='{{ asset('images/placeholder.jpg') }}';">
        </div>
        <?php 
            $tipsSummary = [
                'Need little water',
                'Likes to be in shade',
                'Strongly air purifying',
                'No nutrition needed',
                'Slightly toxic for animal',
                'Change pot every three year',
            ]
        ?>
        <div class="list-container">
            @foreach ($tipsSummary as $tip)
                <div class="list-item">
                    <div class="list-icon">
                        <img src="{{ asset('images/leaf.png')}}" alt="list-icon" >
                    </div>
                    <div class="list-text">
                        {{$tip}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <?php
        $cares = $plant->plantCares;
    ?>
    <div class="procedures">
        @foreach ($cares as $care )
            <div class="procedure-container">
                <div class="sm-title">{{ $care->care_title }} </div>
                <div class="care-desc">{{ $care->description }} </div>
            </div>
        @endforeach
    </div>
    <div class="h-line"></div>

    
</div>
<div class="custom-container">
    <div class="title">Related Products</div>
    <div class="h-scroller">
        @foreach ($plants as $plant )
            <a href="/store/{{$plant->id}}" class="plant-card shadow m-2">
                <div class="plant-image">
                    <img src="{{ asset($plant->image) }}" alt="plant" onerror="this.onerror=null;this.src='{{ asset('images/placeholder.jpg') }}';">
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

</div>
<div class="blank-footer"></div>

@endsection

@section('script')
    <script type="text/javascript">
        window.addEventListener('load', qtyFunction);
        function qtyFunction () {
            console.log("loaded");
            const qtyEl = document.getElementById('quantity');
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