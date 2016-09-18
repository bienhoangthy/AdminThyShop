@extends('admin.master')
@section('title','All Categories')
@section('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection
@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Category
	        <small>List</small>&nbsp;
	        <a href="{{ route('addcategories') }}"><button type="button" class="btn btn-success">New Category</button></a>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li>Categories</li>
	        <li class="active">All Categories</li>
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
	                  <th>Category Name</th>
	                  <th>Slug</th>
	                  <th>Parent Category</th>
	                  <th>Actions</th>
	                </tr>
	                </thead>
	                <tbody>
	                 <?php $stt = 0 ?>
	                 @foreach ($categories as $item)
	                 	<?php $stt++ ?>
						<tr id="{{ $item->id }}">
		                  <td>{{ $stt }}</td>
		                  <td><a href="{{ route('detailcategory', ['slug'=>$item->slug,'id'=>$item->id]) }}">{{ $item->name }}</a></td>
		                  <td>{{ $item->slug }}</td>
		                  <td>
		                  	<?php $cate_parent = DB::table('categories')->where('id', $item->parent_id)->first(); ?>
							@if (!empty($cate_parent->name))
								{{ $cate_parent->name }}
							@endif
		                  </td>
		                  <td>
		                  	<a href="{{ route('editcategories', $item->id) }}" data-toggle="tooltip" title="Edit Category" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>&nbsp; &nbsp;
		                  	<a href="javascript:void(0)" idCate = "{{ $item->id }}" data-toggle="tooltip" title="Delete Category" onclick="return confirm_delete('Are you sure delete this Category!')" class="btn ajax btn-danger btn-xs"><i class="fa fa-trash"></i></a>
		                  </td>
		                </tr>
	                 @endforeach
	                </tbody>
	                <tfoot>
	                <tr>
	                  <th>#</th>
	                  <th>Category Name</th>
	                  <th>Slug</th>
	                  <th>Parent Category</th>
	                  <th>Actions</th>
	                </tr>
	                </tfoot>
	              </table>
	            </div>
	            <!-- /.box-body -->
	          </div>
	          <!-- /.box -->
	          <div class="box-body">
	              <dl>
	                <dt>Note:</dt>
	                <dd class="text-danger">Lưu ý khi bạn xóa 1 Category thì các sản phẩm thuộc Category này cũng sẽ mất!</dd>
	                <dd class="text-light-blue">Slug là một dãy ký tự chữ thường, không chứa ký tự đặc biệt và được cách nhau bởi một ký tự dấu gạch ngang (-). Để hiển thị liên kết thân thiện thay vì các liên kết mặc định.</dd>
	              </dl>
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
<script src="{{ asset('admin/js/admin.js') }}"></script>
@endsection