@extends('admin.master')
@section('title','New Product')
@section('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
<script type="text/javascript" src="{{ asset('admin/js/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/ckfinder/ckfinder.js') }}"></script>
<script type="text/javascript">
    var baseURL = "{{ asset('/') }}";
</script>
<script type="text/javascript" src="{{ asset('admin/js/func_ckfinder.js') }}"></script>
@endsection
@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Product
	        <small>Add</small>&nbsp;
	        <a href="#"><button type="button" class="btn btn-success">List Products</button></a>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li>Products</li>
	        <li class="active">Add Product</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
			<div class="box box-success">
		        <div class="box-header with-border">
		          <h3 class="box-title">New Product</h3>

		          <div class="box-tools pull-right">
		            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
		          </div>
		        </div>
		        <!-- /.box-header -->
		        <div class="box-body">
		          @include('admin.error.errors')
		          <div class="row">
		            <form method="POST" action="{{ route('postaddproduct') }}" enctype="multipart/form-data">
		              {{ csrf_field() }}
		              	<div class="col-md-8">
			              <div class="form-group">
			                <label>Category</label>
			                <select class="form-control select2" name="sltCate" style="width: 100%;">
			                  <option value="">Please Choose Category</option>
			                  {!! list_cate($categories) !!}
			                </select>
			              </div>
			              <div class="form-group">
			                  <label>Product Name</label>
			                  <input type="text" class="form-control" name="txtName" placeholder="Inter Product Name" value="{{ old('txtName') }}">
			               </div>
			               <div class="form-group">
			                  <label>Price</label>
			                  <input type="text" class="form-control" name="txtPrice" placeholder="Enter Price" value="{{ old('txtPrice') }}">
			               </div>
			               <div class="form-group">
			                  <label>Quantity</label>
			                  <input type="number" min="0" class="form-control" name="txtQty" placeholder="Enter Quantity" value="{{ old('txtQty') }}">
			               </div>
			               <div class="form-group">
			                  <label>Intro</label>
			                  <textarea class="form-control" rows="3" name="txtIntro" placeholder="Enter Introduction">{{ old('txtIntro') }}</textarea>
			                  <script type="text/javascript">ckeditor("txtIntro")</script>
			               </div>
			               <div class="form-group">
			                  <label for="exampleInputFile">Image</label>
			                  <input type="file" name="fImage" id="exampleInputFile">

			                  <p class="help-block">.png, .jpg, ...</p>
			                </div>
			                <div class="form-group">
			                  <label>Keywords</label>
			                  <input type="text" class="form-control" name="txtKeywords" placeholder="Enter Keywords" value="{{ old('txtKeywords') }}">
			               </div>
			               <div class="form-group">
			                  <label>Description</label>
			                  <textarea class="form-control" rows="3" name="txtDescription" placeholder="Enter Description">{{ old('txtDescription') }}</textarea>
			                </div>
			               <div class="box-footer">
				                <button type="submit" class="btn btn-primary">Add Product</button>
				            </div>
			              <!-- /.form-group -->
			            </div>
			            <div class="col-md-4">
			            	<div class="box box-warning">
						        <div class="box-header with-border">
						          <h3 class="box-title">Product Gallery</h3>

						          <div class="box-tools pull-right">
						            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
						          </div>
						        </div>
						        <!-- /.box-header -->
						        <div class="box-body">
						          <div class="row">
						            <div class="col-md-12">
						            	<div class="form-group">
						                  <label for="exampleInputFile">Image</label>
						                  <input type="file" id="exampleInputFile" name="fProductDetail[]" style="padding-bottom: 20px;">
						                  <input type="file" id="exampleInputFile" name="fProductDetail[]" style="padding-bottom: 20px;">
						                  <input type="file" id="exampleInputFile" name="fProductDetail[]" style="padding-bottom: 20px;">
						                  <input type="file" id="exampleInputFile" name="fProductDetail[]" style="padding-bottom: 20px;">
						                </div>
						            </div>
						            <!-- /.col -->
						          </div>
						          <!-- /.row -->
						        </div>
						        <!-- /.box-body -->
						        <div class="box-footer">
						          <p>***Hình ảnh chi tiết cho sản phẩm, bạn có thể thêm hoặc không!</p>
						        </div>
						      </div>
			            </div>
		              </form>
		            <!-- /.col -->
		          </div>
		          <!-- /.row -->
		        </div>
		        <!-- /.box-body -->
		        <div class="box-footer">
		          <dl>
	                <dt>Note:</dt>
	                <dd class="text-light-blue">Mặc định Slug sẽ theo tên sản phẩm, bạn có thể thay đổi khi sửa. Slug là một dãy ký tự chữ thường, không chứa ký tự đặc biệt và được cách nhau bởi một ký tự dấu gạch ngang (-). Để hiển thị liên kết thân thiện thay vì các liên kết mặc định.</dd>
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