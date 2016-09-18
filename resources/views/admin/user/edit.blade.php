@extends('admin.master')
@section('title','Edit User')
@section('css')
	<style type="text/css">
		.profile-avatar-wrap {
			border: 5px dashed lightblue;
  			/*z-index: 9999;*/
  			width: 25%;
			float: left;
			margin: 0 20px 5px 0;
			position: relative;
			pointer-events: none;
			border: 5px solid transparent;
		}
		.profile-avatar-wrap:after {
		  /* Drag Prevention */
		  content: "";
		  position: absolute;
		  top: 0;
		  left: 0;
		  width: 100%;
		  height: 100%;
		}
		.profile-avatar-wrap img {
		  width: 100%;
		  display: block;
		}
		.upload {
			padding-top: 8px;
		}
	</style>
@endsection
@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        User
	        <small>Edit</small>
	        <a href="#"><button type="button" class="btn btn-success">List User</button></a>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li>Users</li>
	        <li class="active">Edit User</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
			<div class="box box-success">
		        <div class="box-header with-border">
		          <h3 class="box-title">Edit User ID: 2</h3>

		          <div class="box-tools pull-right">
		            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
		          </div>
		        </div>
		        <div class="box-body">
		          <div class="row">
		            <div class="col-md-6">
		              <div class="form-group">
		                  <label>User Name</label>
		                  <input type="text" class="form-control" placeholder="Inter User Name" disabled value="bienthy">
		               </div>
		               <div class="box box-warning collapsed-box">
				            <div class="box-header with-border">
				              <h3 class="box-title">Change Password <i class="fa fa-hand-o-right"></i></h3>

				              <div class="box-tools pull-right">
				                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
				                </button>
				              </div>
				            </div>
				            <div class="box-body">
				              <div class="form-group">
				                  <label>New Password</label>
				                  <input type="password" class="form-control" placeholder="Enter Password">
				               </div>
				               <div class="form-group">
				                  <label>Re-New Password</label>
				                  <input type="password" class="form-control" placeholder="Enter Re-Password">
				               </div>
				            </div>
				        </div>
		               <div class="form-group">
		                  <label>Email</label>
		                  <input type="email" class="form-control" placeholder="Enter Email" value='bienhoangthy@gmail.com'>
		               </div>

		              <!-- /.form-group -->
		            </div>
		            <!-- /.col -->
		            <div class="col-md-6">
		              <div class="form-group">
		                  <label>Full Name</label>
		                  <input type="text" class="form-control" placeholder="Enter Full Name"  value="Biện Hoàng Thy">
		               </div>
		               <div class="form-group">
		               	 	<p style="margin-bottom: -8px;"><label>Role</label></p>
		                  	<label class="radio-inline"><input type="radio" checked name="optradio">Admin</label>
							<label class="radio-inline"><input type="radio" name="optradio">Member</label>
		                </div>
		              <div class="profile-avatar-wrap">
		              	<label>Avatar</label>
						<img src="{{ asset('upload/avatar.png') }}" id="profile-avatar" alt="Image for Profile">
					  </div>
					  <div class="form-group upload">
		                  <label for="exampleInputFile">Image</label>
		                  <input type="file" id="uploader">
		              </div>
			         </div>
			         <div class="col-md-12">
			         	<button type="submit" class="btn btn-primary">Update User</button>
			         </div>
		            </div>
		            <!-- /.col -->
		          </div>
		          <!-- /.row -->
		        </div>
		        <!-- /.box-body -->
		        <div class="box-footer">
		          <dl>
	                <dt>Note:</dt>
	                <dd class="text-light-blue">Bạn có thể thay đổi Avatar hoặc dùng Avatar mặc định!</dd>
	                <dd class="text-danger">Chỉ có Super Admin mới có toàn quyền thêm, xóa, sửa Users. Các Admin thường chỉ thay đổi thông tin của chính mình hoặc của các Member.</dd>
	              </dl>
		        </div>
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