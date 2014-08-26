<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign in &middot; Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="{{ URL::asset('assets/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
  </head>

  <body>

    <div class="container">

    {{ Form::open(array('url' => 'user/login', 'class' => 'form-signin')) }}
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="email" type="text" class="input-block-level" placeholder="Email address">
        <input name="password" type="password" class="input-block-level" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        {{ Form::submit('Sign In', array('class' => 'btn btn-large btn-primary')) }}
    {{ Form::close() }}

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ URL::asset('assets/js/jquery-1.11.1.min.js') }}"></script>
    {{--<script src="../assets/js/bootstrap-transition.js"></script>--}}
    {{--<script src="../assets/js/bootstrap-alert.js"></script>--}}
    {{--<script src="../assets/js/bootstrap-modal.js"></script>--}}
    {{--<script src="../assets/js/bootstrap-dropdown.js"></script>--}}
    {{--<script src="../assets/js/bootstrap-scrollspy.js"></script>--}}
    {{--<script src="../assets/js/bootstrap-tab.js"></script>--}}
    {{--<script src="../assets/js/bootstrap-tooltip.js"></script>--}}
    {{--<script src="../assets/js/bootstrap-popover.js"></script>--}}
    {{--<script src="../assets/js/bootstrap-button.js"></script>--}}
    {{--<script src="../assets/js/bootstrap-collapse.js"></script>--}}
    {{--<script src="../assets/js/bootstrap-carousel.js"></script>--}}
    {{--<script src="../assets/js/bootstrap-typeahead.js"></script>--}}

  </body>
</html>