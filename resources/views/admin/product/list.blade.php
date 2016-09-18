@extends('admin.master')
@section('title','All Products')
@section('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
<style type="text/css">
	.box-body tbody td img {height: 50px;width: auto; display: block;margin-left: auto;margin-right: auto;}
</style>
@endsection
@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Product
	        <small>List</small>&nbsp;
	        <a href="{{ route('addproduct') }}"><button type="button" class="btn btn-success">New Product</button></a>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li>Products</li>
	        <li class="active">All Products</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
		<div class="row">
	        <div class="col-xs-12">
	          <div class="box">
	            <div class="box-header">
	              <h3 class="box-title">All Items</h3>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <table id="example1" class="table table-bordered table-striped table-hover">
	                <thead>
	                <tr>
	                  <th>#</th>
	                  <th>Product Name</th>
	                  <th>Image</th>
	                  <th>Price</th>
	                  <th>Quantity</th>
	                  <th>Category</th>
	                  <th>Date</th>
	                  <th>Actions</th>
	                </tr>
	                </thead>
	                <tbody>
	                	<?php $stt = 0 ?>
	                	@foreach ($products as $item)
	                		<?php $stt++ ?>
							<tr>
			                  <td>{{ $stt }}</td>
			                  <td>{{ $item->name }}</td>
			                  <td><img class="img-responsive" src='{{ asset("upload/products/$item->image") }}'></td>
			                  <td>{{ number_format($item->price,0,',','.') }} vnđ</td>
			                  @if ($item->qty == 0)
			                  	<td><span class="label label-danger">{{ $item->qty }}</span></td>
			                  @else
			                  	<td><span class="label label-success">{{ $item->qty }}</span></td>
			                  @endif
			                  <?php $category = DB::table('categories')->where('id',$item->cate_id)->first(); ?>
			                  @if (isset($category))
			                  	<td>{{ $category->name }}</td>
			                  @endif
			                  <td>{{ $item->created_at->format('d/m/Y') }}</td>
			                  <td>
			                  	<a href="#" data-toggle="tooltip" title="Edit Category" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>&nbsp; &nbsp;
			                  	<a href="#" data-toggle="tooltip" title="Delete Category" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
			                  </td>
			                </tr>
	                	@endforeach
	                </tbody>
	                <tfoot>
	                <tr>
	                  <th>#</th>
	                  <th>Product Name</th>
	                  <th>Image</th>
	                  <th>Price</th>
	                  <th>Quantity</th>
	                  <th>Category</th>
	                  <th>Date</th>
	                  <th>Actions</th>
	                </tr>
	                </tfoot>
	              </table>
	            </div>
	            <!-- /.box-body -->
	          </div>
	        </div>
	        <!-- /.col -->
	      </div>
	     

	    </section>
	    <!-- /.content -->
	</div>
@endsection
@section('js')
<!-- DataTables -->
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin/plugins/fastclick/fastclick.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
  $(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip(); 
  });
</script>
@endsection