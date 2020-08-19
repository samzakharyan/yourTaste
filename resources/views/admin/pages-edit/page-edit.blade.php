<!DOCTYPE html>
<html lang="en">
<head>
  @if (!$logo || !$about || !$team || !$menu || !$test || !$footer) 
  <p>Please in terminal run <span class="error-message">"php artisan db:seed"</span> command!!!</p>
  @else
 <title>{{$logo['column']}}</title>
 <link rel="shortcut icon" href="{{asset('user/images/' . $logo['favicon'])}}" /> 
 <meta charset="UTF-8">
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <meta http-equiv="X-UA-Compatible" content="IE=Edge">
 <meta name="description" content="">
 <meta name="keywords" content="">
 <meta name="author" content="">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">
 <link rel="stylesheet" href="{{asset('user/css/font-awesome.min.css')}}">
 <link rel="stylesheet" href="{{asset('user/css/animate.css')}}">
 <link rel="stylesheet" href="{{asset('user/css/owl.carousel.css')}}">
 <link rel="stylesheet" href="{{asset('user/css/owl.theme.default.min.css')}}">
 <link rel="stylesheet" href="{{asset('user/css/magnific-popup.css')}}">
 <link rel="stylesheet" href="{{asset('user/css/templatemo-style.css')}}">
 <link href="{{asset('_admin/css/style.css')}}" rel="stylesheet" />
 <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
</head>
<body>
  <div class="parent">
    <div class="parent-menu">
     <div class="sidebar ">
        <div class="header">
         <div class="title">
            <a href="{{route('admin.admin')}}">Admin Panel</a> 
         </div>  
        </div>
          <ul class="ul">
           <li class="li-1"><a href="#home">Title</a></li>
           <li class="li-2"><a href="#home">Logo</a></li>
           <li class="li-3"><a href="#home">Menu Header</a></li>
           <li class="li-4"><a href="#home">Phone</a></li>
          </ul>     
     </div>    
     <div class="result-title" >
      <div class="header-result">
        <div class="title-result">
          <button class="back-1"> < </button>
            <div class="title-name">
               <h3>Title</h3>
            </div>
        </div>
      </div>
      <div class="body-result">
          <form action="{{route('admin.header-title-update')}}" method="POST"  enctype="multipart/form-data">
             {{csrf_field()}}
             {{method_field('PUT')}}
             <div class="form-group col-md-6">
          @error('column')
          <p class="alert alert-dangerr">{{ $message }}</p>
          @enderror
               <label>Column:</label>
               <input type="text"  name="column" class="form-control input" value="{{$logo->column}}"><br> 
          @error('favicon')
          <p class="alert alert-dangerr">{{ $message }}</p>
          @enderror    
               <label class="col-lg-3 col-form-label form-control-label" for="photo-title">
                <img   id="preview-title" src="{{asset('user/images/' . $logo->favicon)}}"/>
                </label>
                <input  type="file"  name="favicon" class="photo form-control input " multiple="" 
                id="photo-title" accept="image/gif, image/jpeg, image/png, image.jpg">
                <br><br>
                <button type="submit" class="btn btn-success">Update Title</button>
               </div>
          </form>        
      </div>
    </div>
    
    <div class="result-logo" >
      <div class="header-result">
         <div class="title-result">
         <button class="back-2"> < </button>
         <div class="title-name">
           <h3>Logo</h3>
         </div>
        </div>
      </div>
      <div class="body-result">
      <form role="form"  action="{{route('admin.logo-update')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          {{method_field('PUT')}}

           <div class=" image-logo">
        @error('image_logo')
            <div class="alert alert-dangerr">{{ $message }}</div>
        @enderror
              <label for="photo-logo" class="col-lg-3 col-form-label form-control-label">
                @if($logo->name)
              <img  id="preview-logo" src="https://webdevtrick.com/wp-content/uploads/preview-img.jpg" />
              @else
               <img   id="preview-logo" src="{{asset('user/images/' . $logo->image_logo)}}"/>
               @endif
              </label>        
              <input type="file" name="image_logo" multiple="" id="photo-logo" class="form-control input" 
              accept="image/gif,image/jpeg,image/png,image.jpg"/>
             </div>

             <div class="name">
        @error('name')
            <div class="alert alert-dangerr">{{ $message }}</div>
        @enderror
              <input type="text" name="name"  id="name" class="form-control input" placeholder="Logo Text"/>
             </div> 
          
          <button type="submit" class="btn btn-success">Update Logo</button>
        </form>                                                                        
      </div>
    </div>
    
    <div class="result-header-menu" >
      <div class="header-result">
        <div class="title-result">
         <button class="back-3"> < </button>
          <div class="title-name">
            <h3>Menu</h3>
          </div>
        </div>
      </div>
      <div class="body-result">           
          <form action="{{route('admin.header-menu-update')}}" method="POST">
              {{csrf_field()}}
              {{method_field('PUT')}}
            <div class="form-group col-md-6">
          @error('menu_1')
            <div class="alert alert-dangerr">{{ $message }}</div>
          @enderror
              <input type="text"  name="menu_1" class="form-control input"
               value="{{$logo->menu_1}}">
          @error('menu_2')
            <div class="alert alert-dangerr">{{ $message }}</div>
          @enderror
              <input type="text"  name="menu_2" class="form-control input" 
              value="{{$logo->menu_2}}">
          @error('menu_3')
            <div class="alert alert-dangerr">{{ $message }}</div>
          @enderror
              <input type="text"  name="menu_3" class="form-control input" 
              value="{{$logo->menu_3}}">
          @error('menu_4')
            <div class="alert alert-dangerr">{{ $message }}</div>
          @enderror
              <input type="text"  name="menu_4" class="form-control input" 
              value="{{$logo->menu_4}}">
          @error('menu_5')
            <div class="alert alert-dangerr">{{ $message }}</div>
          @enderror
              <input type="text"  name="menu_5" class="form-control input"
              value="{{$logo->menu_5}}">
              <button type="submit" class="btn btn-success">Update Menu
              </button> 
            </div>
          </form>                                                                           
      </div>
    </div>
</div>

<div class="content">
 <!-- MENU -->
 <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
  <div class="container">

   <div class="navbar-header">
    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
     <span class="icon icon-bar"></span>
     <span class="icon icon-bar"></span>
     <span class="icon icon-bar"></span>
   </button>

   <!-- lOGO TEXT HERE -->
   @if ($logo['name'])
   <a href="" class="navbar-brand">{{$logo['name']}}</a>
   @else
   <a href="#">
     <img src="{{asset('user/images/' . $logo['image_logo'])}}" alt="" style="width:70px;">
   </a>
   @endif    
 </div>

 <!-- MENU LINKS -->
 <div class="collapse navbar-collapse">
  <ul class="nav navbar-nav navbar-nav-first">
   <li><a href="#home" class="smoothScroll">   {{$logo['menu_1']}}</a></li>
   <li><a href="#about" class="smoothScroll">  {{$logo['menu_2']}}</a></li>
   <li><a href="#team" class="smoothScroll">   {{$logo['menu_3']}}</a></li>
   <li><a href="#menu" class="smoothScroll">   {{$logo['menu_4']}}</a></li>
   <li><a href="#contact" class="smoothScroll">{{$logo['menu_5']}}</a></li>
 </ul>

  <ul class="nav navbar-nav navbar-right">
    <a href="#footer" class="btn btn-danger">Reserve a table</a>
    <a href="{{route('register')}}" class="btn btn-success"><i class="fa fa-user"></i>Register</a>
    <a href="{{route('login')}}" class="btn btn-success"><i class="fa fa-sign-in"></i>Sign In</a>
  </ul>
</div>

</div>
</section>
<!-- HOME -->
<section id="home" class="slider" data-stellar-background-ratio="0.5">
  <div class="row">

    <div class="owl-carousel owl-theme">
     <div class="item item-first" style="background-image: url({{asset('user/images/' . $slid['slid_1'])}});              
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;">
      <div class="caption">
       <div class="container">
        <div class="col-md-8 col-sm-12">
         <h3>{{$slid['title_1']}} </h3>
         <h1>{{$slid['text_1']}}</h1>
         <a href="{{$slid['url_1']}}" class="section-btn btn btn-default smoothScroll">{{$slid['button_1']}}</a>
       </div>
     </div>
   </div>
 </div>

 <div class="item item-second" style="background-image: url({{asset('user/images/' . $slid['slid_2'])}}); 
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;">
  <div class="caption">
   <div class="container">
    <div class="col-md-8 col-sm-12">
     <h3>{{$slid['title_2']}} </h3>
     <h1>{{$slid['text_2']}}</h1>
     <a href="{{$slid['url_2']}}" class="section-btn btn btn-default smoothScroll">{{$slid['button_2']}}</a>
   </div>
 </div>
</div>
</div>

<div class="item item-third" style="background-image: url({{asset('user/images/' . $slid['slid_3'])}}); 
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;">
  <div class="caption">
   <div class="container">
    <div class="col-md-8 col-sm-12">
     <h3>{{$slid['title_3']}} </h3>
     <h1>{{$slid['text_3']}} </h1>
     <a href="{{$slid['url_3']}} " class="section-btn btn btn-default smoothScroll">{{$slid['button_3']}} </a>
   </div>
 </div>
</div>
</div>
</div>

</div>
</section>
<!-- ABOUT -->
<section id="about" data-stellar-background-ratio="0.5">
  <div class="container">
   <div class="row">

    <div class="col-md-6 col-sm-12">
     <div class="about-info">
      <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
        <h4>{{$about['title_about']}}</h4>
        <h2>{{$about['subtitle_about']}}</h2>
      </div>

      <div class="wow fadeInUp" data-wow-delay="0.4s">
       <p>{{$about['description_about']}}</p>
     </div>
   </div>
 </div>

 <div class="col-md-6 col-sm-12">
   <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
    <img src="{{asset('user/images/' . $about['image_about'])}}" class="img-responsive" alt="">
  </div>
</div>

</div>
</div>
</section>
<!-- TEAM -->
<section id="team" data-stellar-background-ratio="0.5">
  <div class="container">
   <div class="row">

    <div class="col-md-12 col-sm-12">
     <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
      <h2>{{$team['title_team']}}</h2>
      <h4>{{$team['subtitle_team']}}</h4>
    </div>
  </div>

  <div class="col-md-4 menpep col-sm-4">
   <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
    <img src="{{asset('user/images/' . $team['image_team1'])}}" class="img-responsive" alt="">
    <div class="team-hover">
      <div class="team-item">
       <h4>{{$team['text_team1']}}</h4> 
       <ul class="social-icon">
        <li class="soc-icon"><a href="{{$team['url_1_1']}}" target="_blank"> <img src="{{asset('user/images/' . $team['icon_1_1'])}}" 
         > </a></li>
        <li class="soc-icon"><a href="{{$team['url_1_2']}}" target="_blank"> <img src="{{asset('user/images/' . $team['icon_1_2'])}}" 
          ></a></li>
      </ul>
    </div>
  </div>
</div>
<div class="team-info">
  <h3>{{$team['name_team1']}}</h3>
  <p>{{$team['position_1']}}</p>
</div>
</div>

<div class="col-md-4 menpep col-sm-4">
 <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
  <img src="{{asset('user/images/' . $team['image_team2'])}}" class="img-responsive" alt="">
  <div class="team-hover">
    <div class="team-item">
     <h4>{{$team['text_team2']}}</h4>
     <ul class="social-icon">
      <li class="soc-icon"><a href="{{$team['url_2_1']}}" target="_blank"><img src="{{asset('user/images/' . $team['icon_2_1'])}}" 
          ></a></li>
      <li class="soc-icon"><a href="{{$team['url_2_2']}}" target="_blank"><img src="{{asset('user/images/' . $team['icon_2_2'])}}" 
          ></a></li>
    </ul>
  </div>
</div>
</div>
<div class="team-info">
  <h3>{{$team['name_team2']}}</h3>
  <p>{{$team['position_2']}}</p>
</div>
</div>

<div class="col-md-4 menpep col-sm-4">
 <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
  <img src="{{asset('user/images/' . $team['image_team3'])}}" class="img-responsive" alt="">
  <div class="team-hover">
    <div class="team-item">
     <h4>{{$team['text_team2']}}</h4>
     <ul class="social-icon">
      <li class="soc-icon"><a href="{{$team['url_3_1']}}" target="_blank"><img src="{{asset('user/images/' . $team['icon_3_1'])}}" 
          ></a></li>
      <li class="soc-icon"><a href="{{$team['url_3_2']}}" target="_blank"><img src="{{asset('user/images/' . $team['icon_3_2'])}}" 
          ></a></li>
    </ul>
  </div>
</div>
</div>
<div class="team-info">
  <h3>{{$team['name_team3']}}</h3>
  <p>{{$team['position_2']}}</p>
</div>
</div>

</div>
</div>
</section>
<!-- MENU-->
<section id="menu" data-stellar-background-ratio="0.5">
  <div class="container">
   <div class="row">

    <div class="col-md-12 col-sm-12">
     <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
      <h2>{{$menu['title_menu']}}</h2>
      <h4>{{$menu['subtitle_menu']}}</h4>
    </div>
  </div>

  <div class="col-md-4 col-sm-6">
   <!-- MENU THUMB -->
   <div class="menu-thumb">
    <a href="{{asset('user/images/' . $menu['image_menu1'])}}" class="image-popup" title="{{$menu['name_menu1']}}">
     <img src="{{asset('user/images/' . $menu['image_menu1'])}}" class="img-responsive" alt="">

     <div class="menu-info">
      <div class="menu-item">
       <h3>{{$menu['name_menu1']}}</h3>
       <p>{{$menu['info_1']}}</p>
     </div>
     <div class="menu-price">
       <span>{{$menu['price_1']}}</span>
     </div>
   </div>
 </a>
</div>
</div>

<div class="col-md-4 col-sm-6">
 <!-- MENU THUMB -->
 <div class="menu-thumb">
  <a href="{{asset('user/images/' . $menu['image_menu2'])}}" class="image-popup" title="{{$menu['name_menu2']}}">
   <img src="{{asset('user/images/' . $menu['image_menu2'])}}" class="img-responsive" alt="">

   <div class="menu-info">
    <div class="menu-item">
     <h3>{{$menu['name_menu2']}}</h3>
     <p>{{$menu['info_2']}}</p>
   </div>
   <div class="menu-price">
     <span>{{$menu['price_2']}}</span>
   </div>
 </div>
</a>
</div>
</div>

<div class="col-md-4 col-sm-6">
 <!-- MENU THUMB -->
 <div class="menu-thumb">
  <a href="{{asset('user/images/' . $menu['image_menu3'])}}" class="image-popup" title="{{$menu['name_menu3']}}">
   <img src="{{asset('user/images/' . $menu['image_menu3'])}}" class="img-responsive" alt="">

   <div class="menu-info">
    <div class="menu-item">
     <h3>{{$menu['name_menu3']}}</h3>
     <p>{{$menu['info_3']}}</p>
   </div>
   <div class="menu-price">
     <span>{{$menu['price_3']}}</span>
   </div>
 </div>
</a>
</div>
</div>

<div class="col-md-4 col-sm-6">
 <!-- MENU THUMB -->
 <div class="menu-thumb">
  <a href="{{asset('user/images/' . $menu['image_menu4'])}}" class="image-popup" title="{{$menu['name_menu4']}}">
   <img src="{{asset('user/images/' . $menu['image_menu4'])}}" class="img-responsive" alt="">

   <div class="menu-info">
    <div class="menu-item">
     <h3>{{$menu['name_menu4']}}</h3>
     <p>{{$menu['info_4']}}</p>
   </div>
   <div class="menu-price">
     <span>{{$menu['price_4']}}</span>
   </div>
 </div>
</a>
</div>
</div>

<div class="col-md-4 col-sm-6">
 <!-- MENU THUMB -->
 <div class="menu-thumb">
  <a href="{{asset('user/images/' . $menu['image_menu5'])}}" class="image-popup" title="{{$menu['name_menu5']}}">
   <img src="{{asset('user/images/' . $menu['image_menu5'])}}" class="img-responsive" alt="">

   <div class="menu-info">
    <div class="menu-item">
     <h3>{{$menu['name_menu5']}}</h3>
     <p>{{$menu['info_5']}}</p>
   </div>
   <div class="menu-price">
     <span>{{$menu['price_5']}}</span>
   </div>
 </div>
</a>
</div>
</div>

<div class="col-md-4 col-sm-6">
 <!-- MENU THUMB -->
 <div class="menu-thumb">
  <a href="{{asset('user/images/' . $menu['image_menu6'])}}" class="image-popup" title="{{$menu['name_menu6']}}">
   <img src="{{asset('user/images/' . $menu['image_menu6'])}}" class="img-responsive" alt="">

   <div class="menu-info">
    <div class="menu-item">
     <h3>{{$menu['name_menu6']}}</h3>
     <p>{{$menu['info_6']}}</p>
   </div>
   <div class="menu-price">
     <span>{{$menu['price_6']}}</span>
   </div>
 </div>
</a>
</div>
</div>


</div>
</div>
</section>
<!-- TESTIMONIAL -->
{{-- {{dump($test->image)}} --}}
<section id="testimonial" data-stellar-background-ratio="0.5" 
style=" background: url('{{asset('user/images/' . $test['image_test'])}}');    
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-position:center center; 
    background-size: cover;">
  <div class="overlay"></div>
  <div class="container">
   <div class="row">

    <div class="col-md-12 col-sm-12">
     <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
      <h2>{{$test['title_test']}}</h2>
    </div>
  </div>  

  <div class="col-md-offset-2 col-md-8 col-sm-12">
   <div class="owl-carousel owl-theme">
    <div class="item">
     <p>{{$test['description_1']}}</p>
     <div class="tst-author">
       <h4>{{$test['name_test1']}}</h4>
       <span>{{$test['text_test1']}}</span>
     </div>
   </div>

   <div class="item">
     <p>{{$test['description_2']}}</p>
     <div class="tst-author">
       <h4>{{$test['name_test2']}}</h4>
       <span>{{$test['text_test2']}}</span>
     </div>
   </div>

   <div class="item">
     <p>{{$test['description_3']}}</p>
     <div class="tst-author">
       <h4>{{$test['name_test3']}}</h4>
       <span>{{$test['text_test3']}}</span>
     </div>
   </div>

 </div>
</div>

</div>
</div>
</section>  
<!-- CONTACT -->
<section id="contact" data-stellar-background-ratio="0.5">
  <div class="container">
   <div class="row">  
     <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
       <div id="google-map">
        <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" allowfullscreen></iframe>
      </div>
    </div>    

    <div class="col-md-6 col-sm-12">

     <div class="col-md-12 col-sm-12">
      <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
       <h2>Contact Us</h2>
     </div>
   </div>

   <!-- CONTACT FORM -->
   <form action="{{route('sendemail')}}" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">   
          {{ csrf_field() }}
               <div class="col-md-6 col-sm-6">
          @error('name')
          <p class="alert alert-danger">{{ $message }}</p>
          @enderror
                    <input type="text" class="form-control" id="cf-name" name="name" placeholder="Full name">
               </div>
               <div class="col-md-6 col-sm-6">
          @error('email')
          <p class="alert alert-danger">{{ $message }}</p>
          @enderror
                    <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
               </div>
               <div class="col-md-12 col-sm-12">
          @error('subject')
          <p class="alert alert-danger">{{ $message }}</p>
          @enderror
                    <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">
          @error('message')
          <p class="alert alert-danger">{{ $message }}</p>
          @enderror
                    <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Tell about your project"></textarea>

                    <button type="submit" class="form-control" id="cf-submit">Send Message</button>
               </div>
          </form>
</div>

</div>
</div>
</section>          
<!-- FOOTER -->
<footer id="footer" data-stellar-background-ratio="0.5">
  <div class="container">
   <div class="row">

    <div class="col-md-3 col-sm-8">
     <div class="footer-info">
      <div class="section-title">
       <h2 class="wow fadeInUp" data-wow-delay="0.2s">{{$footer['find']}}</h2>
     </div>
     <address class="wow fadeInUp" data-wow-delay="0.4s">
       <p>{{$footer['find_text']}}</p>
     </address>
   </div>
 </div>

 <div class="col-md-3 col-sm-8">
   <div class="footer-info">
    <div class="section-title">
     <h2 class="wow fadeInUp" data-wow-delay="0.2s">{{$footer['reserv_info']}}</h2>
   </div>
   <address class="wow fadeInUp" data-wow-delay="0.4s">
     <p>{{$footer['phone_footer']}}</p>
     <p><a href="{{$footer['url']}}">{{$footer['mail']}}</a></p>
   </address>
 </div>
</div>

<div class="col-md-4 col-sm-8">
 <div class="footer-info footer-open-hour" 
 style=" background: url('{{asset('user/images/' . $footer['image_footer'])}}'); 
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;" >
  <div class="section-title">
   <h2 class="wow fadeInUp" data-wow-delay="0.2s">{{$footer['hours']}}</h2>
 </div>
 <div class="wow fadeInUp" data-wow-delay="0.4s">
   <p>{{$footer['closed_time']}}</p>
   <div>
    <strong>{{$footer['week']}}</strong>
    <p>{{$footer['times']}}</p>
  </div>
  <div>
    <strong>{{$footer['week_1']}}</strong>
    <p>{{$footer['times_1']}}</p>
  </div>
</div>
</div>
</div>

<div class="col-md-2 col-sm-4">
 <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
  <li><a href="{{$footer['url_footer1']}}"  target="_blank"><img src="{{asset('user/images/' . $footer['icon_1'])}}"></a></li>
  <li><a href="{{$footer['url_footer2']}}"  target="_blank"><img src="{{asset('user/images/' . $footer['icon_2'])}}"></a></li>
  <li><a href="{{$footer['url_footer3']}}"  target="_blank"><img src="{{asset('user/images/' . $footer['icon_3'])}}"></a></li>
  <li><a href="{{$footer['url_footer4']}}"  target="_blank"><img src="{{asset('user/images/' . $footer['icon_4'])}}"></a></li>
</ul>

<div class="wow fadeInUp copyright-text" data-wow-delay="0.8s"> 
  <p><br>{{$footer['text']}} 
  </div>
</div>

</div>
</div>
</footer>
</div>

</div>
  @endif
</body>
<!-- SCRIPTS -->
<script src="{{asset('user/js/jquery.js')}}"></script>
<script src="{{asset('user/js/bootstrap.min.js')}}"></script>
<script src="{{asset('user/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('user/js/wow.min.js')}}"></script>
<script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('user/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('user/js/smoothscroll.js')}}"></script>
<script src="{{asset('user/js/custom.js')}}"></script>
<script src="{{asset('_admin/js/upload.js')}}"></script>
<script src="{{asset('_admin/js/script.js')}}"></script>
</html>
