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


// Image Upload
		// $("#photo").change(function(event) {  
		// 	readURL(this);    
		// });

		// function readURL(input) {    
		//     if (input.files && input.files[0]) {  

		//     	let reader = new FileReader();
		//     	let filename = $("#photo").val();
  //               filename = input.files[0]['name'].substring(input.files[0]['name'].lastIndexOf('.') + 1).toLowerCase();
		//     	if(filename == "gif" || filename == "png" || filename == "jpeg" || filename == "jpg") {
		//     	reader.onload = function(e) {     
		//     		$('#preview').attr('src', e.target.result);
		//     		$('#preview').hide();
		//     		$('#preview').fadeIn(500);               
		//     	}

		//     	reader.readAsDataURL(input.files[0]); 
		//        }
		//        else {
		//         swal("Error!", 'You can select only png, gif, jpeg, jpg quality files', "error");
		//        }   
		//     } 
  //       }



  //       $("#favicon").change(function(event) {  
		// 	readURL(this);    
		// });

		// function readURL(input) {    
		//     if (input.files && input.files[0]) {  
		//     	let reader = new FileReader();
		//     	let filename = $("#favicon").val();
  //               filename = input.files[0]['name'].substring(input.files[0]['name'].lastIndexOf('.') + 1).toLowerCase();
		//     	if(filename == "gif" || filename == "png" || filename == "jpeg" || filename == "jpg") {
		//     	reader.onload = function(e) {     
		//     		$('#preview').attr('src', e.target.result);
		//     		$('#preview').hide();
		//     		$('#preview').fadeIn(500);               
		//     	}
		//     	reader.readAsDataURL(input.files[0]); 
		//        }
		//        else{
		//         swal("Error!", 'You can select only png, gif, jpeg, jpg quality files', "error");
		//        }   
		//     } 
  //       }

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

        $('#photo').change(function(evt) {
               var files = evt.target.files;
               var file = files[0];
               if (file) {
                   var reader = new FileReader();
                   reader.onload = function(e) {
                       document.getElementById('preview').src = e.target.result;
                   };
                   reader.readAsDataURL(file);
               } 
        })   
})

        function ResizeImage() {
            if (window.File && window.FileReader && window.FileList && window.Blob) {
                var filesToUploads = document.getElementById('photo').files;
                var file = filesToUploads[0];
                if (file) {
                    var reader = new FileReader();
                    // Set the image once loaded into file reader
                    reader.onload = function(e) {
        
                        var img = document.createElement("img");
                        img.src = e.target.result;
        
                        var canvas = document.createElement("canvas");
                        var ctx = canvas.getContext("2d");
                        ctx.drawImage(img, 0, 0);
        
                        var MAX_WIDTH = 200;
                        var MAX_HEIGHT = 200;
                        var width = img.width;
                        var height = img.height;
        
                        if (width > height) {
                            if (width > MAX_WIDTH) {
                                height *= MAX_WIDTH / width;
                                width = MAX_WIDTH;
                            }
                        } else {
                            if (height > MAX_HEIGHT) {
                                width *= MAX_HEIGHT / height;
                                height = MAX_HEIGHT;
                            }
                        }
                        canvas.width = width;
                        canvas.height = height;
                        var ctx = canvas.getContext("2d");
                        ctx.drawImage(img, 0, 0, width, height);
        
                        dataurl = canvas.toDataURL(file.type);
                        document.getElementById('output').src = dataurl;
                    }
                    reader.readAsDataURL(file);
        
                }
        
            } else {
                alert('The File APIs are not fully supported in this browser.');
            }
        }

