<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Black Magik</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                color: black;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tattooist Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="{{asset('css/welcome_css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="{{asset('css/welcome_css/zoomslider.css')}}" />
<link href="css/team.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/welcome_css/ziehharmonika.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/welcome_css/wimmViewer.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/welcome_css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="{{asset('css/welcome_css/font-awesome.css')}}" rel="stylesheet">
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=UnifrakturMaguntia" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Lora:400,400i" rel="stylesheet">
    </head>
    <body>

<!-- header -->
	<div id="demo-1" data-zs-src='["{{ $products[0]->path }}", "{{ $products[1]->path }}", "{{ $products[2]->path }}","{{ $products[3]->path }}"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
					<div class="inner-header-agile">
					   <div class="w3_agile_menu">
						   <div class="agileits_w3layouts_nav">
							<div id="toggle_m_nav">
								<div id="m_nav_menu" class="m_nav">
									<div class="m_nav_ham w3_agileits_ham" id="m_ham_1"></div>
									<div class="m_nav_ham" id="m_ham_2"></div>
									<div class="m_nav_ham" id="m_ham_3"></div>
								</div>
							</div>
							<div id="m_nav_container" class="m_nav wthree_bg">
								<nav class="menu menu--sebastian">
									<ul id="m_nav_list" class="m_nav menu__list">
										<li class="m_nav_item active" id="m_nav_item_1"> <a href="index.html" class="link link--kumya"><i class="fa fa-home" aria-hidden="true"></i><span data-letters="Home">Home</span></a></li>
										<li class="m_nav_item" id="moble_nav_item_2"> <a href="#services" class="link link--kumya scroll"><i class="fa fa-cog" aria-hidden="true"></i><span data-letters="Services">Services</span></a></li>
										<li class="m_nav_item" id="moble_nav_item_3"> <a href="#about" class="link link--kumya scroll"><i class="fa fa-info-circle" aria-hidden="true"></i><span data-letters="About Us">About Us</span></a></li>
										<li class="m_nav_item" id="moble_nav_item_4"> <a href="#team" class="link link--kumya scroll"><i class="fa fa-user" aria-hidden="true"></i><span data-letters="Artists">Artists</span></a></li>
										<li class="m_nav_item" id="moble_nav_item_5"> <a href="#gallery" class="link link--kumya scroll"><i class="fa fa-picture-o" aria-hidden="true"></i><span data-letters="Gallery">Gallery</span></a></li>
										<li class="m_nav_item" id="moble_nav_item_6"> <a href="#contact" class="link link--kumya scroll"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="Contact Us">Contact Us</span></a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<div class="header">

						<div class="agileinfo_social_icons">
              @if (Route::has('login'))
                  <div class="top-right links ">
                      @if (Auth::check())
                          <a href="{{ url('/home') }}">Home</a>
                      @else
                          <a href="{{ url('/login') }}">Login</a>
                          <a href="{{ url('/register') }}">Register</a>
                      @endif
                  </div>
              @endif
						</div>
						<div class="wthree_search">
							{{-- <form action="#" method="post">
								<input type="search" name="Search" placeholder="Search" required="">
								<input type="submit" value="">
							</form> --}}
						</div>
						<div class="clearfix"> </div>
					</div>
				 </div>


		<!--//header-w3l-->
			<!--/banner-info-->
			   <div class="agile-baner-info-w3ls">
					<h1><a href="{{ url('/home') }}"><span>Black</span>Magik</a></h1>
			         <h3>Largest online<span>art gallery </span>in Africa </h3>
				     <a href="#" data-toggle="modal" data-target="#myModal" class="hvr-buzz-out read">Sign up</a>
			   </div>
			<!--/banner-ingo-->

		</div>
		   </div>
    </div>


        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Black Magik
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>



	<!-- js -->
<script src="{{asset('js/welcome_js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/welcome_js/modernizr-2.6.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/welcome_js/jquery.zoomslider.min.js')}}"></script>
<!-- menu -->
	<script type="text/javascript" src="{{asset('js/welcome_js/main.js')}}"></script>
<!-- //menu -->

			<script src="{{asset('js/welcome_js/jarallax.js')}}"></script>
	<script src="{{asset('js/welcome_js/SmoothScroll.min.js')}}"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

<script src="{{asset('js/welcome_js/ziehharmonika.js')}}"></script>
<script>
$(document).ready(function() {
		$('.ziehharmonika').ziehharmonika({
			collapsible: true,
			prefix: ''
		});
	});
</script>
<script src="{{asset('js/welcome_js/wimmViewer.js')}}"></script>
<script>
    $(function(){
        $('#slider1').WimmViewer({
            miniatureWidth : 100,
            miniatureHeight: 100
            // Availables customizations:
            /*
             miniatureSpace: 10,
             nextText:'Next',
             prevText:'Prev',
             onImgChange : function() { console.log('changed'); },
             onNext : function() { console.log('next'); },
             onPrev : function() { console.log('previous'); },
             */
        });
    })
</script>
<!-- start-smoth-scrolling -->
<script src="{{asset('js/welcome_js/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('js/welcome_js/contact_me.js')}}"></script>
<!-- //for bootstrap working -->
<!-- stats -->
	<script src="{{asset('js/welcome_js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('js/welcome_js/jquery.countup.js')}}"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="{{asset('js/welcome_js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/welcome_js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<link rel="stylesheet" href="{{asset('css/welcome_css/swipebox.css')}}">
				<script src="js/jquery.swipebox.min.js"></script>
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>

<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->

<script type="text/javascript" src="{{asset('js/welcome_js/bootstrap-3.1.1.min.js')}}"></script>


    </body>
</html>
