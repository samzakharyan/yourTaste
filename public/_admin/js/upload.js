$(document).ready(function(){
//Image Upload
////////////////////////////////////////////////////////////////////////////
		$("#photo-logo").change(function(event) {  
			readURLL(this);   
		});

		function readURLL(input) {    
		    if (input.files && input.files[0]) { 
		       let reader = new FileReader();
               let filename = $("#photo-logo").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
		    	reader.onload = function(e) {     
		    		$('#preview-logo').attr('src', e.target.result);
		    		$('#preview-logo').hide();
		    		$('#preview-logo').fadeIn(500); 
                    $('#preview-logo').fadeIn(500); 
                              
		    	}
		    	reader.readAsDataURL(input.files[0]); 
		       
  
		    } 
        }

        $("#photo-title").change(function(event) {  
            readURLR(this);   
        });

        function readURLR(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-title").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-title').attr('src', e.target.result);
                    $('#preview-title').hide();
                    $('#preview-title').fadeIn(500); 
                    $('#preview-title').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
               
  
            } 
        }

        $("#photo-about").change(function(event) {  
            readURL(this);   
        });

        function readURL(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-about").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-about').attr('src', e.target.result);
                    $('#preview-about').hide();
                    $('#preview-about').fadeIn(500); 
                    $('#preview-about').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }

        $("#photo-team1").change(function(event) {  
            readURL1(this);   
        });

        function readURL1(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-team1").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-team1').attr('src', e.target.result);
                    $('#preview-team1').hide();
                    $('#preview-team1').fadeIn(500); 
                    $('#preview-team1').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }

                $("#photo-team2").change(function(event) {  
            readURL2(this);   
        });

        function readURL2(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-team2").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-team2').attr('src', e.target.result);
                    $('#preview-team2').hide();
                    $('#preview-team2').fadeIn(500); 
                    $('#preview-team2').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }

                $("#photo-team3").change(function(event) {  
            readURL3(this);   
        });

        function readURL3(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-team3").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-team3').attr('src', e.target.result);
                    $('#preview-team3').hide();
                    $('#preview-team3').fadeIn(500); 
                    $('#preview-team3').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }


        $("#photo-icon11").change(function(event) {  
            readURL11(this);   
        });

        function readURL11(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-icon11").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-1-1').attr('src', e.target.result);
                    $('#preview-1-1').hide();
                    $('#preview-1-1').fadeIn(500); 
                    $('#preview-1-1').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }

        $("#photo-icon12").change(function(event) {  
            readURL12(this);   
        });

        function readURL12(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-icon12").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-1-2').attr('src', e.target.result);
                    $('#preview-1-2').hide();
                    $('#preview-1-2').fadeIn(500); 
                    $('#preview-1-2').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }

         $("#photo-icon21").change(function(event) {  
            readURL21(this);   
        });

        function readURL21(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-icon21").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-2-1').attr('src', e.target.result);
                    $('#preview-2-1').hide();
                    $('#preview-2-1').fadeIn(500); 
                    $('#preview-2-1').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }

        $("#photo-icon22").change(function(event) {  
            readURL22(this);   
        });

        function readURL22(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-icon22").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-2-2').attr('src', e.target.result);
                    $('#preview-2-2').hide();
                    $('#preview-2-2').fadeIn(500); 
                    $('#preview-2-2').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }

        $("#photo-icon31").change(function(event) {  
            readURL31(this);   
        });

        function readURL31(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-icon31").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-3-1').attr('src', e.target.result);
                    $('#preview-3-1').hide();
                    $('#preview-3-1').fadeIn(500); 
                    $('#preview-3-1').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }

        $("#photo-icon32").change(function(event) {  
            readURL32(this);   
        });

        function readURL32(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-icon32").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-3-2').attr('src', e.target.result);
                    $('#preview-3-2').hide();
                    $('#preview-3-2').fadeIn(500); 
                    $('#preview-3-2').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }
/////////////////////////////////////////////////////////////
        $("#photo-menu1").change(function(event) {  
            readURLMenu1(this);   
        });

        function readURLMenu1(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-menu1").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-menu1').attr('src', e.target.result);
                    $('#preview-menu1').hide();
                    $('#preview-menu1').fadeIn(500); 
                    $('#preview-menu1').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }
        $("#photo-menu2").change(function(event) {  
            readURLMenu2(this);   
        });

        function readURLMenu2(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-menu2").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-menu2').attr('src', e.target.result);
                    $('#preview-menu2').hide();
                    $('#preview-menu2').fadeIn(500); 
                    $('#preview-menu2').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }

                $("#photo-menu3").change(function(event) {  
            readURLMenu3(this);   
        });

        function readURLMenu3(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-menu3").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-menu3').attr('src', e.target.result);
                    $('#preview-menu3').hide();
                    $('#preview-menu3').fadeIn(500); 
                    $('#preview-menu3').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }

        $("#photo-menu4").change(function(event) {  
            readURLMenu4(this);   
        });

        function readURLMenu4(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-menu4").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-menu4').attr('src', e.target.result);
                    $('#preview-menu4').hide();
                    $('#preview-menu4').fadeIn(500); 
                    $('#preview-menu4').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }


        $("#photo-menu5").change(function(event) {  
            readURLMenu5(this);   
        });

        function readURLMenu5(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-menu5").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-menu5').attr('src', e.target.result);
                    $('#preview-menu5').hide();
                    $('#preview-menu5').fadeIn(500); 
                    $('#preview-menu5').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }

                $("#photo-menu6").change(function(event) {  
            readURLMenu6(this);   
        });

        function readURLMenu6(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-menu6").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-menu6').attr('src', e.target.result);
                    $('#preview-menu6').hide();
                    $('#preview-menu6').fadeIn(500); 
                    $('#preview-menu6').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }


        $("#photo-test").change(function(event) {  
            readURLTest(this);   
        });

        function readURLTest(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-test").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-test').attr('src', e.target.result);
                    $('#preview-test').hide();
                    $('#preview-test').fadeIn(500); 
                    $('#preview-test').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }




        $("#photo-slide1").change(function(event) {  
            readURLSlid1(this);   
        });

        function readURLSlid1(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-slide1").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-slide1').attr('src', e.target.result);
                    $('#preview-slide1').hide();
                    $('#preview-slide1').fadeIn(500); 
                    $('#preview-slide1').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }

        $("#photo-slide2").change(function(event) {  
            readURLSlid2(this);   
        });

        function readURLSlid2(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-slide2").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-slide2').attr('src', e.target.result);
                    $('#preview-slide2').hide();
                    $('#preview-slide2').fadeIn(500); 
                    $('#preview-slide2').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }

        $("#photo-slide3").change(function(event) {  
            readURLSlid3(this);   
        });

        function readURLSlid3(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-slide3").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-slide3').attr('src', e.target.result);
                    $('#preview-slide3').hide();
                    $('#preview-slide3').fadeIn(500); 
                    $('#preview-slide3').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }

        $("#photo-footer").change(function(event) {  
            readURLEnd(this);   
        });

        function readURLEnd(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-footer").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-footer').attr('src', e.target.result);
                    $('#preview-footer').hide();
                    $('#preview-footer').fadeIn(500); 
                    $('#preview-footer').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }


        $("#photo-icon1").change(function(event) {  
            readURLSocial1(this);   
        });

        function readURLSocial1(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-icon1").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-icon1').attr('src', e.target.result);
                    $('#preview-icon1').hide();
                    $('#preview-icon1').fadeIn(500); 
                    $('#preview-icon1').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }        


        $("#photo-icon2").change(function(event) {  
            readURLSocial2(this);   
        });

        function readURLSocial2(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-icon2").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-icon2').attr('src', e.target.result);
                    $('#preview-icon2').hide();
                    $('#preview-icon2').fadeIn(500); 
                    $('#preview-icon2').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }        


        $("#photo-icon3").change(function(event) {  
            readURLSocial3(this);   
        });

        function readURLSocial3(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-icon3").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-icon3').attr('src', e.target.result);
                    $('#preview-icon3').hide();
                    $('#preview-icon3').fadeIn(500); 
                    $('#preview-icon3').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }        



        $("#photo-icon4").change(function(event) {  
            readURLSocial4(this);   
        });

        function readURLSocial4(input) {    
            if (input.files && input.files[0]) { 
               let reader = new FileReader();
               let filename = $("#photo-icon4").val();
               filename = filename.substring(filename.lastIndexOf('\\')+1);
                reader.onload = function(e) {     
                    $('#preview-icon4').attr('src', e.target.result);
                    $('#preview-icon4').hide();
                    $('#preview-icon4').fadeIn(500); 
                    $('#preview-icon4').fadeIn(500);              
                }
                reader.readAsDataURL(input.files[0]); 
  
            } 
        }




 })       