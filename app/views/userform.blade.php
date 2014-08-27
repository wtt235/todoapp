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
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
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

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <h3 class="muted">Project name</h3>
      </div>

      <hr>

    {{ Form::open(array('url' => 'user/create', 'id'=>'user-form')) }}
        <h2 class="form-signin-heading">New User</h2>
        <input name="email" id="inputEmail" type="text" class="input-block-level" placeholder="Email address">
        <input name="password" id="inputPassword" type="password" class="input-block-level" placeholder="Password">
        <input name="password-again" id="inputPasswordAgain" type="password" class="input-block-level" placeholder="Password Again">
        {{ Form::submit('Create', array('class' => 'btn btn-large btn-primary', 'id' => 'submit-user', 'disabled')) }}
    {{ Form::close() }}

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <script src="{{ URL::asset('assets/js/jquery-1.11.1.min.js') }}"></script>
    <script type="text/javascript">
        var $form = $('#user-form');
        var $emailInput = $('#inputEmail');
        var $passwordInput = $('#inputPassword');
        var $passwordAgainInput = $('#inputPasswordAgain');
        $form.keyup(function(){
            var notEmpty = $emailInput.val() !== '' && $emailInput.val() !== '' &&
                $passwordInput.val() !== '' && $passwordAgainInput.val() != '';
            var passwordsMatch =  $passwordInput.val() === $passwordAgainInput.val();
            if(notEmpty && passwordsMatch){
                $('#submit-user').removeAttr('disabled');
            }else{
                $('#submit-user').attr('disabled','disabled');
            }
        });
    </script>
  </body>
</html>
