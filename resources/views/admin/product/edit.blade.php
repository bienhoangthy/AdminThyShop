@extends('admin.master')
@section('title','Edit Product')
@section('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
<script type="text/javascript" src="{{ asset('admin/js/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/ckfinder/ckfinder.js') }}"></script>
<script type="text/javascript">
    var baseURL = "{{ asset('/') }}";
</script>
<script type="text/javascript" src="{{ asset('admin/js/func_ckfinder.js') }}"></script>
<style type="text/css">
	.img img {
        width: auto; height: 200px; box-shadow: 10px 10px 15px 0px rgba(0,0,0,0.63);
        display: block; margin-right: auto;margin-left: auto;
    }
    .img .icon_del
</style>
@endsection
@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Product
	        <small>Edit</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li>Products</li>
	        <li class="active">Edit Product</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
			<div class="box box-success">
		        <div class="box-header with-border">
		          <h3 class="box-title">Update Product - ID: 5</h3>

		          <div class="box-tools pull-right">
		            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
		          </div>
		        </div>
		        <!-- /.box-header -->
		        <div class="box-body">
		          <div class="row">
		            <div class="col-md-8">
		              <div class="form-group">
		                <label>Category</label>
		                <select class="form-control select2" style="width: 100%;">
		                  <option selected="selected">Alabama</option>
		                  <option>Alaska</option>
		                  <option>California</option>
		                  <option>Delaware</option>
		                  <option>Tennessee</option>
		                  <option>Texas</option>
		                  <option>Washington</option>
		                </select>
		              </div>
		              <div class="form-group">
		                  <label>Product Name</label>
		                  <input type="text" class="form-control" placeholder="Inter Product Name">
		               </div>
		               <div class="form-group">
		                  <label>Slug</label>
		                  <input type="text" class="form-control" placeholder="Inter Slug">
		               </div>
		               <div class="form-group">
		                  <label>Price</label>
		                  <input type="text" class="form-control" placeholder="Enter Price">
		               </div>
		               <div class="form-group">
		                  <label>Quantity</label>
		                  <input type="number" min="0" class="form-control" placeholder="Enter Quantity">
		               </div>
		               <div class="form-group">
		                  <label>Intro</label>
		                  <textarea class="form-control" rows="3" name="txtIntro" placeholder="Enter Introduction"></textarea>
		                  <script type="text/javascript">ckeditor("txtIntro")</script>
		               </div>
		               <div class="form-group">
	                        <label>Current Image: </label>
	                        <div class="img">
	                            <img src="{{ asset('upload/products/nu5.jpg') }}" class="img-responsive">
	                        </div>
	                    </div>
		               <div class="form-group">
		                  <label for="exampleInputFile">Image</label>
		                  <input type="file" id="exampleInputFile">

		                  <p class="help-block">.png, .jpg, ...</p>
		                </div>
		                <div class="form-group">
		                  <label>Keywords</label>
		                  <input type="text" class="form-control" placeholder="Enter Keywords">
		               </div>
		               <div class="form-group">
		                  <label>Description</label>
		                  <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
		                </div>
		               <div class="box-footer">
			                <button type="submit" class="btn btn-primary">Update Product</button>
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
					                  <label for="exampleInputFile">List Current</label>
					                  <div class="box box-warning box-solid">
							            <div class="box-header with-border">
							              <h4 class="box-title">Gallery Image: 1</h4>
							              <div class="box-tools pull-right">
							                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
							              </div>
							            </div>
							            <div class="box-body">
							              <div class="img">
				                            <img src="{{ asset('upload/products/nu5.jpg') }}" class="img-responsive">
				                        	</div>
							            </div>
							          </div>
							          <div class="box box-warning box-solid">
							            <div class="box-header with-border">
							              <h4 class="box-title">Gallery Image: 2</h4>
							              <div class="box-tools pull-right">
							                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
							              </div>
							            </div>
							            <div class="box-body">
							              <div class="img">
				                            <img src="{{ asset('upload/products/nu6.jpg') }}" class="img-responsive">
				                        	</div>
							            </div>
							          </div>
					                  <div class="box-footer">
								        </div>
					                  <a href="javascript:void(0)" id="add_image">
			                                <button type="button" class="btn btn-block btn-success btn-sm">Add Images Gallery</button>
			                            </a>
			                            <div id="insert">
			                            </div>
					                </div>
					            </div>
					            <!-- /.col -->
					          </div>
					          <!-- /.row -->
					        </div>
					        <!-- /.box-body -->
					        <div class="box-footer">
					          <p>***Hình ảnh chi tiết cho sản phẩm, bạn có thể thêm hoặc không!</p>
					          <p class="text-danger">Khi bạn xóa 1 Gallery Image thì sẽ xóa trực tiếp vào cơ sở dữ liệu, mặc dù vẫn chưa Update Product!</p>
					        </div>
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
  $(document).ready(function() {
		$('#add_image').click(function() {
	    	$('#insert').append('<div class="form-group"><label>Choose Images</label><input type="file" name="fEditDetail[]" /></div>');
	    });
	});
</script>
@endsection