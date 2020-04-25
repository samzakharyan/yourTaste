$(document).ready(function(){

	$(".deleteUser").click(function(){
		var id = $(this).data("id");
		var token = $(this).data("token");
		$('.delete').remove()
		$.ajax(
		{
			url: "user-delete/"+id,
			type: 'post',
			data: {"id": id,  "_token": token},
			success: function (r)
			{
				//location.replace('/users')
			}
		});
	});


})