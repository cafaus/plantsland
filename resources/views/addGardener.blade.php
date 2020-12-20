@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/addGardener.css') }}">
@endsection

@section('content')
<div class="custom-container">
	<div class="container">
		<div class="title"> Add New Gardener </div>
        <form class="mt-2" action="/add/gardener" enctype="multipart/form-data" method="post">
            @csrf
			<div class="img-preview-container" style="display:none;">
                <img alt="image-preview" id="img-preview" class="img-preview">
            </div>

			@error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @if (session('success'))
        		<div class="alert alert-success"> {{ session('success') }} </div>
    		@endif
            <div class="image-inp-container">
                <div class="label">Browse Photos: </div>
                <input type="file" name="image" accept="image/*" onchange="loadFile(event)">
            </div>


			<div class="form-group">
				<label>Name</label>
                <input 
                    id="name" 
                    name="name" 
                    type="text" 
                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" 
                    placeholder="Name">
				@if ($errors->has('name'))
                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                @endif
			</div>
			
			<div class="form-row">
				<div class="form-group col-md-3">
					<label id="slider-value">Likes: 50%</label>
                    <div class="range form-control {{ $errors->has('like') ? 'is-invalid' : '' }}">
                        <input 
                            id="like" 
                            name="like"
                            type="range" 
                            class="form-range" 
                            min="0" max="100"
                            value="{{ old('like') ?? 50 }}"
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
                        value="{{ old('experience') ?? '1' }}"
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
                        value="{{ old('price') ?? '50000' }}"
                    />
                    @if ($errors->has('price'))
					    <div class="invalid-feedback">{{ $errors->first('price') }}</div>
                    @endif
				</div>
			</div>
            

            <table class="table table-bordered" id="portfolios-table" style="display:none;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Portfolios</th>
                    </tr>
                </thead>
                <tbody id="portfolios-images">
                    
                </tbody>
            </table>

			@error('portfolios')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="image-inp-container">
                <div class="label">Browse Portfolios: </div>
                <input required type="file"  name="portfolios[]" multiple onchange="loadMultipleFile(event)" id="portfolios-input">
            </div>

  			<div class="submit-btn-container mb-5"> 
				<button class="btn">Add New Gardener</button>
			</div>
		</form>
	 </div>
</div>

@endsection

@section('script')
<script>
    function htmlToElement(html) {
		var template = document.createElement('template');
		html = html.trim(); // Never return a text node of whitespace as the result
		template.innerHTML = html;
		return template.content.firstChild;
	}
	const loadFile = function(event) {
		const reader = new FileReader();
		const imgContainer = document.getElementsByClassName('img-preview-container')[0];
		imgContainer.style.display = 'none';

		reader.onload = function() {
			var output = document.getElementById('img-preview');
			output.src = reader.result;
		};
		reader.readAsDataURL(event.target.files[0]);
	};

    const loadMultipleFile = function( event ) {
        const reader = new FileReader();
        const portfoliosContainer = document.getElementById('portfolios-images');
        if ( portfoliosContainer.hasChildNodes() ) portfoliosContainer.innerHTML = "";
        const files = event.srcElement.files;
        let i = 1;
        Array.from(files).forEach((file) => {
            const imgId = `portfolio-image-${i}`;
            const img = htmlToElement(`
                <tr>
                    <td>${i}</td>
                    <td> 
                        <img style="height:200px; width:200px; object-fit:cover;" id="${imgId}" />
                    </td>
                </tr>
            `);
            var reader = new FileReader();
            reader.onloadend = function () {
                document.getElementById(imgId).src = reader.result;
            }
            reader.readAsDataURL(file);
            document.getElementById('portfolios-table').style.display = "table";
            portfoliosContainer.append( img );
            i++;
        });
    }

</script>
<script type="text/javascript">
	function showSliderValue(val) {
        document.getElementById('slider-value').innerHTML = `Likes: ${val}%`; 
    }
</script>
@endsection