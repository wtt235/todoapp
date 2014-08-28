<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>To Do - Create User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
  </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <h3 class="muted">To Do</h3>
      </div>

      <hr>

    {{ Form::open(array('url' => 'user/create', 'id'=>'user-form')) }}
        <h2 class="form-signin-heading">New User</h2>
        <input name="email" id="inputEmail" type="text" class="input-block-level" placeholder="Email address">
        <input name="password" id="inputPassword" type="password" class="input-block-level" placeholder="Password">
        <input name="password-again" id="inputPasswordAgain" type="password" class="input-block-level" placeholder="Password Again">
        {{ Form::submit('Create', array('class' => 'btn btn-large btn-primary', 'id' => 'submit-user', 'disabled')) }}
        <a class="btn btn-large" href="{{ URL::to('/') }}">Cancel</a>
    {{ Form::close() }}
      <div class="footer">
        <p>&copy; I made this!</p>
      </div>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <script src="{{ URL::asset('assets/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/create-user.js') }}"></script>
  </body>
</html>
