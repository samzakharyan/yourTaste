$(document).ready(function(){
       $.ajaxSetup({
              headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
       });

       $('.cancle').click(function() {
              
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
                                    confirm : {text:'Yes. Cancle',className:'cancle-reserve'},
                                },
                            })
                            $('.cancle-reserve').on('click', function () {
                                   console.log(id)
                                   $.ajax({
                                          url: url,
                                          method: 'post',
                                          data: {id:'id', reason: 'cancle'},
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
                                       title: "Cancled!!!",
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
       })
   });
  