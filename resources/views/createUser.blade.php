@extends('layouts.admin')
	@section('content')
			
		<!-- body -->
		<div class="row justify-content-center align-items-center">
			<div class="col-md-6 col-sm-12 bg-white p-4">

				<!-- message failed with if -->
				@if($message = Session::get('failed'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<b>{{ $message }}</b>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
				@endif

				<!-- create user form with post method-->
				<form method="post" action="process">
				@csrf
					<div class="col-md-12">
						
						<!-- input name with short text -->
						<div class="form-group">
							<label class="font-weight-bold">Name</label>
							<input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="{{old('name')}}" required>
						</div>

						<!-- input address with textarea -->
						<div class="form-group">
							<label class="font-weight-bold">Email</label>
							<textarea class="form-control" name="email" rows="3" placeholder="Enter Your Email" required>{{old('email')}}</textarea>
						</div>
						
						<div class="form-group">
							<label class="font-weight-bold">Password</label>
							<input type="password" class="form-control" name="password" placeholder="Enter Your Password" value="{{old('password')}}" required>
						</div>	
						
						<!-- button -->
						<div class="form-row">							
							<div class="form-group col-lg-4">
								<button type="submit" class="form-control btn btn-primary"><span class="fa-solid fa-plus"></span>  Add</button>	
							</div>							
							<div class="form-group col-lg-4">
								<a href="/user"><button type="button" class="form-control btn btn-danger"><span class="fa-solid fa-ban"></span>  Cancel</button></a>
							</div>							
						</div>																		
					</div>					
				</form>
			</div>
		</div>
   @endsection