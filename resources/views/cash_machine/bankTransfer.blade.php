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
            <h5 class="card-title text-center mb-5 fw-light fs-5">Bank Transfer</h5>
						<form method="POST" action="">
							{{ csrf_field() }}
							<input type="hidden" name="BankTransfer" value="1">
							<div class="form-group">
						    <label for="name">Transfer date</label>
						    <input type="date" class="form-control" name="tranfer_date" placeholder="Transfer Date" value="{{old('tranfer_date')}}">
						  </div>
						  <div class="form-group">
						    <label for="name">Customer name</label>
						    <input type="text" class="form-control" name="customer" placeholder="Customer name" value="{{old('customer')}}">
						  </div>
							<div class="form-group">
						    <label for="name">Account Number</label>
						    <input type="number" class="form-control" name="acc_no" placeholder="Account Number" value="{{old('acc_no')}}">
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
