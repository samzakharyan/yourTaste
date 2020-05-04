$(document).ready(function(){
	
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	
	$('.deletebtn').click(function(){
		var id = $(this).closest('tr').children('td').first().text();	
		var url = $(this).data('url');
		$.ajax({
			url: url,
			method: 'post',
			data: {id:'id', reason: 'check'},
			success: function (response)
			{
				$('.result').text(response.msg);

				$('.delete-user').on('click', function () {
					$.ajax({
						url: url,
						method: 'post',
						data: {id:'id', reason: 'delete'},
						success: function (response)
						{
							if (response.fail) {
								$('.result-success').text(response.msg);
								
							} else {
								$('.result-success').text(response.msg);
								setTimeout(function(){  location.reload();},3000)
							}	
						}
					});	
				});	
			},
			error: function (argument) {
				alert()
			}
		});
	});

});