$(document).ready(function(){
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$('.deletebtn').click(function() {
		let id = $(this).closest('tr').children('td').first().text();	
		let url = $(this).data('url');
		$.ajax({
			url: url,
			method: 'post',
			data: {id:'id', reason: 'check'},
			success: function (response)
			{   
				let clone = $(".modal-button").clone();
				let clone1 = $(".modal-button").clone();

				$('.modal-title').text('Delete  User')
				$('.modal-body').text(response.msg)
				
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
							if (response.fail) {	
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

//Image Upload
		$("#photo").change(function(event) {  
			readURL(this);    
		});

		function readURL(input) {    
		    if (input.files && input.files[0]) {  

		    	let reader = new FileReader();
		    	let filename = $("#photo").val();
                filename = input.files[0]['name'].substring(input.files[0]['name'].lastIndexOf('.') + 1).toLowerCase();
		    	if(filename == "gif" || filename == "png" || filename == "jpeg" || filename == "jpg") {
		    	reader.onload = function(e) {     
		    		$('#preview').attr('src', e.target.result);
		    		$('#preview').hide();
		    		$('#preview').fadeIn(500);               
		    	}

		    	reader.readAsDataURL(input.files[0]); 
		       }
		       else {
		        swal("Error!", 'You can select only png, gif, jpeg, jpg quality files', "error");
		       }   
		    } 
        }

		$('.div-text').click(function() {
	        $('.name').css({display:'block'});
	        $('.image-name').css({display:'none'});
	        $('.image').css({display:'none'});
	        $('.div-text').css({background:'#007BFF'});
	        $('.div-image').css({background:'#89898C'});
        })

        $('.div-image').click(function() {
           	$('.name').css({display:'none'});
	        $('.image-name').show();
	        $('.image').css({display:'block'});
        	$('.div-image').css({background:'#007BFF'});
        	$('.div-text').css({background:'#89898C'});
        })
})

        
