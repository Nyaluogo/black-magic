<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Black Magik') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/upload_form.css') }}" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/preetyPhoto.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom-styles.css') }}"> --}}


    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!--external css-->
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/zabuto_calendar.css') }}" rel="stylesheet">
    <link href="{{ asset('gritter/css/jquery.gritter.css') }}" rel="stylesheet">
    <link href="{{ asset('lineicons/style.css') }}" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('js/dashgum-template-js/chart-master/Chart.js') }}" rel="stylesheet">
    <link href="{{ asset('css/table-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/to-do.css') }}" rel="stylesheet">



    <!-- Favicons
================================================== -->
<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
<link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/apple-touch-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/apple-touch-icon-114x114.png') }}">


    <!-- Scripts -->
    <!-- JS
    ================================================== -->
    {{-- <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/jquery.quicksand.js') }}"></script>
    <script src="{{ asset('js/jquery.custom.js') }}"></script> --}}
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script>
        $('img').mousedown(function(e){
            if(e.button == 2){
                return false;
            }
        })
    </script>
    <script>
        $(document).ready(function(){
            $(document).bind("contextmenu",function(e){
                if(e.target.nodeName == 'IMG'){
                    return false;
                }
            });
        });
    </script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
</head>
<body>
    <div id="app">
      <section id="container">
        <init></init>
        <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
          <!--logo start-->
          <a href="{{ route('home') }}" class="logo"><b>Black Magik</b></a>
          <!--logo end-->
          <div class="nav notify-row" id="top_menu">
              <!--  notification start -->
              <ul class="nav top-menu">
                  <!-- settings start -->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                          <i class="fa fa-tasks"></i>
                          <span class="badge bg-theme">4</span>
                      </a>
                      <ul class="dropdown-menu extended tasks-bar">
                          <div class="notify-arrow notify-arrow-green"></div>
                          <li>
                              <p class="green">You have 4 pending tasks</p>
                          </li>
                          <li>
                              <a href="index.html#">
                                  <div class="task-info">
                                      <div class="desc">DashGum Admin Panel</div>
                                      <div class="percent">40%</div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                          <span class="sr-only">40% Complete (success)</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="index.html#">
                                  <div class="task-info">
                                      <div class="desc">Database Update</div>
                                      <div class="percent">60%</div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                          <span class="sr-only">60% Complete (warning)</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="index.html#">
                                  <div class="task-info">
                                      <div class="desc">Product Development</div>
                                      <div class="percent">80%</div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                          <span class="sr-only">80% Complete</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="index.html#">
                                  <div class="task-info">
                                      <div class="desc">Payments Sent</div>
                                      <div class="percent">70%</div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                          <span class="sr-only">70% Complete (Important)</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="external">
                              <a href="#">See All Tasks</a>
                          </li>
                      </ul>
                  </li>
                  <!-- settings end -->
                  <!-- inbox dropdown start-->
                  <li id="header_inbox_bar" class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                          <i class="fa fa-envelope-o"></i>
                          <span class="badge bg-theme">5</span>
                      </a>
                      <ul class="dropdown-menu extended inbox">
                          <div class="notify-arrow notify-arrow-green"></div>
                          <li>
                              <p class="green">You have 5 new messages</p>
                          </li>
                          <li>
                              <a href="index.html#">
                                  <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                  <span class="subject">
                                  <span class="from">Zac Snider</span>
                                  <span class="time">Just now</span>
                                  </span>
                                  <span class="message">
                                      Hi mate, how is everything?
                                  </span>
                              </a>
                          </li>
                          <li>
                              <a href="index.html#">
                                  <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                  <span class="subject">
                                  <span class="from">Divya Manian</span>
                                  <span class="time">40 mins.</span>
                                  </span>
                                  <span class="message">
                                   Hi, I need your help with this.
                                  </span>
                              </a>
                          </li>
                          <li>
                              <a href="index.html#">
                                  <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                  <span class="subject">
                                  <span class="from">Dan Rogers</span>
                                  <span class="time">2 hrs.</span>
                                  </span>
                                  <span class="message">
                                      Love your new Dashboard.
                                  </span>
                              </a>
                          </li>
                          <li>
                              <a href="index.html#">
                                  <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                  <span class="subject">
                                  <span class="from">Dj Sherman</span>
                                  <span class="time">4 hrs.</span>
                                  </span>
                                  <span class="message">
                                      Please, answer asap.
                                  </span>
                              </a>
                          </li>
                          <li>
                              <a href="index.html#">See all messages</a>
                          </li>
                      </ul>
                  </li>
                  <!-- inbox dropdown end -->
              </ul>
              <!--  notification end -->
          </div>



          <div class="top-menu">
            <ul class="nav pull-right top-menu">
              {{-- <ul class="nav navbar-nav navbar-right"> --}}
                  <!-- Authentication Links -->
                  @if (Auth::guest())
                      <li><a href="{{ route('login') }}">Login</a></li>
                      <li><a href="{{ route('register') }}">Register</a></li>
                  @else
                       <li><a href="{{ route('product.shoppingCart') }}">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                      <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                      </a></li>

                      <li>
                                  <a href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                             <img src="{{ Auth::user()->avatar }}" width="30px" height="30px" style="border-radius:50px;" alt="avatar">
                              {{ Auth::user()->name }} <span class="caret"></span>

                          </a>

                          <ul class="dropdown-menu" role="menu">
                              <li>
                                  <a href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          </ul>
                      </li>
                  @endif
              </ul>

          </div>
      </header>
    <!--header end-->


      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                @if(Auth::check())
              	  <p class="centered"><a href="{{ route('profile',['slug' => Auth::user()->slug ]) }}"><img src="{{ Auth::user()->avatar }}" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">{{ Auth::user()->name }}</h5>

                  {{-- <li class="mt">
                      <a class="active" href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li> --}}

                  <li class="mt">
                      <a class="" href="{{ route('portfolio.add') }}">
                          <i class="fa fa-plus"></i>
                          <span>Add to portfolio</span>
                      </a>
                  </li>

                  <li class="mt">
                      <a class="" href="{{ route('friendships.explore') }}">
                          <i class="fa fa-globe"></i>
                          <span>Explore</span>
                      </a>
                  </li>


              @endif

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-money"></i>
                          <span>Shop</span>
                      </a>
                      <ul class="sub">
                        <li>
                          <a href="{{ route('product.index') }}">All</a>
                        </li>
                          <li>
                            <h3><strong>CATEGORY</strong></h3>
                          </li>
                          <li><a  href="{{ route('filter',['id' => 1]) }}">Traditional Art</a></li>
                          <li><a  href="{{ route('filter',['id' => 2]) }}">Digital art</a></li>
                          <li><a  href="{{ route('filter',['id' => 3]) }}">Collage</a></li>
                          <li><a  href="{{ route('filter',['id' => 4]) }}">Drawings</a></li>
                          <li><a  href="{{ route('filter',['id' => 5]) }}">Mixed media</a></li>
                          <li><a  href="{{ route('filter',['id' => 6]) }}">Mosaic</a></li>
                          <li><a  href="{{ route('filter',['id' => 7]) }}">Abstract Art</a></li>
                          <li><a  href="{{ route('filter',['id' => 8]) }}">Street art</a></li>
                          <li><a  href="{{ route('filter',['id' => 9]) }}">Photography</a></li>
                          <hr />
                          <li>
                            <h3><strong>SIZE</strong></h3>
                          </li>
                          <li><a  href="general.html">Small</a></li>
                          <li><a  href="buttons.html">Medium</a></li>
                          <li><a  href="panels.html">Large</a></li>

                          <hr />
                          <li>
                            <h3><strong>SHAPE</strong></h3>
                          </li>
                          <li><a  href="general.html">Portrait</a></li>
                          <li><a  href="buttons.html">Landscape</a></li>
                          <li><a  href="panels.html">Square</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">

        <section class="wrapper">
          @if(Auth::check())
              <search></search>
          @endif

          @yield('content')
          <div class="row">

            @if(Auth::check())
              <notification :id="{{ Auth::id() }}"></notification>
              <audio id="noty_audio">
                <source src="{{ asset('audio/iphonenoty.mp3') }}">
                <source src="{{ asset('audio/iphonenoty.ogg') }}">
                <source src="{{ asset('audio/iphonenoty.wav') }}">
              </audio>
            @endif
          </div>

        </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2017 - Black Magik
            <a href="{{ route('home') }}" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
    {{-- this disables context menu for images --}}
    <script>
        $(document).ready(function(){
            $(document).bind("contextmenu",function(e){
                if(e.target.nodeName == 'IMG'){
                    return false;
                }
            });
        });
    </script>
    </section>


    </div>
    <script type="text/javascript">
      noty({type:'success',layout:'top',text:'were in'});
    </script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
      @if(Session::has('success'))
        noty(
          {
            type: 'success',
            layout: 'top',
            text: '{{ Session::get('success') }}'
          }
        );
      @endif
    </script>

    {{-- <script src="{{ asset('js/upload_form_vue.js') }}" ></script> --}}
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
$(function() {
  $( "#datepicker" ).datepicker({
    dateFormat : "yy-mm-dd"
  });
});
</script>
<script>
        $(".img").mousedown(function(e){
            if(e.button == 2){
                return false;
            }
        })
    </script>
    {{-- this disables context menu for images --}}
    <script>
        $(document).ready(function(){
            $(document).bind("contextmenu",function(e){
                if(e.target.nodeName == 'IMG'){
                    return false;
                }
            });
        });
    </script>

        {{-- scripts from dashgum template --}}
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{ asset('js/dashgum-template-js/jquery.js') }}"></script>
        <script src="{{ asset('js/dashgum-template-js/jquery-1.8.3.min.js') }}"></script>
        <script src="{{ asset('js/dashgum-template-js/bootstrap.min.js') }}"></script>
        <script class="include" type="text/javascript" src="{{ asset('js/dashgum-template-js/jquery.dcjqaccordion.2.7.js') }}"></script>
        <script src="{{ asset('js/dashgum-template-js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('js/dashgum-template-js/jquery.nicescroll.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/dashgum-template-js/jquery.sparkline.js') }}"></script>





        <!--common script for all pages-->
        <script src="{{ asset('js/dashgum-template-js/common-scripts.js') }}"></script>
        <script src="{{ asset('js/dashgum-template-js/gritter/js/jquery.gritter.js') }}"></script>
        <script src="{{ asset('js/dashgum-template-js/gritter-conf.js') }}"></script>


        <!--script for this page-->
        <script src="{{ asset('js/dashgum-template-js/sparkline-chart.js') }}"></script>
        <script src="{{ asset('js/dashgum-template-js/zabuto_calendar.js') }}"></script>

@if(Session::has('success'))
    	<script type="text/javascript">
            $(document).ready(function () {
            var unique_id = $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: 'Welcome to Black Magik!',
                // (string | mandatory) the text inside the notification
                text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
                // (string | optional) the image to display on the left
                image: 'assets/img/ui-sam.jpg',
                // (bool | optional) if you want it to fade out on its own or just sit there
                sticky: true,
                // (int | optional) the time you want it to be alive for before fading out
                time: '',
                // (string | optional) the class name you want to apply to that specific message
                class_name: 'my-sticky-class'
            });

            return false;
            });
    	</script>
@endif
    	<script type="application/javascript">
            $(document).ready(function () {
                $("#date-popover").popover({html: true, trigger: "manual"});
                $("#date-popover").hide();
                $("#date-popover").click(function (e) {
                    $(this).hide();
                });

                $("#my-calendar").zabuto_calendar({
                    action: function () {
                        return myDateFunction(this.id, false);
                    },
                    action_nav: function () {
                        return myNavFunction(this.id);
                    },
                    ajax: {
                        url: "show_data.php?action=1",
                        modal: true
                    },
                    legend: [
                        {type: "text", label: "Special event", badge: "00"},
                        {type: "block", label: "Regular event", }
                    ]
                });
            });


            function myNavFunction(id) {
                $("#date-popover").hide();
                var nav = $("#" + id).data("navigation");
                var to = $("#" + id).data("to");
                console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
            }
        </script>


</body>
</html>
