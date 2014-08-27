<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Template &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/datepicker/css/datepicker.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/tags/css/jquery.tagsinput.css') }}" rel="stylesheet">
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

    </style>
    <link href="{{ URL::asset('assets/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">

  </head>

  <body>
    <?php echo $taskform; ?>
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
        <a href="#myModal" id="add-task" class="btn pull-right"><i class="icon-plus"></i>Add Task</a>
        <table class="table">
          <thead>
            <tr>
              <th>Task</th>
              <th>Due</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($items as $item)
                <tr id="{{$item->id}}">
                  <td>{{$item->title}}</td>
                  <td> {{ $item->getFormattedDueDate() }}</td>
                  <td>
                    <button class="btn item-edit"><i class="icon-edit"></i></button>
                    <button class="btn item-delete"><i class="icon-trash"></i></button>
                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>

      <hr>

      <div class="footer">
        <p>&copy; Company 2013</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ URL::asset('assets/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ URL::asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ URL::asset('assets/tags/js/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/todo.js') }}"></script>
  </body>
</html>
