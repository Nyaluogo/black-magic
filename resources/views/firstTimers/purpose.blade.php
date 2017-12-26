@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">What would you like you achieve?</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('purpose') }}">
                        {{ csrf_field() }}



                        <!-- INPUT MESSAGES -->
          	<div class="row mt">
          		<div class="col-lg-12">
          			<div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>What do you hope to achieve?</h4>
						<div class="checkbox">
						  <label>
						    <input type="checkbox" value="1" name="discover">
						    Discover art
						  </label>

              <label>
						    <input type="checkbox" value="1" name = "improve">
						    Improve my skills
						  </label>

              <label>
						    <input type="checkbox" value="1" name = "buy">
						    Buy art
						  </label>

              <label>
						    <input type="checkbox" value="1" name = "sell">
						    Sell art
						  </label>

              <label>
						    <input type="checkbox" value="1" name = "promote">
						    promote my art
						  </label>

              <label>
						    <input type="checkbox" value="1" name = "other">
						    other
						  </label>
						</div>


								</div><!-- /form-panel -->
          		</div><!-- /col-lg-12 -->

          	</div><!-- /row -->






                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
