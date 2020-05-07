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
				.attr({"data-target": '#Modal',"data-dismiss": 'modal',"data-toggle": 'modal',"aria-label": 'Close' });
				clone1.css('display', 'block');             
				clone1.addClass('btn btn-secondary').text('Close');
				clone1.attr('data-dismiss', 'modal');
				if ($('.modal-button').length === 1 ) {
					$('.modal-footer').append(clone);
					$('.modal-footer').append(clone1); 
				}
				$('.delete-user').on('click', function () {
					$.ajax({
						url: url,
						method: 'post',
						data: {id:'id', reason: 'delete'},
						success: function (response)
						{
							if (response.fail)
							{	
								swal("Error!", response.msg, "success");
								setTimeout(function(){  location.reload();},3000);
							} else {
								swal("Deleted!", response.msg, "success");
								setTimeout(function(){  location.reload();},3000);
							}
						}
					});	
				});	
			},
			
		});
	});
})