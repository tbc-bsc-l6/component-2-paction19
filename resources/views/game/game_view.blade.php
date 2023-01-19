<!-- game-->
@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">


			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Games List</h3>
	<a href="{{ route('game.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Game  </a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">

	  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>  
				<th>Developer</th>
				<th>Title</th>
				<th>Pegi</th>
				<th>Price</th>
			
				<th width="20%">Action</th>
			
				
				 
			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $value )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $value->developer }}</td>
				<td> {{ $value->title }}</td>	
				<td> {{ $value->pegi }}</td>
				<td> {{ $value->price }}</td>

			
				<td>
<a title="Edit" href="{{ route('game.edit',$value->id) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>


<a target="_blank" title="Delete" class="btn  btn-danger" id="delete" href="{{ route('game.delete',$value->id)  }}">
	<i class="si-trash si"></i>
</a>




				</td>
				
				 
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
