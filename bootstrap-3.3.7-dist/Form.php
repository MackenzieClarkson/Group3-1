
<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

      <title>Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <link href="css/carousel.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link href="css/formValidation.min.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
  <!--   This links to all of the selectors required by the lab outline     -->
  </head>
  <body>
<!-- NAVBAR================================================== -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Toronto Sports Fans</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php#head2">Trending <span class="sr-only">(current)</span></a></li>
        <li><a href="index.php#head1">News</a></li>
        <li><a href="index.php#head3">Highlights</a></li>
        <li><a href="index.php#head4">Stats</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li><a href="plots.html">Plots</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">

<form class="form-horizontal" name="signinForm" id="signinForm">

  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username" placeholder="Jane Doe">
    </div>
  </div>

  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
  </div>

  <div class="form-group">
    <label for="choose1" class="col-sm-2 control-label">Favourite Sport</label>
    <div class="col-sm-10">
      <select class="form-control" id="choose1" name="choose1">
        <option>Favourite Sport</option>
        <option value="1">Hockey</option>
        <option value="2">Baseball</option>
        <option value="3">Basketball</option>
        <option value="4">Football</option>
      </select>
    </div>
  </div>

  <div class="form-group">
      <label for="inlineCheckbox[]" class="col-sm-2 control-label">Favourite Sport</label>
      <div class="col-sm-10" >
        <div class="checkbox">
        <label><input type="checkbox" name="inlineCheckbox[]" id="inlineCheckbox[]" value="option1"> 1 </label>
        <label><input type="checkbox" name="inlineCheckbox[]" id="inlineCheckbox[]" value="option2"> 2 </label>
        <label><input type="checkbox" name="inlineCheckbox[]" id="inlineCheckbox[]" value="option3"> 3 </label>
        </div>
      </div>
  </div>

  <div class="form-group">
    <label for="inlineRadioOptions" class="col-sm-2 control-label">Favourite Sport</label>
    <div class="col-sm-10">
      <div class="radio">
      <label><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1 </label>
      <label><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2 </label>
      <label><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3 </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="text1" class="col-sm-2 control-label">Comments</label>
    <div class="col-sm-10">
    <textarea name="text1" id="text1" class="form-control" rows="3"></textarea>
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit"  name="formSubmit"class="btn btn-primary" >Sign in</button>
    </div>
  </div>
</form>

</div>

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <script src="js/formValidation.min.js"></script>
      <script src="js/framework/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#signinForm').formValidation({
              framework: 'bootstrap',
              icon: {
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
              },
              fields: {
                  username: {
                      validators: {
                          notEmpty: {
                              message: 'The username is required'
                          },

                      }
                  },
                  email: {
                    validators: {
                      notEmpty: {
                        message: 'The email is required'
                      },
                    }
                  },
                  password: {
                    validators: {
                      notEmpty: {
                        message: 'The password is required'
                      },
                      stringLength: {
                       min: 6,
                       max: 30,
                       message: 'The name must be more than 6 and less than 30 characters long'
                     },
                     regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The name can only consist of alphabetical, number and underscore'
                      }

                    }
                  },
                  'inlineCheckbox[]': {
                    validators: {
                      notEmpty: {
                        message: 'The size is required'
                      }
                    }
                  },
                  inlineRadioOptions: {
                    validators: {
                      notEmpty: {
                        message: 'The availability option is required'
                      }
                    }
                  },
                  choose1: {
                    validators: {
                      notEmpty: {
                        message: 'The availability option is required'
                      }
                    }
                  },
                  text1: {
                    validators: {
                      notEmpty: {
                        message: 'The availability option is required'
                      }
                    }
                  }


              }
          });
      });
    </script>

  </body>
</html>
