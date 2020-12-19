@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/addPlant.css') }}">
@endsection

@section('content')
<div class="custom-container">
	<div class="container">
		<div class="title"> Add New Plant </div>
		<form class="mt-2">
			<div class="img-preview-container" style="display:none;">
                <img alt="image-preview" id="img-preview" class="img-preview">
            </div>
			
			<div class="alert alert-danger"> Error Message </div>
            <div class="image-inp-container">
                <div class="label">Browse Photos: </div>
                <input type="file" name="image" accept="image/*" onchange="loadFile(event)">
            </div>


			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control is-invalid" placeholder="Bekicot Berkodok">
				<div class="invalid-feedback">error</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label>Description</label>
					<textarea class="form-control is-invalid" aria-label="With textarea"></textarea>
					<div class="invalid-feedback">error</div>
				</div>

				<div class="form-group col-md-6">
					<label>Origin</label>
					<textarea class="form-control is-invalid" aria-label="With textarea"></textarea>
					<div class="invalid-feedback">error</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-3">
					<label>Height (cm)</label>
					<input type="number" class="form-control is-invalid" placeholder="120">
					<div class="invalid-feedback">error</div>
				</div>
				<div class="form-group col-md-3">
					<label>Pot (cm)</label>
					<input type="number" class="form-control is-invalid" placeholder="25">
					<div class="invalid-feedback">error</div>
				</div>
				<div class="form-group col-md-3">
					<label>Type</label>
					<select class="form-control is-invalid-select">
						<option value="">Open this select menu</option>
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
					</select>
					<div class="invalid-feedback is-invalid-select-feedback">error</div>
				</div>
				
				<div class="form-group col-md-3">
					<label>Stock</label>
					<input type="number" class="form-control is-invalid" placeholder="Bekicot Berkodok">
					<div class="invalid-feedback is-invalid-select-feedback">error</div>
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
				<input type="hidden" value="{{$startId}}" id="care_count">

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
			</div>
  			<div class="submit-btn-container mb-5"> 
				<button class="btn">Add Plant</button>
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