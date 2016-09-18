@extends('admin.master')
@section('title','User Detail')
@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        User
	        <small>Info</small>
	        <a href="#"><button type="button" class="btn btn-success">List User</button></a>
	        <a href="#"><button type="button" class="btn btn-success">Edit User</button></a>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li>Users</li>
	        <li class="active">User Detail</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	          <!-- Widget: user widget style 1 -->
	          <div class="box box-widget widget-user">
	            <!-- Add the bg color to the header using any of the bg-* classes -->
	            <div class="widget-user-header bg-black" style="background: url('{{ asset('admin/dist/img/bgdetail1.jpg') }}') center center;">
	              <h3 class="widget-user-username">Biện Hoàng Thy</h3>
	              <h5 class="widget-user-desc">Admin</h5>
	            </div>
	            <div class="widget-user-image">
	              <img class="img-circle" src="{{ asset('admin/dist/img/Thy.jpg') }}" alt="User Avatar">
	            </div>
	            <div class="box-footer no-padding">
	              <ul class="nav nav-stacked">
	                <li><a href="#">User ID <span class="pull-right badge bg-green">12</span></a></li>
	                <li><a href="#">User Name <span class="pull-right badge bg-green">thybien</span></a></li>
	                <li><a href="#">Email <span class="pull-right badge bg-green">bienhoangthy@gmail.com</span></a></li>
	                <li><a href="#">Full Name <span class="pull-right badge bg-green">Biện Hoàng Thy</span></a></li>
	                <li><a href="#">Role <span class="pull-right badge bg-red">Admin</span></a></li>
	              </ul>
	            </div>
	          </div>
	          <!-- /.widget-user -->
	        </div>
	        <!-- /.col -->
	      </div>
	    </section>
	    <!-- /.content -->
	</div>
@endsection
@section('js')
<!-- SlimScroll -->
<script src="{{ asset('admin/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin/plugins/fastclick/fastclick.js') }}"></script>
<script src="{{ asset('admin/plugins/avatar/avatar.js') }}"></script>
<script src="{{ asset('admin/plugins/avatar/resample.js') }}"></script>

@endsection