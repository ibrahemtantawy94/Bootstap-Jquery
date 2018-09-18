<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- علشان البوتستراب يشتغل على انترنت اكسبلورر !-->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- علشان البوتستراب يشتغل على الموبايل !-->
    <title>Bootstrap Trainning</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/default-theme.css">
    <link rel="stylesheet" href="css/hover.css" media="all">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]--> 
</head>

<body>
    
    <!--Start Tool Box -->
        <section class="tool-box">
            <div class="color-option">
                <h4>Color Option</h4>
                <ul class="list-unstyled">
                    <li data-value="css/default-theme.css"></li>
                    <li data-value="css/nice-theme.css"></li>
                    <li data-value="css/blue-theme.css"></li>
                    <li data-value="css/purpel-theme.css"></li>
                </ul>
            </div>
            <i class="fa fa-gear fa-3x gear-check"></i>
        </section>
    <!--End Tool Box -->
    
    <!-- Start Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand pop" href="#">Clasico <span>Inc.</span></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Company</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Programming</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Desktop</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Web Hosting</a></li>
          </ul>
        </li>
        <li><a href="#">Map</a></li>
        <li><a href="#">Contacts</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- End Navbar -->
    
<!-- Start Carosul -->
    <section id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators hidden-xs">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/01.jpg" alt="1">
      <div class="carousel-caption hidden-xs">
          <h1>programming</h1>
          <p>Transition animations not supported in Internet Explorer 8 & 9Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 & 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.
          </p>
      </div>
    </div>
    <div class="item">
      <img src="img/02.jpg" alt="2">
      <div class="carousel-caption hidden-xs">
          <h1>Web Design</h1>
          <p>Transition animations not supported in Internet Explorer 8 & 9Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 & 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.
          </p>
      </div>
    </div>
      <div class="item">
      <img src="img/03.jpg" alt="3">
      <div class="carousel-caption hidden-xs">
          <h1>Desktop</h1>
          <p>Transition animations not supported in Internet Explorer 8 & 9Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 & 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.
          </p>
      </div>
    </div>
      <div class="item">
      <img src="img/04.jpg" alt="4">
      <div class="carousel-caption hidden-xs">
          <h1>Web Hosting</h1>
          <p>Transition animations not supported in Internet Explorer 8 & 9Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 & 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.
          </p>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</section>
<!-- End Carosul -->
    
<!-- Start About -->
    <section class="about text-center">
       <div class="container">
         <h1>Meet Our New Template <span>Clasico Inc.</span></h1>
        <h3>Hello Let Me Introduce Our Template Clasico Inc. Created With All The Love With <strong>Bootstrap</strong> 3.2.0</h3>
        </div>
    </section>
<!-- End About -->
<!-- Start Features -->
    <section class="features text-center">
        <div class="container">
            <h1>Our Features</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="feat buzz-out">
                    <span class="glyphicon glyphicon-ok fa-2x"></span>
                    <h4>100% Responsive</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feat buzz-out">
                    <span class="glyphicon glyphicon-thumbs-up fa-2x"></span>
                    <h4>Retina Ready</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feat buzz-out">
                    <span class="glyphicon glyphicon-eye-open fa-2x"></span>
                    <h4>Awesome Display</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feat buzz-out">
                    <span class="glyphicon glyphicon-pencil fa-2x"></span>
                    <h4>Well Documented</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End Features -->
    
<!-- Start Testimonials -->
    <section class="testi text-center">
       <div class="container"> 
        <h1>What Our Clients Say</h1>
    <!-- Start Carosul -->
        <div id="carousel-example" class="carousel slide " data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <p class="lead">Transition animations not supported in Internet Explorer 8 &amp; 9Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 &amp; 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.
            </p>
            <span>Ali Tantawy</span>
        </div>
        <div class="item">
          <p class="lead">Transition animations not supported in Internet Explorer 8 &amp; 9Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 &amp; 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.
            </p>
            <span>White Beard</span>
        </div>
          <div class="item">
         <p class="lead">Transition animations not supported in Internet Explorer 8 &amp; 9Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 &amp; 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.
              </p>
              <span>Shanks</span>
        </div>
          <div class="item">
         <p class="lead">Transition animations not supported in Internet Explorer 8 &amp; 9Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 &amp; 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.
              </p>
              <span>Leo Messi</span>
        </div>
          <ol class="carousel-indicators">
            <li data-target="#carousel-example" data-slide-to="0" class="active">
              <img src="img/avatar_01.jpg">
              </li>
            <li data-target="#carousel-example" data-slide-to="1">
              <img src="img/avatar_02.jpg">
              </li>
            <li data-target="#carousel-example" data-slide-to="2">
              <img src="img/avatar_03.jpg">
              </li>
            <li data-target="#carousel-example" data-slide-to="3">
              <img src="img/avatar_04.jpg">
              </li>
          </ol>
      </div>
    </div>
    
<!-- End Carosul -->
</div>           
    </section>
<!-- End Testimonials -->
    
<!-- Start Our Prices -->
    <section class="our-prices text-center">
        <div class="container">
            <h1>Our Amazing Prices</h1>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="price">
                        <h2 class="text-primary">Hosting</h2>
                        <div class="center-block circle">$40</div> <!--center-box دى بتخلى الصور او الديفات فى النص -->
                        <ul class="list-unstyled">
                        <li>Space: 30GB</li>
                        <li>Emails: 20</li>
                        <li>Ips: 2 IP</li>
                        <li>Databases: 10</li>
                        <li>Ftp Accounts: 5</li>
                        </ul>
                        <button class="btn btn-primary">Order Now</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="price">
                        <h2 class="text-success">Vps</h2>
                        <div class="center-block circle">$50</div>
                        <ul class="list-unstyled">
                        <li>Space: 40GB</li>
                        <li>Emails: 30</li>
                        <li>Ips: 4 IP</li>
                        <li>Databases: 15</li>
                        <li>Ftp Accounts: 5</li>
                        </ul>
                        <button class="btn btn-success">Order Now</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="price">
                        <h2 class="text-info">Dedicated</h2>
                        <div class="center-block circle">$60</div>
                        <ul class="list-unstyled">
                        <li>Space: 40GB</li>
                        <li>Emails: 40</li>
                        <li>Ips: 5 IP</li>
                        <li>Databases: 20</li>
                        <li>Ftp Accounts: 10</li>
                        </ul>
                        <button class="btn btn-info">Order Now</button>
                    </div>
                </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="price">
                        <h2 class="text-danger">Cloud</h2>
                        <div class="center-block circle">$30</div>
                        <ul class="list-unstyled">
                        <li>Space: 30GB</li>
                        <li>Emails: 10</li>
                        <li>Ips: 2 IP</li>
                        <li>Databases: 10</li>
                        <li>Ftp Accounts: 5</li>
                        </ul>
                        <button class="btn btn-danger">Order Now</button>
                    </div>
                </div>
            
            </div>
        </div>
    </section>
<!-- End Our Prices -->
    
<!-- Start Our Team -->
    <section class="our-team text-center">
        <div class="overlay">
        <div class="container">
            <h1>Meet Our Awesome Team</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="person pulse-grow">
                        <img class="img-circle" src="img/chris.jpg">
                        <h3>Chris Coyier</h3>
                        <P>This Is Chris Coyier The Founder Of The Amazing Website Css-Tricks</P>
                        <i class="fa fa-google-plus fa-lg"></i> 
                        <i class="fa fa-facebook fa-lg"></i>
                        <i class="fa fa-twitter fa-lg"></i>         <!--font awesome دى مكتبة ال -->
                        <i class="fa fa-youtube fa-lg"></i>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="person pulse-grow">
                        <img class="img-circle" src="img/leah.jpg">
                        <h3>Leah Culver</h3>
                        <P>This Is Amazing Hacker Woman With A Much Knowledge In Hacking Systems</P>
                        <i class="fa fa-google-plus fa-lg"></i>
                        <i class="fa fa-facebook fa-lg"></i>
                        <i class="fa fa-twitter fa-lg"></i>
                        <i class="fa fa-youtube fa-lg"></i>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="person pulse-grow">
                        <img class="img-circle" src="img/steve.jpg">
                        <h3>Steve Jobs</h3>
                        <P>This Is The Man Who Change The World With His Apple Products</P>
                        <i class="fa fa-google-plus fa-lg"></i>
                        <i class="fa fa-facebook fa-lg"></i>
                        <i class="fa fa-twitter fa-lg"></i>
                        <i class="fa fa-youtube fa-lg"></i>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="person pulse-grow">
                        <img class="img-circle" src="img/marissa.jpg">
                        <h3>Marissa Mayer</h3>
                        <P>This Is Amazing Hacker Woman With A Much Knowledge In Hacking Systems</P>
                        <i class="fa fa-google-plus fa-lg"></i>
                        <i class="fa fa-facebook fa-lg"></i>
                        <i class="fa fa-twitter fa-lg"></i>
                        <i class="fa fa-youtube fa-lg"></i>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<!-- End Our Team -->
    
<!-- Start Subscribe -->
    <section class="subscribe text-center">
        <div class="container">
            <h1>Keep in Touch</h1>
            <p class="lead">
            Sign Up For News Letter Don't Worry About Spam We Hate It Too.</p>
            <form>
                <input class="form-control input-lg" type="text" placeholder="Write Your Email">
                <button class="btn btn-danger btn-lg">
                    <i class="fa fa-edit fa-lg" style="margin-right:5px"></i> <!-- ايقونة الفونت اوسم ومديها مارجين عشان تبعد عن الكلمه-->
                    Subscribe
                </button>
            </form>
        </div>
    </section>
<!-- End Subscribe -->

<!--Start Statistics -->
    <section class="statistics text-center">
        <div class="overlay">
            <div class="container">
                <h1>Our Main Statistics</h1>
                <div class="row">
                    <div class="col-lg-3 clo-md-6 col-xs-12">
                        <div class="stat">
                            <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                            <p>9,550</p>
                            <span>Satisfied Users</span>
                        </div>
                    </div>
                    <div class="col-lg-3 clo-md-6 col-xs-12">
                         <div class="stat">
                            <i class="fa fa-comments fa-5x" aria-hidden="true"></i>
                            <p>25,600</p>
                            <span>Posted Comments</span>
                        </div>
                    </div>
                    <div class="col-lg-3 clo-md-6 col-xs-12">
                         <div class="stat">
                            <i class="fa fa-suitcase fa-5x" aria-hidden="true"></i>
                            <p>3,260</p>
                            <span>Projects Done</span>
                        </div>
                    </div>
                    <div class="col-lg-3 clo-md-6 col-xs-12">
                         <div class="stat">
                            <i class="fa fa-life-ring fa-5x" aria-hidden="true"></i>
                            <p>95,350</p>
                            <span>Tickets Archieved</span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>    
    </section>
<!-- End Statistics -->
    
<!-- Start Out-skils -->
    <section class="our-skills">
        <div class="container">
            <h1 class="text-center">Our Skills</h1>
            <div cass="row">
                <div class="col-md-5">
                    <div class="skill-prgress">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active progress-bar-success"role="progressbar" aria-valuenow="80" aria-valuemin="0" ariavaluemax="100" style="width:80%">Html5 / Css3</div>
                        </div>
                         <div class="progress">
                            <div class="progress-bar progress-bar-striped active progress-bar-danger"role="progressbar" aria-valuenow="85" aria-valuemin="0" ariavaluemax="100" style="width:85%">javascript / Jquery</div>
                        </div>
                         <div class="progress">
                            <div class="progress-bar progress-bar-striped active progress-bar-primary"role="progressbar" aria-valuenow="90" aria-valuemin="0" ariavaluemax="100" style="width:90%">PHP / MySQL</div>
                        </div>
                         <div class="progress">
                            <div class="progress-bar progress-bar-striped active progress-bar-warning"role="progressbar" aria-valuenow="70" aria-valuemin="0" ariavaluemax="100" style="width:70%">Wordpress</div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-md-offset-1">
                    <div class="skills-info">
                        <h3>About The Team</h3>
                        <p class="lead">We Are Specialised Desiging And Programming Team Passionate About Web Design And Creatin Digital Ideas We Will Transfer Your Idea To A Digital Dream And Make Your Wish Come True</p>
                        <button class="btn btn-primary">Talk With A Professional</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End Out-skils -->
  
<!-- Start Contact-us -->
    <section class="contact-us text-center">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <i class="fa fa-headphones fa-5x" aria-hidden="true"></i>
                    <h1>Tell Us What You Fell</h1>
                    <p class="lead">Feel Free To Contact Us Anytime</p>
                        <form role="form">
                        <div class="col-md-6">
                        <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Username">
                        </div>
                         <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Email">
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Cell Phone">
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control input-lg" style="margin-bottom:10px" placeholder="Message"></textarea>
                                <button type="button" class="btn btn-danger btn-lg btn-block">Contact Us </button>
                            </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<!-- End Contact-us -->
    
<!-- Start Our-Clients -->
    <section class="our-clients">
        <div class="container">
            <div class="row">
               <ul class="list-unstyled">
                 <li class="col-md-2 col-xs-4">
                    <img class="image-responsive center-block" src="img/our-clients/bbc.png">
                </li>
                 <li class="col-md-2 col-xs-4">
                    <img class="image-responsive center-block" src="img/our-clients/cnn.png">
                </li>
                 <li class="col-md-2 col-xs-4">
                    <img class="image-responsive center-block" src="img/our-clients/forbes.png">
                </li>
                 <li class="col-md-2 col-xs-4">
                    <img class="image-responsive center-block" src="img/our-clients/techradar.png">
                </li>
                 <li class="col-md-2 col-xs-4 col-xs-4">
                    <img class="image-responsive center-block" src="img/our-clients/wired.png">
                </li>
                 <li class="col-md-2 col-xs-4">
                    <img class="image-responsive center-block" src="img/our-clients/wsj.png">
                </li>
                </ul>
            </div>
        </div>
    </section>
<!-- End Our-Clients -->

<!-- Start Footer -->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <h3>Site Map</h3>
                    <ul class="list-unstyled three-columns">
                        <li>Home</li>
                        <li>About</li>
                        <li>Company</li>
                        <li>Code</li>
                        <li>Design</li>
                        <li>Host</li>
                        <li>Solutions</li>
                        <li>SiteMap</li>
                        <li>Contact</li>
                    </ul>
                    <ul class="list-unstyled social-list">
                        <li><img src="img/social-bookmarks/facebook.png"></li>
                        <li><img src="img/social-bookmarks/twitter.png"></li>
                        <li><img src="img/social-bookmarks/gplus.png"></li>
                        <li><img src="img/social-bookmarks/pinterest.png"></li>
                        <li><img src="img/social-bookmarks/rss.png"></li>
                        <li><img src="img/social-bookmarks/email.png"></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h3>Latest Articles</h3>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="img/articles/01.jpg">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Programing</h4>
                            This Is Some Text About Programming Describe The Media Of Bootstrap 3.2.0
                        </div>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="img/articles/02.jpg">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Coding</h4>
                            This Is Some Text About Programming Describe The Media Of Bootstrap 3.2.0
                        </div>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="img/articles/03.jpg">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">WebDesign</h4>
                            This Is Some Text About Programming Describe The Media Of Bootstrap 3.2.0
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h3>Our Awesome Work</h3>
                    <img class="img-thumbnail" src="img/work/01.jpg">
                    <img class="img-thumbnail" src="img/work/02.jpg">
                    <img class="img-thumbnail" src="img/work/03.jpg">
                    <img class="img-thumbnail" src="img/work/04.jpg">
                </div>
            </div>
        </div>
        <div class="copyright text-center">
        Copyright &copy; 2017 <span>Clasico</span> inc. All Rights Reserved
        </div>
    </section>
<!-- End Footer -->
    
<!-- Start Loading Page -->
    <section class="loading-overlay">
            <div align="center" class="cssload-fond">
	       <div class="cssload-container-general">
			<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_1"> </div></div>
			<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_2"> </div></div>
			<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_3"> </div></div>
			<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_4"> </div></div>
	       </div>
            </div>
    </section>
<!-- End Loading Page -->
    
<!-- Start Scroll to top -->
    <section id="scroll-top">
        <i class="fa fa-chevron-up fa-3x"></i>
    </section>
<!-- End Scroll to top -->


    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.nicescroll.min.js"></script> 
    <script src="js/plugins.js"></script> 
    <script src="js/wow.js"></script>
    <script> new WOW().init(); </script>
    
</body>
</html>