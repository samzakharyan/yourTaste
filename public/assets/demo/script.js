$(document).ready(function(){

	// $(".deleteUser").click(function(){
	// 	let id = $(this).data("id");
	// 	let token = $(this).data("token");

	// 	$.ajax(
	// 	{
	// 		url: "user-delete/"+id,
	// 		type: 'post',
	// 		data: {"id": id,  "_token": token},
	// 		success: function (r)
	// 		{
	// 			console.log(r)
	// 			//location.replace('/users')
	// 		}
	// 	});
	// });

	$('.deletebtn').on('click', function(){
		$('#deleteModal').modal('show');
		$tr=$(this).closest('tr');
		var data =$tr.children('td').map(function(){
			return $(this).text();
		}).get();
		console.log(data);
		$('#delete_id').val(data[0]);
	})

	$('#deleteFormID').on('submit', function(e){
		e.preventDefault();
		var id=$('#delete_id').val()

		$.ajax(
		{
			url: "user-delete/"+id,
			type: 'DELETE',
			data:  $('#deleteFormID').serialize(),
			success: function (r)
			{   console.log(r)
				$('#deleteModal').modal('show');
				alert("User Delete")
				location.reload();
				
			},
			error:function(error){
				console.log(error);
			}
		});
	})

})