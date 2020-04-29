$(document).ready(function(){

	$('.deletebtn').on('click', function(){
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
				
				alert("User Delete")
				location.reload();
				
			},
			error:function(error){
				console.log(error);
			}
		});
	})

})