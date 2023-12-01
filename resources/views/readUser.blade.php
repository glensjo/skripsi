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
		<h1 align="center"> USER DATA </h1><br>

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
			<a href="/user/create/"><button class="btn btn-primary mb-3" id="btn-add"><span class="fa-solid fa-plus"></span>  Add</button></a>
			<table class="table table-responsive table-hover table-stripped">
				<thead>
					<tr class="table-info">
						<th width="10%">No</th>
						<th width="15%">Name</th>
						<th width="15%">Address</th>
						<th width="15%">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($dtuser as $i => $u)
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $u->name }}</td>
							<td>{{ $u->email }}</td>
							<td>
								<a href="/user/update/{{ $u->id }}/"><button class="btn btn-success" id="btn-edit"><span class="fa-solid fa-pen-to-square"></span>  Edit</button></a>
								<a href="/user/delete/{{ $u->id }}"><button class="btn btn-danger" id="btn-delete" onclick="javascript:return confirm('Are you sure to delete this??')"><span class="fa-solid fa-trash-can"></span>  Delete</button></a>								
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
   @endsection