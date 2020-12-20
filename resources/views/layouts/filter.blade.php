@extends('layouts.app')

@section('extended-styles')
    <link rel="stylesheet" href="{{ asset('css/filter.css') }}">
@endsection

@section('content')
    <div class="custom-container pb-5">
        <div class="content-wrapper">
            {{-- <div class="left">
                <div class="filter-title">@yield('filter-title', 'Filter')</div>
                @yield('filter-box')
            </div> --}}
            <div class="right">
                {{-- <div class="select-input-container">
                    <select class="custom-select" >
                        <option selected>Sort</option>
                        <option value="asc">Asc</option>
                        <option value="desc">Desc</option>
                    </select>
                </div> --}}
                @yield('filter-content')
            </div>
        </div>
    </div>
@endsection
