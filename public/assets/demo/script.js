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
								alert(response.msg);
							} else {
								alert(response.msg);
								location.reload();
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