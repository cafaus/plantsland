@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/addPlant.css') }}">
@endsection

@section('content')
<div class="custom-container">
	<div class="container">
		<div class="title"> Update Plant </div>
		<form class="mt-2">
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" placeholder="Bekicot Berkodok">
				@if ($errors->has('name'))
                    <div class="invalid-feedback">{{$errors->first('origin')}}</div>
                @endif
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label>Description</label>
					<textarea class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" aria-label="With textarea"></textarea>
					@if ($errors->has('description'))
					    <div class="invalid-feedback">{{$errors->first('origin')}}</div>
                    @endif
				</div>

				<div class="form-group col-md-6">
					<label>Origin</label>
					<textarea class="form-control {{$errors->has('origin') ? 'is-invalid' : ''}}" aria-label="With textarea"></textarea>
					@if ($errors->has('origin'))
					    <div class="invalid-feedback">{{$errors->first('origin')}}</div>
                    @endif
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-3">
					<label>Height (cm)</label>
					<input type="number" class="form-control {{$errors->has('height') ? 'is-invalid' : ''}}" placeholder="120">
					@if ($errors->has('height'))
					    <div class="invalid-feedback">{{$errors->first('height')}}</div>
                    @endif
				</div>
				<div class="form-group col-md-3">
					<label>Pot (cm)</label>
					<input type="number" class="form-control {{$errors->has('pot') ? 'is-invalid' : ''}}" placeholder="25">
                    @if ($errors->has('pot'))
					    <div class="invalid-feedback">{{$errors->first('pot')}}</div>
                    @endif
				</div>
				<div class="form-group col-md-3">
					<label>Type</label>
					<select class="form-control {{ $errors->has('type') ? 'is-invalid-select' : ''}}">
						<option value="">Open this select menu</option>
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
					</select>
                    @if ($errors->has('type'))
                        <div class="invalid-feedback is-invalid-select-feedback">{{$errors->first('stock')}}</div>
                    @endif
					
				</div>
				
				<div class="form-group col-md-3">
					<label>Stock</label>
					<input type="number" class="form-control {{ $errors->has('stock') ? 'is-invalid' : ''}}" placeholder="Bekicot Berkodok">
                    @if ($errors->has('stock'))
					    <div class="invalid-feedback">{{$errors->first('stock')}}</div>
                    @endif
				</div>
			</div>
            
			<div id="cares-container">
                @for ($startId = 0; $startId < 5; $startId++)
                    <div class="form-row" id="cares-form-{{$startId}}">
                        <div class="form-group col-md-4">
                            <label>Care Title - {{$startId+1}}</label>
                            <input name="care-title-{{$startId}}" type="text" class="form-control" placeholder="Need Love">
                        </div>

                        <div class="form-group col-md-8">
                            <label>Care Description  - {{$startId+1}}</label>
                            <input name="care-desc-{{$startId}}" type="text" class="form-control" placeholder="You need to take care this plant with love">
                        </div>
                    </div>
                @endfor
			</div>
  			<div class="submit-btn-container mb-5"> 
				<button class="btn">Update Plant</button>
			</div>
		</form>
	 </div>
</div>

@endsection
