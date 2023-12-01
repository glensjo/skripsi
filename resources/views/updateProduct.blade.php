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

				<!-- update product data form with post method-->
				<form method="post" action="process" enctype="multipart/form-data">
				@csrf
				
					<div class="form-row">
						
						<!-- show product code with short text recalled from database -->
						<div class="form-group col-md-6">
							<label class="font-weight-bold">Products Code</label>
							<input type="text" class="form-control" name="product_code" value="{{ $dtpr->product_code }}" readonly>
						</div>

						<!-- show product name with short text recalled from database based on user id -->
						<div class="form-group col-md-6">
							<label class="font-weight-bold">Name</label>
							<input type="text" class="form-control" name="product_name" placeholder="Enter Products Name" value="<?=(old('product_name')=='')? $dtpr->product_name : old('product_name')?>" required>
						</div>
					</div>
					
					<!-- show product photo with short text recalled from database -->
					<div class="form-group">
						<label class="font-weight-bold">Product Photo</label>
						<input type="file" class="form-control" name="photo" accept=".jpg, .jpeg, .png">
					</div>
					
					<div class="form-row">

						<!-- show product category with short text recalled from database -->
						<div class="form-group col-md-6">
							<label class="font-weight-bold">Category</label><br>
							<div class="form-check-inline">
								<input type="radio" class="form-check-input" name="category" value="Convection" required <?= (old('category')=='')?(($dtpr->category=='Convection')?'checked':''):((old('category')=='Convection')?'checked':''); ?>>Convection
							</div>
							<div class="form-check-inline">
								<input type="radio" class="form-check-input" name="category" value="Merchandise" <?= (old('category')=='')?(($dtpr->category=='Merchandise')?'checked':''):((old('category')=='Merchandise')?'checked':''); ?>>Merchandise
							</div>
							<div class="form-check-inline">
								<input type="radio" class="form-check-input" name="category" value="Printing" <?= (old('category')=='')?(($dtpr->category=='Printing')?'checked':''):((old('category')=='Printing')?'checked':''); ?>>Printing
							</div>					
						</div>

						<!-- show product price with short text recalled from database -->
						<div class="form-group col-md-6">
							<label class="font-weight-bold">Price</label>
							<input type="number" class="form-control" name="price" placeholder="Enter Products Price" value="<?=(old('price')=='')? $dtpr->price : old('price')?>" required>
						</div>
					</div>
					
					<!-- show product description with short text recalled from database -->
					<div class="form-group">
						<label class="font-weight-bold">Description</label>
						<textarea class="form-control" name="product_desc" rows="3" placeholder="Enter Products Description" required><?=(old('product_desc')=='')? $dtpr->product_desc : old('product_desc')?></textarea>
					</div>
					
					<!-- button -->
					<div class="form-row">
						<div class="form-group col-lg-4">
							<button type="submit" class="form-control btn btn-primary"><span class="fa-solid fa-check-double"></span>  Update</button>	
						</div>							
						<div class="form-group col-lg-4">
							<a href="/product"><button type="button" class="form-control btn btn-danger"><span class="fa-solid fa-ban"></span>  Cancel</button></a>
						</div>
					</div>
				</form>
			</div>
		</div>
   @endsection