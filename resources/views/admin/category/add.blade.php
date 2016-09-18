@extends('admin.master')
@section('title','New Categories')
@section('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection
@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Category
	        <small>Add</small>
	        <a href="{{ route('listcategories') }}"><button type="button" class="btn btn-success">All Categories</button></a>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li>Categories</li>
	        <li class="active">Add Category</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
			<div class="box box-success">
		        <div class="box-header with-border">
		          <h3 class="box-title">New Category</h3>

		          <div class="box-tools pull-right">
		            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
		          </div>
		        </div>
		        <!-- /.box-header -->
		        <div class="box-body">
				  @include('admin.error.errors')
		          <div class="row">
		            <div class="col-md-8">
		            <form action="{{ route('postaddcategories') }}" method="POST">
		            	{{ csrf_field() }}
		            	<div class="form-group">
		                <label>Category Parent</label>
		                <select class="form-control select2" name="sltCate" style="width: 100%;">
		                  <option selected="selected" value="0">None</option>
		                  {!! list_cate($categories) !!}
		                </select>
		              </div>
		              <div class="form-group">
		                  <label>Category Name</label>
		                  <input type="text" class="form-control" name="txtName" placeholder="Inter Category Name">
		               </div>
		               <div class="form-group">
		                  <label>Slug</label>
		                  <input type="text" class="form-control" name="txtSlug" placeholder="Can be added automatically by Category Name">
		               </div>
		               <div class="box-footer">
			                <button type="submit" class="btn btn-primary">Add Category</button>
			            </div>
		            </form>
		              
		              <!-- /.form-group -->
		            </div>
		            <!-- /.col -->
		          </div>
		          <!-- /.row -->
		        </div>
		        <!-- /.box-body -->
		        <div class="box-footer">
		          <dl>
	                <dt>Note:</dt>
	                <dd class="text-light-blue">Slug là một dãy ký tự chữ thường, không chứa ký tự đặc biệt và được cách nhau bởi một ký tự dấu gạch ngang (-). Để hiển thị liên kết thân thiện thay vì các liên kết mặc định.</dd>
	              </dl>
		        </div>
		    </div>
	    </section>
	    <!-- /.content -->
	</div>
@endsection
@section('js')
<!-- Select2 -->
<script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin/plugins/fastclick/fastclick.js') }}"></script>
<script>
  $(function () {
    $(".select2").select2();
  });
</script>
@endsection