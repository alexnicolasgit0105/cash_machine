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
            <h5 class="card-title text-center mb-5 fw-light fs-5">Credit Card</h5>
						<form method="POST" action="">
							{{ csrf_field() }}
							<input type="hidden" name="CreditCard" value="1">
							<div class="form-group">
						    <label for="name">Card No</label>
						    <input type="number" class="form-control" name="card_no" placeholder="Card No" value="{{old('card_no')}}">
						  </div>
							<div class="form-group">
						    <label for="name">Exp date</label>
						    <input type="date" class="form-control" name="exp_date" placeholder="Exp Date" value="{{old('exp_date')}}">
						  </div>
						  <div class="form-group">
						    <label for="name">Holder</label>
						    <input type="text" class="form-control" name="holder" placeholder="Card Holder" value="{{old('holder')}}">
						  </div>
							<div class="form-group">
						    <label for="name">CVV</label>
						    <input type="number" class="form-control" name="cvv" placeholder="CVV" value="{{old('cvv')}}">
						  </div>
						  <div class="form-group">
						    <label for="name">Amount</label>
						    <input type="number" class="form-control" name="amount" placeholder="Amount" value="{{old('amount')}}">
						  </div>
						  <button type="submit" class="btn btn-primary">Submit</button>
						</form>
        </div>
        </div>
      </div>
    </div>
</div>
@stop
