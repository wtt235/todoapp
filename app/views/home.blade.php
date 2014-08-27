<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>To Do - Sign In</title>
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

    {{ Form::open(array('url' => 'user/login', 'class' => 'form-signin')) }}
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="email" type="text" class="input-block-level" placeholder="Email address">
        <input name="password" type="password" class="input-block-level" placeholder="Password">
        <label class="checkbox">
           {{ Form::checkbox('remember', 'yes') }} Remember me
        </label>
        {{ Form::submit('Sign In', array('class' => 'btn btn-large btn-primary')) }}
         <a class="btn btn-large" type="button" href="{{ URL::action('UserController@create') }}">New User</a>
    {{ Form::close() }}

    </div> <!-- /container -->
  </body>
</html>
