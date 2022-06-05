@extends('layouts.default')
@section('content')
	
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-12 col-lg-12 mx-auto">
	    	@if ($errors->any())
				    <div class="row alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Cash IN</h5>
						<form method="POST" action="">
							{{ csrf_field() }}
							<input type="hidden" name="type" value="cash">
							<div class="form-group">
						    <label for="name">Amount 1</label>
						    <select class="form-control" aria-label="Default select example" name="amount[]" >
								  <option value="0" {{ old('amount.0') == "0" ? 'selected' : '' }}>0</option>
								  <option value="1" {{ old('amount.0') == "1" ? 'selected' : '' }}>1</option>
								  <option value="5" {{ old('amount.0') == "5" ? 'selected' : '' }}>5</option>
								  <option value="10" {{ old('amount.0') == "10" ? 'selected' : '' }}>10</option>
								  <option value="15" {{ old('amount.0') == "15" ? 'selected' : '' }}>15</option>
								  <option value="100"  {{ old('amount.0') == "100" ? 'selected' : '' }}>100</option>
								</select><br>
						    <input type="number" class="form-control" name="quantity[0]" placeholder="Enter quantity" value="{{old('quantity.0')}}">
						  </div>
							<div class="form-group">
						    <label for="name">Amount 1</label>
						    <select class="form-control" aria-label="Default select example" name="amount[]">
								  <option value="0" {{ old('amount.1') == "0" ? 'selected' : '' }}>0</option>
								  <option value="1" {{ old('amount.1') == "1" ? 'selected' : '' }}>1</option>
								  <option value="5" {{ old('amount.1') == "5" ? 'selected' : '' }}>5</option>
								  <option value="10" {{ old('amount.1') == "10" ? 'selected' : '' }}>10</option>
								  <option value="15" {{ old('amount.1') == "15" ? 'selected' : '' }}>15</option>
								  <option value="100"  {{ old('amount.1') == "100" ? 'selected' : '' }}>100</option>
								</select><br>
						    <input type="number" class="form-control" name="quantity[]" placeholder="Enter quantity" value="{{old('quantity.1')}}">
						  </div>
							<div class="form-group">
						    <label for="name">Amount 1</label>
						    <select class="form-control" aria-label="Default select example" name="amount[]">
								  <option value="0" {{ old('amount.2') == "0" ? 'selected' : '' }}>0</option>
								  <option value="1" {{ old('amount.2') == "1" ? 'selected' : '' }}>1</option>
								  <option value="5" {{ old('amount.2') == "5" ? 'selected' : '' }}>5</option>
								  <option value="10" {{ old('amount.2') == "10" ? 'selected' : '' }}>10</option>
								  <option value="15" {{ old('amount.2') == "15" ? 'selected' : '' }}>15</option>
								  <option value="100"  {{ old('amount.2') == "100" ? 'selected' : '' }}>100</option>
								</select><br>
						    <input type="number" class="form-control" name="quantity[]" placeholder="Enter quantity" value="{{old('quantity.2')}}">
						  </div>
							<div class="form-group">
						    <label for="name">Amount 1</label>
						    <select class="form-control" aria-label="Default select example" name="amount[]">
								  <option value="0" {{ old('amount.3') == "0" ? 'selected' : '' }}>0</option>
								  <option value="1" {{ old('amount.3') == "1" ? 'selected' : '' }}>1</option>
								  <option value="5" {{ old('amount.3') == "5" ? 'selected' : '' }}>5</option>
								  <option value="10" {{ old('amount.3') == "10" ? 'selected' : '' }}>10</option>
								  <option value="15" {{ old('amount.3') == "15" ? 'selected' : '' }}>15</option>
								  <option value="100"  {{ old('amount.3') == "100" ? 'selected' : '' }}>100</option>
								</select><br>
						    <input type="number" class="form-control" name="quantity[]" placeholder="Enter quantity" value="{{old('quantity.3')}}">
						  </div>
							<div class="form-group">
						    <label for="name">Amount 1</label>
						    <select class="form-control" aria-label="Default select example" name="amount[]">
								  <option value="0" {{ old('amount.4') == "0" ? 'selected' : '' }}>0</option>
								  <option value="1" {{ old('amount.4') == "1" ? 'selected' : '' }}>1</option>
								  <option value="5" {{ old('amount.4') == "5" ? 'selected' : '' }}>5</option>
								  <option value="10" {{ old('amount.4') == "10" ? 'selected' : '' }}>10</option>
								  <option value="15" {{ old('amount.4') == "15" ? 'selected' : '' }}>15</option>
								  <option value="100"  {{ old('amount.4') == "100" ? 'selected' : '' }}>100</option>
								</select><br>
						    <input type="number" class="form-control" name="quantity[]" placeholder="Enter quantity" value="{{old('quantity.4')}}">
						  </div>
						  <button type="submit" class="btn btn-primary">Submit</button>
						</form>
        </div>
        </div>
      </div>
    </div>
</div>
@stop
