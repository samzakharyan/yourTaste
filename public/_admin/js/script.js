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
				$('.modal-title').text('Delete  User')
				$('.modal-body').text(response.msg)

				var clone = $(".modal-button").clone();
				var clone1 = $(".modal-button").clone();

				clone.css('display', 'block');
				clone.addClass('delete-user btn btn-danger').text('Yes. Delete')
				.attr({"data-target": '#exampleModal',"data-dismiss": 'modal',"data-toggle": 'modal',"aria-label": 'Close' });

				clone1.css('display', 'block');             
				clone1.addClass('btn btn-secondary').text('Close');
				clone1.attr('data-dismiss', 'modal');
				if ($('.modal-button').length === 1 ) {
					$('.modal-footer').append(clone);
					$('.modal-footer').append(clone1);
				}
				$('.delete-user').on('click', function () {
					$('.modal-button').hide()
					$.ajax({
						url: url,
						method: 'post',
						data: {id:'id', reason: 'delete'},
						success: function (response)
						{
							if (response.fail) {
								$('#exampleModal').modal({show:true});
								$('.modal-title').text('Deleted user')
								$('.modal-body').text(response.msg)

							} else {
								$('#exampleModal').modal({show:true});
								$('.modal-title').text('Deleted user')
								$('.modal-body').text(response.msg)
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