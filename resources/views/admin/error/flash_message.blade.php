@if (Session::has('flash_message'))
	<div class="alert alert-{{ Session::get('flash_status') }} alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa fa-check"></i> Complete!</h4>
		<ul>
			<li>{{ Session::get('flash_message') }}</li>
		</ul>
	</div>
@endif