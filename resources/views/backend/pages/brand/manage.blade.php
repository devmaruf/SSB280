@extends('backend.layout.template')
@section('body')

<div class="br-pagetitle">
  <i class="icon ion-ios-home-outline"></i>
  <div>
    <h4>Manage Brands</h4>
    <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
  </div>
</div>

<div class="br-pagebody">
  <div class="row row-sm">
    <div class="col-sm-12 col-xl-12">
        <div class="br-section-wrapper">
			<h6 class="br-section-label">Basic Table</h6>
			<p class="br-section-text">Using the most basic table markup.</p>

			<div class="bd rounded table-responsive">
				<table class="table table-bordered table-striped table-hover mg-b-0">
				  <thead class="thead-colored thead-dark">
				    <tr>
				      <th>SL</th>
				      <th>IMAGE</th>
				      <th>NAME</th>
				      <th>SLUG</th>
				      <th>DESCRIPTION</th>
				      <th>FEATURED</th>
				      <th>STATUS</th>
				      <th>ACTION</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@php $i=1; @endphp
				  	@foreach ( $brands as $brand )
					    <tr>
					      <th scope="row">{{ $i }}</th>
					      <td>
					      	@if(!is_null($brand->image))
					      		<img src="{{ asset('Backend/img/brand/') }}{{ $brand->image }}" alt="">
					      	@else
					      		No Image Found
					      	@endif
					      </td>
					      <td>{{ $brand->name  }}</td>
					      <td>{{ $brand->slug  }}</td>
					      <td>{{ $brand->description  }}</td>
					      <td>
					      	@if( $brand->is_featured == 1)
					      		<span class="badge badge-primary">Featured</span>
					      	@else
					      		<span class="badge badge-primary">Normal</span>
					      	@endif
					      </td>
					      <td>
					      	@if( $brand->status == 1)
					      		<span class="badge badge-primary">Active</span>
					      	@elseif( $brand->status == 2)
					      		<span class="badge badge-primary">Inactive</span>
					      	@else
					      		<span class="badge badge-danger">Pending</span>
					      	@endif

					      </td>
					      <td>
					      	<a href="{{ route('brand.edit', $brand->id ) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
					      	<a href="{{ route('brand.destroy', $brand->id ) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
					      </td>
					    </tr>
					@php $i++; @endphp    
				    @endforeach
				  </tbody>
				</table>
			</div>
  		</div>
    </div>
  </div>
</div>


@endsection