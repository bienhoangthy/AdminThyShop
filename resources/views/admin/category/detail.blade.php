@extends('admin.master')
@section('title','Category Details')
@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Category
	        <small>Detail</small>&nbsp;
	        <a href="{{ route('listcategories') }}"><button type="button" class="btn btn-success">All Categories</button></a>
	        <a href="{{ route('addcategories') }}"><button type="button" class="btn btn-success">New Category</button></a>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li>Categories</li>
	        <li class="active">Category Details</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="box box-primary">
		            <div class="box-header with-border">
		              <h3 class="box-title">ID: {{ $cate->id }}</h3>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		              @include('admin.error.flash_message')
		              <strong><i class="fa fa-book margin-r-5"></i> Category Name</strong>

		              <h4 class="text-muted">
		              	{{ $cate->name }}
		              </h4>

		              <hr>

		              <strong><i class="fa fa-link margin-r-5"></i> Slug</strong>

		              <h4 class="text-info">{{ url('/') }}/{{ $cate->slug }}_{{ $cate->id }}.html</h4>

		              <hr>

		              <strong><i class="fa fa-code-fork margin-r-5"></i> Parent</strong>

		              <p>
		              	<?php $cate_parent = DB::table('categories')->where('id', $cate->parent_id)->first() ?>
		              	@if (!empty($cate_parent->name))
		              		<h4><span class="label label-info">{{ $cate_parent->name }}</span></h4>
		              	@else
		              		<h4><span class="label label-info">None</span></h4>
						@endif
		              </p>

		              <hr>

		              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

		              <p>This Category have <span class="label label-warning">6</span> products.</p>

		              <hr>

		              <a href="{{ route('editcategories', $cate->id) }}"><button type="button" class="btn btn-success">Edit</button></a>
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
<!-- FastClick -->
<script src="{{ asset('admin/plugins/fastclick/fastclick.js') }}"></script>
@endsection