@extends('layouts.app')
@section('content')


{{-- <div class="flex-center position-ref full-height" id="app">

            <div class="content">

                <upload csrf="{{ csrf_token() }}" action="/upload"></upload>

                <image-list url="/list"></image-list>

            </div>
        </div> --}}
        <section class="wrapper site-min-height">
          <h3><i class="fa fa-angle-right"></i> Discover Our Panels</h3>
          <div class="row mt">
            <div class="col-lg-12">

        <! -- 1st ROW OF PANELS -->
        <div class="row">

          <! -- Spotify Panel -->
          <div class="col-lg-4 col-md-4 col-sm-4 mb">
            <div class="content-panel pn">
              <div id="spotify" style="background: url({{$user->avatar}}) no-repeat center top;">
                <div class="col-xs-4 col-xs-offset-8">
                  @if(Auth::id() !== $user->id)
                    <friend :profile_user_id = {{ $user->id }}></friend>
                  @endif
                </div>
                <div class="sp-title">
                  <h3>{{ $user->name }}</h3>
                  @if(!empty($user->profile->type_of_artist) && !empty($user->profile->area_of_speciality))
                    <p> {{ $user->profile->type_of_artist }} | {{ $user->profile->area_of_speciality }} </p>
                  @endif
                </div>
                <div class="play">
                  @if(Auth::id() == $user->id)
                  <a href="{{ route('profile.edit') }}"><i class="fa fa-edit"></i></a>
                  @endif
                </div>
              </div>
              <p class="followers"><i class="fa fa-user"></i> 576,000 FOLLOWERS</p>
            </div>
          </div><! --/col-md-4-->

          <!-- TWITTER PANEL -->
          {{-- <div class="col-lg-4 col-md-4 col-sm-4 mb">
            <div class="twitter-panel pn">
              <i class="fa fa-twitter fa-4x"></i>
              <p>Dashgum is here! Take a look and enjoy this new Bootstrap Dashboard theme.</p>
              <p class="user">@Alvrz_is</p>
            </div>
          </div><!-- /col-md-4 --> --}}

          <div class="col-lg-4 col-md-4 col-sm-4 mb">
            <!-- WHITE PANEL - TOP USER -->
            <div class="white-panel pn">
              <div class="white-header">
                <h5>ABOUT ME</h5>
              </div>
              <p><img src="assets/img/ui-zac.jpg" class="img-circle" width="50"></p>

              @if(!empty($user->profile->biography))
                <p><b>{{ $user->profile->biography }}</b></p>
              @endif
            </div>
          </div><!-- /col-md-4 -->

          <div class="col-lg-4 col-md-4 col-sm-4 mb">
            <!-- INSTAGRAM PANEL -->
            <a href="{{ route('portfolio.view', ['id' => $user->id]) }}">
              <div class="instagram-panel pn">
                  <i class="fa fa-instagram fa-4x"></i>
                  <p>@THISISYOU<br/>
                    5 min. ago
                  </p>
                  <p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
              </div>
            </a>
          </div><!-- /col-md-4 -->
        </div><! --/END 1ST ROW OF PANELS -->

        <! -- 2ND ROW OF PANELS -->
        <div class="row">
          <! -- TODO PANEL -->
          <div class="col-lg-4 col-md-4 col-sm-4 mb">
            <div class="steps pn">
                <input id='op1' name='op1' type='checkbox' checked/>
                <label for='op1'>Update Profile</label>
                <input id='op2' name='op2' type='checkbox'/>
                <label for='op2'>Contact Paul</label>
                <input id='op3' name='op3' type='checkbox'/>
                <label for='op3'>Enjoy Life</label>
                <input type='submit' value='All Done!' id='submit'/>
            </div>
          </div><! --/col-md-4 -->

          <! -- PROFILE 01 PANEL -->
          <div class="col-lg-4 col-md-4 col-sm-4 mb">
            <div class="content-panel pn">
              <div id="profile-01">
                <h3>Sharon Holmes</h3>
                <h6>WEB DESIGNER</h6>
              </div>
              <div class="profile-01 centered">
                <p>ADD TO CONTACT LIST</p>
              </div>
              <div class="centered">
                <h6><i class="fa fa-envelope"></i><br/>SHARON@DASHGUMTHEME.COM</h6>
              </div>
            </div><! --/content-panel -->
          </div><! --/col-md-4 -->

          <! -- PROFILE 02 PANEL -->
          <div class="col-lg-4 col-md-4 col-sm-4 mb">
            <div class="content-panel pn">
              <div id="profile-02">
                <div class="user">
                  <img src="assets/img/friends/fr-06.jpg" class="img-circle" width="80">
                  <h4>DJ SHERMAN</h4>
                </div>
              </div>
              <div class="pr2-social centered">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
              </div>
            </div><! --/panel -->
          </div><!--/ col-md-4 -->
        </div><! --/END 2ND ROW OF PANELS -->

        <! -- 3RD ROW OF PANELS -->
        <!-- Product Panel -->
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 mb">
            <div class="product-panel-2 pn">
              <div class="badge badge-hot">My Orders</div>
              <img src="assets/img/product.jpg" width="200" alt="">

              <h5 class="mt">Flat Pack Heritage</h5>
              @foreach($orders as $order)
              <ul class="list-group">
                @foreach($order->cart->items as $item)
                  <li class="list-group-item">
                    <span class="badge">{{ $item['price'] }}</span>
                    {{ $item['item']['title'] }} | {{ $item['qty'] }} Units
                  </li>
                @endforeach
              </ul>
              <div class="panel-footer">
                <strong>Total price: {{ $order->cart->totalPrice }}</strong>
              </div>
            @endforeach
              <button class="btn btn-small btn-theme04">FULL REPORT</button>
            </div>
          </div><! --/col-md-4 -->

          <! -- Spotify Panel -->
          <div class="col-lg-4 col-md-4 col-sm-4 mb">
            <div class="content-panel pn">
              <div id="spotify">
                <div class="col-xs-4 col-xs-offset-8">
                  <button class="btn btn-sm btn-clear-g">FOLLOW</button>
                </div>
                <div class="sp-title">
                  <h3>LORDE</h3>
                </div>
                <div class="play">
                  <i class="fa fa-play-circle"></i>
                </div>
              </div>
              <p class="followers"><i class="fa fa-user"></i> 576,000 FOLLOWERS</p>
            </div>
          </div><! --/col-md-4-->

          <! -- Blog Panel -->
          <div class="col-lg-4 col-md-4 col-sm-4 mb">
            <div class="content-panel pn">
              <div id="blog-bg">
                <div class="badge badge-popular">POPULAR</div>
                <div class="blog-title">Incredible Title</div>
              </div>
              <div class="blog-text">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a href="#">Read More</a></p>
              </div>
            </div>
          </div><!-- /col-md-4-->
        </div><! -- END 3RD ROW OF PANELS -->

                    <!-- CHART PANELS -->
                    <div class="row">
                      <div class="col-md-4 col-sm-4 mb">
                        <div class="grey-panel pn donut-chart">
                          <div class="grey-header">
                  <h5>SERVER LOAD</h5>
                          </div>
              <canvas id="serverstatus01" height="120" width="120"></canvas>
              <script>
                var doughnutData = [
                    {
                      value: 70,
                      color:"#FF6B6B"
                    },
                    {
                      value : 30,
                      color : "#fdfdfd"
                    }
                  ];
                  var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
              </script>
              <div class="row">
                <div class="col-sm-6 col-xs-6 goleft">
                  <p>Usage<br/>Increase:</p>
                </div>
                 <div class="col-sm-6 col-xs-6">
                  <h2>21%</h2>
                 </div>
                          </div>
                        </div><! --/grey-panel -->
                      </div><!-- /col-md-4-->


                      <div class="col-md-4 col-sm-4 mb">
                        <div class="darkblue-panel pn">
                          <div class="darkblue-header">
                  <h5>DROPBOX STATICS</h5>
                          </div>
              <canvas id="serverstatus02" height="120" width="120"></canvas>
              <script>
                var doughnutData = [
                    {
                      value: 60,
                      color:"#1c9ca7"
                    },
                    {
                      value : 40,
                      color : "#f68275"
                    }
                  ];
                  var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
              </script>
              <p>April 17, 2014</p>
              <footer>
                <div class="pull-left">
                  <h5><i class="fa fa-hdd-o"></i> 17 GB</h5>
                </div>
                <div class="pull-right">
                  <h5>60% Used</h5>
                </div>
              </footer>
                        </div><! -- /darkblue panel -->
                      </div><!-- /col-md-4 -->

                      <div class="col-md-4 col-sm-4 mb">
              <div class="green-panel pn">
                <div class="green-header">
                  <h5>DISK SPACE</h5>
                </div>
              <canvas id="serverstatus03" height="120" width="120"></canvas>
              <script>
                var doughnutData = [
                    {
                      value: 60,
                      color:"#2b2b2b"
                    },
                    {
                      value : 40,
                      color : "#fffffd"
                    }
                  ];
                  var myDoughnut = new Chart(document.getElementById("serverstatus03").getContext("2d")).Doughnut(doughnutData);
              </script>
              <h3>60% USED</h3>
              </div>
            </div><! --/col-md-4 -->
                  </div><!-- /END CHART - 4TH ROW OF PANELS -->


        <! -- 5TH ROW OF PANELS -->
        <div class="row">
          <div class="col-md-4 col-sm-4 mb">
            <!-- REVENUE PANEL -->
            <div class="green-panel pn">
              <div class="green-header">
                <h5>REVENUE</h5>
              </div>
              <div class="chart mt">
                <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
              </div>
              <p class="mt"><b>$ 17,980</b><br/>Month Income</p>
            </div>
          </div><!-- /col-md-4 -->

                      <div class="col-md-4 col-sm-4 mb">
                <div class="stock card">
                  <div class="stock-chart">
                      <div id="chart"></div>
              </div>
              <div class="stock current-price">
                <div class="row">
                      <div class="info col-sm-6 col-xs-6"><abbr>AAPL</abbr>
                          <time>Yesterday</time>
                  </div>
                <div class="changes col-sm-6 col-xs-6">
                  <div class="value up"><i class="fa fa-caret-up hidden-sm hidden-xs"></i> 694.00</div>
                  <div class="change hidden-sm hidden-xs">+4.95 (3.49%)</div>
                </div>
                </div>
              </div>
              <div class="summary">
                      <strong>18.3 M</strong> <span>SHARES TRADED</span>
              </div>
                </div>
          </div><! -- /col-md-4 -->

                      <div class="col-md-4 col-sm-4 mb">
                        <div class="darkblue-panel pn">
                          <div class="darkblue-header">
                  <h5>SITE STATICS</h5>
                          </div>
                          <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
              <p>+ 1,789 NEW VISITS</p>
              <footer>
                <div class="centered">
                  <h5><i class="fa fa-trophy"></i> 17,988</h5>
                </div>
              </footer>
                        </div><! -- /darkblue panel -->
                      </div><!-- /col-md-4 -->
                  </div><!-- /END 5TH ROW OF PANELS -->


        <! -- 6TH ROW OF PANELS -->
        <div class="row">
          <!-- WEATHER PANEL -->
                      <div class="col-md-4 col-sm-4 mb">
            <div class="weather pn">
              <i class="fa fa-cloud fa-4x"></i>
              <h2>11º C</h2>
              <h4>BUDAPEST</h4>
            </div>
          </div><!-- /col-md-4-->

          <!-- WEATHER-2 PANEL -->
          <div class="col-lg-4 col-md-4 col-sm-4 mb">
            <div class="weather-2 pn">
              <div class="weather-2-header">
                <div class="row">
                  <div class="col-sm-6 col-xs-6">
                    <p>NEW YORK</p>
                  </div>
                  <div class="col-sm-6 col-xs-6 goright">
                    <p class="small">Thu Apr 14, 2014</p>
                  </div>
                </div>
              </div><!-- /weather-2 header -->
              <div class="row centered">
                <img src="assets/img/ny.jpg" class="img-circle" width="120">
              </div>
              <div class="row data">
                <div class="col-sm-6 col-xs-6 goleft">
                  <h4><b>16 ºC</b></h4>
                  <h6>21º max</h6>
                  <h6>8º min</h6>
                </div>
                <div class="col-sm-6 col-xs-6 goright">
                  <h5><i class="fa fa-sun-o fa-2x"></i></h5>
                  <h6><b>Sunny</b></h6>
                  <h5>7:15 am</h5>
                </div>
              </div>
            </div>
          </div><! --/col-md-4 -->

          <!-- WEATHER-3 PANEL -->
          <div class="col-lg-4 col-md-4 col-sm-4 mb">
            <div class="weather-3 pn centered">
              <i class="fa fa-sun-o"></i>
              <h1>30º C</h1>
              <div class="info">
                <div class="row">
                    <h3 class="centered">MADRID</h3>
                  <div class="col-sm-6 col-xs-6 pull-left">
                    <p class="goleft"><i class="fa fa-tint"></i> 13%</p>
                  </div>
                  <div class="col-sm-6 col-xs-6 pull-right">
                    <p class="goright"><i class="fa fa-flag"></i> 15 MPH</p>
                  </div>
                </div>
              </div>
            </div>
          </div><! --/col-md-4 -->
        </div><!-- /END 6TH ROW OF PANELS -->


            </div>
          </div>

  </section>



    <div>
  <post></post>

</div>

  <div class="container pull-left">
    <div class="col-lg-4">
        <div class="panel panel-default">
          <div class="panel-heading">
              <strong>{{ $user->name }}'s Profile.</strong>
          </div>
          <div class="panel panel-default">
            <div class="panel-body">
            <center>
                <img src="{{ $user->avatar }}" width="90px" height="90px" style="border-radius:50px;" alt="avatar">
            </center>
            <br>

            <div class="text-center">
              <p>{{ $user->age }} years old</p>
            </div>

            <div class="text-center">
              {{-- <p>{{ $user->profile->city }}, {{ $user->profile->country }}</p> --}}
            </div>

            <div class="text-center">
              {{-- <p>{{ $user->profile->type_of_artist }}/{{ $user->profile->area_of_specialty }}</p> --}}
            </div>

            <p class="text-center">
                @if(Auth::id() == $user->id)
                <a href="{{ route('profile.edit') }}" class="btn btn-sm btn-info">edit profile</a>
                @endif
            </p>
            </div>

          </div>
        </div>
        @if(Auth::id() !== $user->id)

          <div class="panel panel-default">
            <div class="body">
              <friend :profile_user_id = {{ $user->id }}></friend>
            </div>
          </div>

        @endif
        <div class="panel panel-default">
          <div class="panel-heading">
              <strong>About me</strong>
          </div>
          <div class="panel-body">
              <p class = "text-center">
                {{-- {{ $user->profile->biography }} --}}
              </p>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
              <strong>Contact information</strong>
          </div>
          <div class="panel-body">
              <div class = "text-center">
                {{-- <p>Phone Number: {{ $user->profile->phone_number }}</p> --}}
                {{-- <p>Website: <a href="http:\\{{ $user->profile->website }}">{{ $user->profile->website }}</a></p> --}}
              </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
              <strong>Favourite Artist/Designer</strong>
          </div>
          <div class="panel-body">
              <p class = "text-center">
                {{-- {{ $user->profile->fav_visual_artist }} --}}
              </p>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
              <strong>Favourite Music</strong>
          </div>
          <div class="panel-body">
              <p class = "text-center">
                {{-- {{ $user->profile->fav_music }} --}}
              </p>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
              <strong>Favourite Movies</strong>
          </div>
          <div class="panel-body">
              <p class = "text-center">
                {{-- {{ $user->profile->fav_movies }} --}}
              </p>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
              <strong>Favourite Books</strong>
          </div>
          <div class="panel-body">
              <p class = "text-center">
                {{-- {{ $user->profile->fav_books }} --}}
              </p>
          </div>
        </div>

    </div>

  </div>
@stop
