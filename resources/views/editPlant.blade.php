@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/addPlant.css') }}">
@endsection

@section('content')
<div class="custom-container">
	<div class="container">
		<div class="title"> Update New Plant </div>
		<form class="mt-2" action="#" enctype="multipart/form-data" method="post">
			@csrf
			<div class="img-preview-container" style="display:none;">
                <img alt="image-preview" id="img-preview" class="img-preview">
            </div>
			@if (session('alert'))
				<div class="alert alert-danger"> {{ session('alert') }} </div>
			@endif
			@if (session('success'))
        		<div class="alert alert-success"> {{ session('success') }} </div>
    		@endif
            


			<div class="form-row">
				<div class="form-group col-md-6">
					<label>Name</label>
					<input id="name"
							type="text"
							class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
							name="name"
							value="{{ old('name') ?? $plant->name}}"
							placeholder="Name"
							autocomplete="name" autofocus>

					@if ($errors->has('name'))
						<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('name') }}</strong>
						</span>
					@endif
				</div>

				<div class="form-group col-md-6">
					<label>Price</label>
					<input id="price"
							type="number"
							class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
							name="price"
							value="{{ old('price') ?? $plant->price}}"
							placeholder="Price"
							autocomplete="price" autofocus>

					@if ($errors->has('price'))
						<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('price') }}</strong>
						</span>
					@endif
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label>Description</label>
					<textarea id="description"
						   aria-label="With textarea"
                           class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                           name="description"
                           placeholder="Description"
                           autocomplete="description" autofocus>
                           {{ old('description') ?? $plant->description}}
					</textarea>

					@if ($errors->has('description'))
						<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('description') }}</strong>
						</span>
					@endif
					
				</div>

				<div class="form-group col-md-6">
					<label>Origin</label>
					<textarea id="origin"
						   aria-label="With textarea"
                           class="form-control{{ $errors->has('origin') ? ' is-invalid' : '' }}"
                           name="origin"
                           
                           placeholder="Origin"
                           autocomplete="origin" autofocus>
                           {{ old('origin') ?? $plant->plantOrigin->description}}
					</textarea>

					@if ($errors->has('origin'))
						<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('origin') }}</strong>
						</span>
					@endif
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-3">
					<label>Height (cm)</label>
					<input id="height"
							type="number"
                           class="form-control{{ $errors->has('height') ? ' is-invalid' : '' }}"
                           name="height"
                           value="{{ old('height') ?? $plant->height}}"
                           placeholder="Height"
						   autocomplete="height" autofocus>

					@if ($errors->has('height'))
						<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('height') }}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-md-3">
					<label>Pot (cm)</label>
					<input id="pot"
						   type="number"
                           class="form-control{{ $errors->has('pot') ? ' is-invalid' : '' }}"
                           name="pot"
                           value="{{ old('pot') ?? $plant->pot_size}}"
                           placeholder="Pot"
						   autocomplete="pot" autofocus>

					@if ($errors->has('pot'))
						<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('pot') }}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-md-3">
					<label>Type</label>
					<select class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" id="type">
						<option value="">Open this select menu</option>
						@foreach ($plantCatagories as $pc)
							<option value="{{ $pc->id }}" > 
								{{ $pc->name }} 
							</option>
						@endforeach
					</select>
					@if ($errors->has('type'))
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('type') }}</strong>
                    </span>
                	@endif
				</div>
				
				<div class="form-group col-md-3">
					<label>Stock</label>
					<input id="stock"
						   type="number"
                           class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}"
                           name="stock"
                           value="{{ old('stock') ?? $plant->stock }}"
                           placeholder="Stock"
						   autocomplete="stock" autofocus>

					@if ($errors->has('stock'))
						<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('stock') }}</strong>
						</span>
					@endif
				</div>
			</div>
			<div class="cares-top-container"> 
				<div class="sub-title"> Cares </div>
			</div>
			<div id="cares-container">
                @foreach ($plant->plantCares as $pc)
                    <div class="form-row" id="cares-form-{{$loop->index}}">
                        <div class="form-group col-md-4">
                            <label>Care Title - {{$loop->index+1}}</label>
                            <input id="care-title-{{$loop->index}}"
                            type="text"
                            class="form-control{{ $errors->has("care-title-{$loop->index}") ? ' is-invalid' : '' }}"
                            name="care-title-{{$loop->index}}"
                            value="{{ old("care-title-{$loop->index}") ?? $pc->care_title}}"
                            placeholder="Need Love"
                            autocomplete="care-title-{{$loop->index}}" autofocus>

                            @if ($errors->has("care-title-{$loop->index}"))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first("care-title-{$loop->index}") }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-md-8">
                            <label>Care Description  - {{$loop->index+1}}</label>
                            <input id="care-desc-{{$loop->index}}"
                            type="text"
                            class="form-control{{ $errors->has("care-desc-{$loop->index}") ? ' is-invalid' : '' }}"
                            name="care-desc-{{$loop->index}}"
                            value="{{ old("care-desc-{$loop->index}") ?? $pc->description}}"
                            placeholder="You need to take care this plant with love"
                            autocomplete="care-desc-{{$loop->index}}" autofocus>

                            @if ($errors->has("care-desc-{$loop->index}"))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first("care-desc-{$loop->index}") }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                @endforeach
			</div>
  			<div class="submit-btn-container mb-5"> 
				<button class="btn" >Update Plant</button>
			</div>
		</form>
	 </div>
</div>

@endsection

