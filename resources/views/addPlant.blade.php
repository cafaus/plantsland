@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/addPlant.css') }}">
@endsection

@section('content')
<div class="custom-container">
	<div class="container">
		<div class="title"> Add New Plant </div>
		<form class="mt-2" action="/add/plant" enctype="multipart/form-data" method="post">
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
            <div class="image-inp-container">
                <div class="label">Browse Photos: </div>
				<input type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" id="image" name="image" accept="image/*" onchange="loadFile(event)">
				@if ($errors->has('image'))
					<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('image') }}</strong>
					</span>
				@endif
            </div>


			<div class="form-row">
				<div class="form-group col-md-6">
					<label>Name</label>
					<input id="name"
							type="text"
							class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
							name="name"
							value="{{ old('name') }}"
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
							value="{{ old('price') }}"
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
						   {{ old('description')}}
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
                           value="{{ old('origin') }}"
                           placeholder="Origin"
						   autocomplete="origin" autofocus>
						   {{ old('origin')}}
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
                           value="{{ old('height') }}"
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
                           value="{{ old('pot') }}"
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
                           value="{{ old('stock') }}"
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
				<div class="cares-btn-container"> 
					<button onclick="add(event)"><i class="fa fa-plus"></i></button>
  					<button onclick="remove(event)"><i class="fa fa-minus"></i></button>
				</div>
			</div>
			<div id="cares-container">
				<?php $startId = 0;?>
				<input type="hidden" value="{{$startId}}" id="care_count"  name="care_count">

				<div class="form-row" id="cares-form-{{$startId}}">
					<div class="form-group col-md-4">
						<label>Care Title - {{$startId+1}}</label>
						<input id="care-title-{{$startId}}"
						   type="text"
                           class="form-control{{ $errors->has("care-title-{$startId}") ? ' is-invalid' : '' }}"
                           name="care-title-{{$startId}}"
                           value="{{ old("care-title-{$startId}") }}"
                           placeholder="Need Love"
						   autocomplete="care-title-{{$startId}}" autofocus>

						@if ($errors->has("care-title-{$startId}"))
							<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first("care-title-{$startId}") }}</strong>
							</span>
						@endif
					</div>

					<div class="form-group col-md-8">
						<label>Care Description  - {{$startId+1}}</label>
						<input id="care-desc-{{$startId}}"
						   type="text"
                           class="form-control{{ $errors->has("care-desc-{$startId}") ? ' is-invalid' : '' }}"
                           name="care-desc-{{$startId}}"
                           value="{{ old("care-desc-{$startId}") }}"
                           placeholder="You need to take care this plant with love"
						   autocomplete="care-desc-{{$startId}}" autofocus>

						@if ($errors->has("care-desc-{$startId}"))
							<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first("care-desc-{$startId}") }}</strong>
							</span>
						@endif
					</div>
				</div>
			</div>
  			<div class="submit-btn-container mb-5"> 
				<button class="btn" name="action" value="{{$startId}}">Add Plant</button>
			</div>
		</form>
	 </div>
</div>

@endsection

@section('script')
<script>
	const loadFile = function(event) {
		const reader = new FileReader();
		const imgContainer = document.getElementsByClassName('img-preview-container')[0];
		imgContainer.style.display = 'block';

		reader.onload = function() {
			var output = document.getElementById('img-preview');
			output.src = reader.result;
		};
		reader.readAsDataURL(event.target.files[0]);
	};

</script>
<script type="text/javascript">
	function htmlToElement(html) {
		var template = document.createElement('template');
		html = html.trim(); // Never return a text node of whitespace as the result
		template.innerHTML = html;
		return template.content.firstChild;
	}
	function add(e){
		e.preventDefault();
		const caresContainer = document.getElementById('cares-container');
		const careCountEl = document.getElementById('care_count');
		const nextCount = parseInt(careCountEl.value) + 1;
		const careInput = `
			<div class="form-row" id="cares-form-${nextCount}">
				<div class="form-group col-md-4">
					<label>Care Title - ${nextCount+1}</label>
					<input name="care-title-${nextCount}" type="text" class="form-control" placeholder="Need Love">
				</div>

				<div class="form-group col-md-8">
					<label>Care Description - ${nextCount+1}</label>
					<input name="care-desc-${nextCount}" type="text" class="form-control" placeholder="You need to take care this plant with love">
				</div>
			</div>
		`;
		careCountEl.value = nextCount;
		caresContainer.appendChild(htmlToElement( careInput ));
    }
    function remove(e){
		e.preventDefault();
		const careCountEl = document.getElementById('care_count');
		const currCount = parseInt(careCountEl.value);
		const careForm = document.getElementById(`cares-form-${currCount}`);
		// Start idx from 0;
		if( currCount >= 1 ) {
			careForm.remove();
			careCountEl.value = currCount - 1;
		}
    }
</script>
@endsection