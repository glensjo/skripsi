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

				<!-- update user data form with post method-->
				<form method="post" action="process">
				@csrf
					
					<!-- show user id with input type hidden -->
					<div class="form-group">
						<input type="hidden" class="form-control" name="id" value="{{ $dtuser->id }}" readonly>
					</div>

					<!-- show name with short text recalled from database based on user id -->
					<div class="form-group">
						<label class="font-weight-bold">Name</label>
						<input type="text" class="form-control" name="name" value="<?=(old('name')=='')? $dtuser->name : old('name')?>" required>
					</div>

					<!-- show address with short text recalled from database based on user id -->
					<div class="form-group">
						<label class="font-weight-bold">Email</label>
						<input type="text" class="form-control" name="email" value="<?=(old('email')=='')? $dtuser->email : old('email')?>" required>
					</div>

					<!-- show change password with password (optional) -->
					<div class="form-group">
						<label class="font-weight-bold">Change Password</label>
						<input type="password" class="form-control" name="password" placeholder="Enter new password">
					</div>
					
					<!-- button -->
					<div class="form-row">						
						<div class="form-group col-lg-4">
								<button type="submit" class="form-control btn btn-primary"><span class="fa-solid fa-check-double"></span>  Update</button>	
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