<!-- cd-->
@extends('dashboard')
@section('user')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">


			<div class="col-12">

			 <div class="box">

				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">

	  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>  
				<th>Artist</th>
				<th>Title</th>
				<th>Duration</th>
				<th>Price</th>
			
			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $value )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $value->artist }}</td>
				<td> {{ $value->title }}</td>	
				<td> {{ $value->duration }}</td>
				<td> {{ $value->price }}</td>

			
				 
			</tr>
			@endforeach
							 
						</tbody>
						<tfoot>
							 
						</tfoot>
					  </table>




					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			       
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>





@endsection
