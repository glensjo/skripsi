@extends('layouts.admin')
	@section('content')
		
		<!-- body -->
		<div class="row justify-content-center align-items-center">
			<div class="col-md-6 col-sm-12 bg-white p-4">

				<!-- message failed with if -->
				@if($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $item)
						<li>{{ $item }}</li>
						@endforeach
					</ul>
				</div>
				@endif

				<!-- create product form with post method-->
				<form method="post" action="process" enctype="multipart/form-data">
				@csrf

					<div class="form-row">

						<!-- input product code with short text -->
						<div class="form-group col-md-6">
							<label class="font-weight-bold">Products Code</label>
							<input type="text" class="form-control" name="product_code" placeholder="Enter Products Code" value="{{old('product_code')}}" required>
						</div>

						<!-- input name with short text -->
						<div class="form-group col-md-6">
							<label class="font-weight-bold">Name</label>
							<input type="text" class="form-control" name="product_name" placeholder="Enter Products Name" value="{{old('product_name')}}" required>
						</div>
					</div>
					
					<!-- input products photo with file -->
					<div class="form-group">
						<label class="font-weight-bold">Products Photo</label>
						<input type="file" class="form-control" name="photo" accept=".jpg, .jpeg, .png" required>
					</div>
					
					<div class="form-row">

						<!-- input category with radio button -->
						<div class="form-group col-md-6">
							<label class="font-weight-bold">Category</label><br>
							<div class="form-check-inline">
								<input type="radio" class="form-check-input" name="category" value="Convection" required <?= (old('category')=='Convection')?'checked':'' ?>>Convection
							</div>
							<div class="form-check-inline">
								<input type="radio" class="form-check-input" name="category" value="Merchandise" <?= (old('category')=='Merchandise')?'checked':'' ?>>Merchandise
							</div>
							<div class="form-check-inline">
								<input type="radio" class="form-check-input" name="category" value="Printing" <?= (old('category')=='Printing')?'checked':'' ?>>Printing
							</div>
						</div>

						<!-- input price with number -->
						<div class="form-group col-md-6">
							<label class="font-weight-bold">Price</label>
							<input type="number" class="form-control" name="price" placeholder="Enter Products Price" value="{{old('price')}}" required>
						</div>
					</div>

					<!-- input description with textarea -->
					<div class="form-group">
						<label class="font-weight-bold">Description</label>
						<textarea class="form-control" name="product_desc" rows="3" placeholder="Enter Products Description" required>{{old('product_desc')}}</textarea>
					</div>

					<!-- button -->
					<div class="form-row">							
						<div class="form-group col-lg-4">
							<button type="submit" class="form-control btn btn-primary"><span class="fa-solid fa-plus"></span>  Create</button>	
						</div>							
						<div class="form-group col-lg-4">
							<a href="/product"><button type="button" class="form-control btn btn-danger"><span class="fa-solid fa-ban"></span>  Cancel</button></a>
						</div>
					</div>					
				</form>
			</div>
		</div>
   @endsection