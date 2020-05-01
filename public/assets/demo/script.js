$(document).ready(function(){

	$('.deletebtn').click(function(){
	var id = $(this).closest('tr').children('td').first().text();
	console.log(id);
		
		$.ajax({
			url:"delete/"+id,
			method:'get' ,
			data:{id:'id'},  
			success: function (result)
			{  
				$('.result').html(result)	
			},
		});		
		
		$(document).on('click', '.delete', function(event){
			//let a = $('tbody').find('tr').children('td').eq();
			//console.log(a);
			$.ajax({
				url:"user-delete/"+id,
				method:'get' ,
				data:{id:'id'},  
				success: function (result)
				{  

				// location?.reload()
				},
			});		
		})


	})	

});