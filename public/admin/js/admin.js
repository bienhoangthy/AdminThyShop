function confirm_delete(msg) {
	if (window.confirm(msg)) {
		return true;
	}
	return false;
};
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

$(document).ajaxStart(function() { Pace.restart(); });
    $('.ajax').click(function(){
    	var id = $(this).attr("idCate");
        $.ajax({url: '/admin/category/delete', type: 'GET', cache: false, data: {"id":id}, success: function(result){
            if (result == "ok") {$("#"+id).remove();} else {alert('Oops! Errors');}
        }});
    });
