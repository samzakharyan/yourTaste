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
                            swal({
                                title: "Are you sure?",
                                text: response.msg,
                                icon: "warning",
                                buttons: {
                                    cancel : 'Cancle',
                                    confirm : {text:'Yes. Delete',className:'delete-user'},
                                },
                            })
				$('.delete-user').on('click', function () {
					console.log(id)
					$.ajax({
						url: url,
						method: 'post',
						data: {id:'id', reason: 'delete'},
						success: function (response)
						{
					    if (response.fail) {
                            swal({
                                       title: "Error!!!",
                                       text: response.msg,
                                       icon: "warning",
                                       buttons: false,
                                   })
                            setTimeout(function(){  location.reload();},2000);
                            }

                        else {
                   	        swal({
                                       title: "Deleted!!!",
                                       text: response.msg,
                                       icon: "success",
                                       buttons: false,
                                    })
                   	        setTimeout(function(){  location.reload()},2000);
                            }
						}
					});	
				});	
			},
			
		});
	});

    $('.delete-admin').click(function() {
        
        let id = $(this).closest('tr').children('td').first().text();   
        
        let url = $(this).data('url');
        $.ajax({
            url: url,
            method: 'post',
            data: {id:'id', reason: 'check'},
            success: function (response)
            {   
                            swal({
                                title: "Are you sure?",
                                text: response.msg,
                                icon: "warning",
                                buttons: {
                                    cancel : 'Cancle',
                                    confirm : {text:'Yes. Delete',className:'admin-delet'},
                                },
                            })
                $('.admin-delet').on('click', function () {
                    console.log(id)
                    $.ajax({
                        url: url,
                        method: 'post',
                        data: {id:'id', reason: 'delete'},
                        success: function (response)
                        {
                        if (response.fail) {
                            swal({
                                       title: "Error!!!",
                                       text: response.msg,
                                       icon: "warning",
                                       buttons: false,
                                   })
                            setTimeout(function(){  location.reload();},2000);
                            }

                        else {
                            swal({
                                       title: "Deleted!!!",
                                       text: response.msg,
                                       icon: "success",
                                       buttons: false,
                                    })
                            setTimeout(function(){  location.reload()},2000);
                            }
                        }
                    }); 
                }); 
            },
            
        });
    });


        $('.li-1').click(function(){
            $(".sidebar").animate({
            	width:"0%"},400) 
            $(".result-title").animate({
            	marginRight:'100%',
            	width:"100%"},400)
        })
        $('.back-1').click(function(){
            $(".sidebar").animate({
            	width:"100%"},400) 
            $(".result-title").animate({
            	marginleft:'100%',
            	width:"0%"},400)
        })


        $('.li-2').click(function(){
            $(".sidebar").animate({
            	width:"0%"},400) 
            $(".result-logo").animate({
            	marginRight:'100%',
            	width:"100%"},400)
        })

        $('.back-2').click(function(){
            $(".sidebar").animate({
            	width:"100%"},400) 
            $(".result-logo").animate({
            	marginleft:'100%',
            	width:"0%"},400)
        })


        $('.li-3').click(function(){
            $(".sidebar").animate({
                width:"0%"},400) 
            $(".result-header-menu").animate({
                marginRight:'100%',
                width:"100%"},400)
        })

        $('.back-3').click(function(){
            $(".sidebar").animate({
                width:"100%"},400) 
            $(".result-header-menu").animate({
                marginleft:'100%',
                width:"0%"},400)
        })




        $('.delete-product').click(function() {
        
        let id = $(this).closest('tr').children('td').first().text();   
        
        let url = $(this).data('url');
        $.ajax({
            url: url,
            method: 'post',
            data: {id:'id', reason: 'check'},
            success: function (response)
            {   
                            swal({
                                title: "Are you sure?",
                                text: response.msg,
                                icon: "warning",
                                buttons: {
                                    cancel : 'Cancle',
                                    confirm : {text:'Yes. Delete',className:'product-delet'},
                                },
                            })
                $('.product-delet').on('click', function () {
                    console.log(id)
                    $.ajax({
                        url: url,
                        method: 'post',
                        data: {id:'id', reason: 'delete'},
                        success: function (response)
                        {
                        if (response.fail) {
                            swal({
                                       title: "Error!!!",
                                       text: response.msg,
                                       icon: "warning",
                                       buttons: false,
                                   })
                            setTimeout(function(){  location.reload();},2000);
                            }

                        else {
                            swal({
                                       title: "Deleted!!!",
                                       text: response.msg,
                                       icon: "success",
                                       buttons: false,
                                    })
                            setTimeout(function(){  location.reload()},2000);
                            }
                        }
                    }); 
                }); 
            },
            
        });
    });

})
