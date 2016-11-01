
<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

      <title>index lab1</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="css/formValidation.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="css/custom.css">

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
      <a class="navbar-brand" href="#">Toronto Sports Fans</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="#head2">Trending <span class="sr-only">(current)</span></a></li>
        <li><a href="#head1">News</a></li>
        <li><a href="#head3">Highlights</a></li>
        <li><a href="#head4">Stats</a></li>
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
        <li><a href="form.html">Form</a></li>
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


    <!-- Carousel
    ================================================== -->

        <!-- Carousel
        ================================================== -->
      <div class="container marketing">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">

            <div class="item active">
              <img class="first-slide" src="images/jose-bautista-flips-bat-after-three-run-homer_hfveysv7140w1vfcg3m6qmzw5.jpg" alt="First slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Toronto Sports Fans!</h1>
                  <p>Sign up for live updates!</p>
                  <p><a class="btn btn-lg btn-primary" href="#head2" role="button">Sign up today</a></p>
                </div>
              </div>
            </div>

            <div class="item">
              <img class="second-slide" src="images/red-people-outside-sport-large.jpg" alt="Second slide">

              <div class="container">
                <div class="carousel-caption">
                  <h1>Stats and Scores</h1>
                  <p><a class="btn btn-lg btn-primary" href="#head4" role="button">Click Here for Latest Stats</a></p>
                </div>
              </div>

            </div>

            <div class="item">
              <img class="third-slide" src="images/sport-united-states-of-america-ball-jump-large.jpg" alt="Third slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Pictures and Videos of the Action</h1>
                  <p>See this week's action!</p>
                  <p><a class="btn btn-lg btn-primary" href="#head3" role="button">Browse gallery</a></p>
                </div>
              </div>
            </div>

          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

<div class="jumbotron">

      <!-- Three columns of text below the carousel -->
      <div class="row featurette">
      <div class="row">
        <div class="col-lg-3">
          <img class="img-circle" src="images/sport-united-states-of-america-ball-jump-large.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Trending</h2>
          <p>Find out what is trending in the world of Toronto sports!</p>
          <p><a class="btn btn-default" href="#head2" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-3">
          <img class="img-circle" src="images/football-runner-ball-fight-40590-large.jpeg" alt="Generic placeholder image" width="140" height="140">
          <h2>News</h2>
          <p>Lets see what else is happening in Toronto!</p>
          <p><a class="btn btn-default" href="#head1" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <img class="img-circle" src="images/ice-hockey-goal-sport-team-38551-large.jpeg" alt="Generic placeholder image" width="140" height="140">
          <h2>Highlights</h2>
          <p>Videos of the sickest plays</p>
          <p><a class="btn btn-default" href="#head3" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <img class="img-circle" src="images/pexels-photo-29117-large.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Stats</h2>
          <p>All of Torontos sports stats in one convenient place</p>
          <p><a class="btn btn-default" href="#head4" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


    <!--  <div class="jumbotron">-->
      <div class="col-md-6">
        <h1 id="head2" class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h1>
        <p class="lead">A section where we keep track of trends in social media that involve Toronto sports</p>
      </div>
      <div class="col-md-6">
        <ol class="lead pad-top">
          <li> we keep track of whats going on in social media</li>
          <li> links to popular tweets in <a href="https://twitter.com/">twitter</a></li>
          <li> <a href="#">Comment</a> and share your thoughts!</li>
        </ol>
      </div>
    </div>




      <!-- START THE FEATURETTES -->

      <hr id="head1"class="featurette-divider"></hr>


      <div class="row featurette">

        <div class="col-md-5">

          <img  class="img-responsive pad-top" src="images/red-people-outside-sport-large.jpg" alt="Generic placeholder image">
        </div>

        <div class="col-md-7">
          <h1  class="featurette-heading">News <span class="text-muted">It'll blow your mind.</span></h1>
          <p class="lead">The most popular news stories from the media.  Keep up to date on all of your favorite teams at once</p>
        </div>

      </div>






      <hr id="head3" class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-6 pad-top">

          <iframe src="https://player.vimeo.com/video/183749755" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          <p><a href="https://vimeo.com/183749755">Canada v Europe L.ive S-tream. World Cup of Hockey 2016.</a> from <a href="https://vimeo.com/petegasol2k16">Pete Gasol</a> on <a href="https://vimeo.com">Vimeo</a>.</p>



        </div>
        <div class="col-md-6">
            <h1  class="featurette-heading">Highlights: <span class="text-muted">World Cup 2016</span></h1>
          <p class="lead pad-below">
                                    For almost 60 minutes minutes on Thursday evening Team Canada's run undefeated streak was threatened.
                                    "Just crazy the way everything worked out," Sidney Crosby said.
                                    It took two goals near the end of the game, including Brad Marchand's short-handed game-winner for
                                    Canada to erase all doubt. The end result was a second straight World Cup of Hockey crown, third straight
                                    best-on-best title and 16th consecutive victory under such circumstance.
          </p>
      </div>
    </div>
    <div class="row">
  <div class="col-md-6">
  </div>
  <div class="col-md-6">
      <ul class = "lead nodot ">
        <li>
          Canada won 2-1 in the final game against Europe
        </li>

        <li>
        </br>Canada was down 0-1 for the first two periods, scoring twice in the last 5 minutes
        </li>

        <li>
        </br>Second straight World Cup championship for Canada
        </li>
      </div>
    </div>



      <hr id="head4" class="featurette-divider"></hr>

      <div class="row featurette">

          <h1 class="featurette-heading">Stats <span class="text-muted">and Scores</span></h1>
          <p class="lead pad-below">A stats table that allows you to look up stats for your favorite teams.  Anything to lineups on gameday, to recorded stats of individual players</p>
      </div>
      <div class="row featurette">

        <table class = "table table-bordered table-hover">


        <tbody>

          <tr class="warning">
          <th class="text-center">variable heading1</td>
          <th class="text-center">variable heading1</td>
          <th class="text-center">variable heading1</td>
          <th class="text-center">variable heading1</td>
          </tr>

          <tr>
          <td class="text-center lead">Information stored in the database</td>
          <td class="text-center lead">Information stored in the database</td>
          <td class="text-center lead">Information stored in the database.</td>
          <td class="text-center lead">Information stored in the database</td>
          </tr>
          <tr>
          <td class="text-center lead">Information stored in the database</td>
          <td class="text-center lead">Information stored in the database</td>
          <td class="text-center lead">Information stored in the database.</td>
          <td class="text-center lead">Information stored in the database</td>
          </tr>


        </tbody>
        </table>

      </div>

      <hr class="featurette-divider">

    </div>
    </div>
  </div>

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->
  </div>

  </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/framework/bootstrap.min.js"></script>
    <script src="js/formValidation.min.js"></script>
  </body>
</html>
