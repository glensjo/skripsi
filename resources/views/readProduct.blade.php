@extends('layouts.admin')
	@section('content')
		
		<!-- css -->
		<style>
			.table{
				text-align: center;
			}
			#btn-add{
				border-radius: 7%;
			}
			#btn-add:hover{
				background-color: #344558;
				border-radius: 40%;
				transition: all 0.5s ease-in-out;
			}
			#btn-edit{
				border-radius: 10%;				
			}
			#btn-delete{
				border-radius: 10%;
			}
			#btn-edit:hover{
				opacity: 0.7;
				background-color: #344558;
				border-radius: 40%;
				transition: all 0.5s ease-in-out;
			}
			#btn-delete:hover{
				opacity: 0.7;
				background-color: #344558;
				border-radius: 40%;
				transition: all 0.5s ease-in-out;
			}
		</style>

		<!-- body -->
		<h1 align="center"> PRODUCT DATA </h1><br>

		<!-- message success or failed with if-elseif -->
		@if($message = Session::get('success'))
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<b>{{ $message }}</b>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
		@elseif($message = Session::get('failed'))
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<b>{{ $message }}</b>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
		@endif

		<!-- CRUD table -->
		<div class="col-md-12 bg-white p-4">
			<div class="row">
				<div class="col-md-8">
					<a href="/product/create/"><button class="btn btn-primary mb-3" id="btn-add"><span class="fa-solid fa-plus"></span>  Create</button></a>
				</div>
				<div class="col-md-4">
					<form action="/product"  method="get">
						<div class="input-group mb-3">
							<input type="text" class="form-control shadow-sm" placeholder="Search Products" name="keyword" value="<?= (isset($_GET['keyword']))?$_GET['keyword']:''; ?>">
							<div class="input-group-append">
								@if(isset($_GET['keyword']))
									<a class="btn btn-outline-danger shadow-sm" href="\product">&times;</a>
								@else
									<button class="btn btn-outline-primary shadow-sm" type="submit"><span class="fa-solid fa-magnifying-glass"></span></button>
								@endif
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<table class="table table-responsive table-hover table-stripped">
					<thead>
						<tr class="table-info">
							<th width="3%">No</th>
							<th width="5%">Photo</th>
							<th width="10%">Products Code</th>
							<th width="10%">Products Name</th>
							<th width="10%">Category</th>
							<th width="8%">Price</th>
							<th width="15%">Description</th>
							<th width="15%">Action</th>
						</tr>
					</thead>
					<tbody>					
						@foreach ($dtpr as $i => $m)
							<tr>
								<td>{{ ++$i }}</td>
								<td><img src="{{ url('/photo products/'.$m->photo) }}" class="rounded-circle" width="120" height="120"></td>
								<td>{{ $m->product_code }}</td>
								<td>{{ $m->product_name }}</td>
								<td>{{ $m->category }}</td>
								<td>{{ $m->price }}</td>
								<td>{{ $m->product_desc }}</td>								
								<td>
									<a href="/product/update/{{ $m->product_code }}/"><button class="btn btn-success" id="btn-edit"><span class="fa-solid fa-pen-to-square"></span>  Edit</button></a>
									<a href="/product/delete/{{ $m->product_code }}"><button class="btn btn-danger" id="btn-delete" onclick="javascript:return confirm('Are you sure to delete this??')"><span class="fa-solid fa-trash-can"></span>  Delete</button></a>
								</td>
							</tr>
						@endforeach						
					</tbody>
				</table>
			</div>
		</div>		
   @endsection