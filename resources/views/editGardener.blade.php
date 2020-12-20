@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/addGardener.css') }}">
@endsection

@section('content')
<div class="custom-container">
	<div class="container">
		<div class="title"> Update Gardener </div>
		<form class="mt-2" action="/gardener/{{$gardener->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
			<div class="form-group">
				<label>Name</label>
				<input 
					id="name"
					name="name"
					type="text" 
					value="{{ old('name') ?? $gardener->name}}"
					class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" 
					placeholder="Bekicot Berkodok">
				@if ($errors->has('name'))
                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                @endif
			</div>
			
			<div class="form-row">
				<div class="form-group col-md-3">
					<label id="slider-value">Likes: {{$gardener->likes}}%</label>
                    <div class="range form-control {{ $errors->has('like') ? 'is-invalid' : '' }}">
						<input 
							id="like"
							name="like"
                            type="range" 
                            class="form-range" 
                            min="0" max="100"
                            value="{{ old('like') ?? $gardener->likes}}"
                            onchange="showSliderValue(this.value);"
                        />
                    </div>
					@if ($errors->has('like'))
                        <div class="invalid-feedback">{{ $errors->first('like') }}</div>
                    @endif
				</div>

				<div class="form-group col-md-3">
					<label>Experience (Year)</label>
					<input 
						id="experience"
						name="experience"
                        type="number" 
                        class="form-control {{ $errors->has('experience') ? 'is-invalid' : ''}}" 
                        placeholder="25"
                        max="70" 
                        value="{{ old('experience') ?? $gardener->experience }}"
                    />
					@if ($errors->has('experience'))
                        <div class="invalid-feedback">{{ $errors->first('experience') }}</div>
                    @endif
				</div>
				
				<div class="form-group col-md-3">
					<label>Competence</label>
					<select 
                        id="competence" 
                        name="competence"  
                        class="form-control {{ $errors->has('competence') ? 'is-invalid-select' : ''}}"
                    >
                        <option value="">Open this select menu</option>
                        @foreach ($competences as $competence)
                        
							<option value="{{ $competence->id }}" > 
								{{ $competence->name }} 
							</option>
						@endforeach
					</select>
                    @if ( $errors->has('competence') )
    					<div class="invalid-feedback is-invalid-select-feedback">{{ $errors->first('competence') }}</div>
                    @endif
				</div>

				<div class="form-group col-md-3">
					<label>Price /Day</label>
					<input 
						id="price" 
                        name="price"  
                        type="number" 
                        class="form-control {{ $errors->has('price') ? 'is-invalid' : ''}}" 
                        name="price"
                        value="{{ old('price') ?? $gardener->price_per_day}}"
                    />
                    @if ($errors->has('price'))
					    <div class="invalid-feedback">{{ $errors->first('price') }}</div>
                    @endif
				</div>
			</div>
            
  			<div class="submit-btn-container mb-5"> 
				<button class="btn">Update Gardener</button>
			</div>
		</form>
	 </div>
</div>

@endsection

@section('script')
	<script type="text/javascript">
		function showSliderValue(val) {
			document.getElementById('slider-value').innerHTML = `Likes: ${val}%`; 
		}
	</script>
@endsection