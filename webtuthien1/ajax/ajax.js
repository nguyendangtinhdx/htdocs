$(document).ready(function(){
	$("#idTL").change(function(){
		var id = $(this).val();
		$.get("ajaxLoaiTin.php",{idTL:id},function(data){
			$("#idLT").html(data);
		});
	});
});