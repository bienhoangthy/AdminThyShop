@extends('admin.master')
@section('title','All Users')
@section('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection
@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        User
	        <small>List</small>&nbsp;
	        <a href="#"><button type="button" class="btn btn-success">New User</button></a>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li>Users</li>
	        <li class="active">All Users</li>
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
	                  <th>User Name</th>
	                  <th>Full Name</th>
	                  <th>Role</th>
	                  <th>Actions</th>
	                </tr>
	                </thead>
	                <tbody>
	                <tr>
	                  <td>admin</td>
	                  <td>Hoàng Thy</td>
	                  <td><span class="label label-danger">Super Admin</span></td>
	                  <td>
	                  	<a href="#" data-toggle="tooltip" title="Edit User" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>&nbsp; &nbsp;
	                  	<a href="#" data-toggle="tooltip" title="Delete User" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
	                  </td>
	                </tr>
	                <tr>
	                  <td>thybien</td>
	                  <td>Biện Thy</td>
	                  <td><span class="label label-success">Admin</span></td>
	                  <td>
	                  	<a href="#" data-toggle="tooltip" title="Edit User" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>&nbsp; &nbsp;
	                  	<a href="#" data-toggle="tooltip" title="Delete User" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
	                  </td>
	                </tr>
	                <tr>
	                  <td>hoangthy</td>
	                  <td>Thy Biện</td>
	                  <td><span class="label label-default">Member</span></td>
	                  <td>
	                  	<a href="#" data-toggle="tooltip" title="Edit User" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>&nbsp; &nbsp;
	                  	<a href="#" data-toggle="tooltip" title="Delete User" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
	                  </td>
	                </tr>
	                </tbody>
	                <tfoot>
	                <tr>
	                  <th>User Name</th>
	                  <th>Full Name</th>
	                  <th>Role</th>
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
	                <dd class="text-info">Chỉ Super Admin mới có quyền thêm, xóa, sửa tất cả Users! Các Admin thường chỉ có thể sửa thông tin của chính mình hoặc Member và xem danh sách Users.</dd>
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
<!-- SlimScroll -->
<script src="{{ asset('admin/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
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