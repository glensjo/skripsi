@extends('layouts.guest')
	@section('content')
	
	<br><br><br><br><br><br>
	<section id="catalog" style="position: relative;">
        <div class="separator"></div>
        <div class="container-fluid">
            <div class="col-md-12 text-center">
                <h3 class="section-title wow fadeInUp">{{ $dtpr->product_name }}</h3>
                <p class="subheading wow fadeInUp">{{ $dtpr->product_code}}</span>.</p>
            </div>
            <div id="grid-container-fullwidth" class="cbp-l-grid-fullScreen">
			<div class="col-lg-4">
				<img src="{{ url('/photo products/'.$dtpr->photo) }}" class="img-fluid rounded-circle" width="450"><br>
			</div>
			<div class="col-lg-6">
				<div>
					<h4>General Info</h4>
					<table class="table">
						<tr>
							<td class="font-weight-bold" width="25%"><h6>Category</h6></td>
							<td>{{ $dtpr->category }}</td>
						</tr>	
						<tr>
							<td class="font-weight-bold" width="25%"><h6>Price</h6></td>
							<td>{{ $dtpr->price }}</td>
						</tr>
						<tr>
							<td class="font-weight-bold" width="25%"><h6>Description</h6></td>
							<td align="justify">{{ $dtpr->product_desc }}</td>
						</tr>
					</table>
					<a href="/cart/{{ $dtpr->product_code }}"><button type="button" class="form-control btn btn-danger"><span class="fa-solid fa-ban"></span>  Add to Cart</button></a>
				</div>
			</div> 
            </div>            
        </div>
    </section>	
   @endsection