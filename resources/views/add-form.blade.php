@extends('layouts.master')

@section('title','this is testing title')

@section('heading','Add Lead')



@section('content')


	<!-- <form class="form-horizontal" action="#" method="post"> -->
		{!! Form::open(['route' => 'record.testflash', 'class' => 'form-horizontal']) !!}

									<div class="form-group">
										<label for="fname" class="col-sm-2 control-label col-md-offset-3">First Name</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="fname" placeholder="First Name" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" >
											@if ($errors->has('fname'))
											<span class="error-validation">{{ $errors->first('fname') }}</span><br>
											@endif
											
											<span class="example"> * e.g: Waleed Khan</span>
										</div>

									</div>

									<div class="form-group">
										<label for="lname" class="col-sm-2 control-label col-md-offset-3">Last Name</label>
										<div class="col-sm-4">
											<input type="text" name="lname" class="form-control"  placeholder="Last Name" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" required>
											@if ($errors->has('lname'))
											<span class="error-validation">{{ $errors->first('lname') }}</span><br>
											@endif
										</div>
									</div>


									<div class="form-group">
										<label for="email" class="col-sm-2 control-label col-md-offset-3">Email</label>
										<div class="col-sm-4">
											<input type="text" name="email" class="form-control"  placeholder="Email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Invalid email address">
											@if ($errors->has('email'))
											<span class="error-validation">{{ $errors->first('email') }}</span><br>
											@endif
										</div>
									</div>

{{-- 
									<div class="form-group">
										<label for="country" class="col-sm-2 control-label col-md-offset-3">Country</label>

										<div class="col-sm-4">
											<select name="country" class="form-control countries" id="countryId" required="required">
												<option value=""> Select Country </option>
											</select>
										</div>
									</div>


									<div class="form-group">
										<label for="proState" class="col-sm-2 control-label col-md-offset-3">Province / State</label>
										<div class="col-sm-4">
											<select name="state" class="form-control states" id="stateId" required="required">
												<option value="">Select State</option>
											</select>
										</div>
									</div>



									<div class="form-group">
										<label for="city" class="col-sm-2 control-label col-md-offset-3">City</label>
										<div class="col-sm-4">
											<select name="city" class="form-control cities" id="cityId" required="required">
												<option value="">Select City</option>
											</select>
										</div>
									</div> --}}



									<div class="form-group">
										<label for="zipcode" class="col-sm-2 control-label col-md-offset-3">Zip Code</label>
										<div class="col-sm-4">
											<input type="text" name="zipcode" class="form-control"  placeholder="Zip Code" pattern="[0-9]{5}" required>
										</div>
									</div>

									<div class="form-group">
										<label for="zipcode" class="col-sm-2 control-label col-md-offset-3">Address </label>
										<div class="col-sm-4">
											<input type="text" name="address" class="form-control"  placeholder="Address" required>
										</div>
									</div>


									<div class="form-group">
										<label for="phone" class="col-sm-2 control-label col-md-offset-3">Phone #</label>
										<div class="col-sm-4">
											<input type="text" name="phone" class="form-control"  placeholder="Phone Number" required>
										</div>
									</div>

									<div class="form-group">
										<label for="round" class="col-sm-2 control-label col-md-offset-3">Round</label>
										<div class="col-sm-4">
											<input type="text" name="round" class="form-control" pattern="[0-9]{1,2}" required>
										</div>
									</div>

									<div class="form-group">
										<label for="subscribe" class="col-sm-2 control-label col-md-offset-3">Type</label>
										<div class="col-sm-4">
											<select class="form-control" name="type" required>
												<option value="subscribe">Subscribe</option>
												<option value="unsubscribe">Unsubscribe</option>

											</select>
										</div>
									</div>


									<div class="form-group">
										<label for="campaign" class="col-sm-2 control-label col-md-offset-3">Campaign Name</label>
										<div class="col-sm-4">
											<select class="form-control" name="campaign_name" required>
												<option value="Campaign 1">Campaign 1</option>
												<option value="Campaign 2">Campaign 2</option>

											</select>
										</div>
									</div>



									<div class="form-group">
										<label for="phone" class="col-sm-2 control-label col-md-offset-3">Status </label>
										<div class="col-sm-4">
											<input type="checkbox" name="status" data-toggle="toggle">
										</label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12 col-md-offset-5"> 	
										<button type="submit" class="btn btn-default w3ls-button">Submit</button> 					
									</div>				
								</div>				
							</form>


@stop('content')