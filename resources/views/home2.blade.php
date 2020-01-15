<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="We are a software development and Information security company from Trivandrum, Kerala and a focus on the latest technologies. we are passionate about delivering strong, robust software solutions to our clients.">
    <meta name="keywords" content="magis">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MAGIS CLOUDS : Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/magis.png">
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen"> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"> 
    <!-- Progress bar  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"> 
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <!-- Lato for Title -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css">.fancybox-margin{margin-right:17px;}</style></head>

  <body style="overflow: visible;">
  
  <!-- BEGAIN PRELOADER -->
  <div id="preloader" style="display: none;">
    <div id="status" style="display: none;">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#" style="display: none;"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header -->
  <header id="header">
    <!-- header top search -->
    <div class="header-top">
      <div class="container">
        <form action="">
          <div id="search">
          <input type="text" placeholder="Type your search keyword here and hit Enter..." name="s" id="m_search" style="display: inline-block;">
          <button type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
        </form>
      </div>
    </div>
    <!-- header bottom -->
    <div class="header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="header-contact">
              <ul>
                <li>
                  <div class="phone">
                    <i class="fa fa-phone"></i>
                    +91-8893 33 51 48
                  </div>
                </li>
                <li>
                  <div class="mail">
                    <i class="fa fa-envelope"></i>
                    info@magiscloustech.com
                  </div>
                </li>
              </ul>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </header>
  <!-- End header -->
  
  <!-- Start login modal window -->
  <div aria-hidden="false" role="dialog" tabindex="-1" id="login-form" class="modal leread-modal fade in">
    <div class="modal-dialog">
      <!-- Start login section -->
      <div id="login-content" class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-unlock-alt"></i>Login</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input type="text" placeholder="User name" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
             <div class="loginbox">
              <label><input type="checkbox"><span>Remember me</span></label>
              <button class="btn signin-btn" type="button">SIGN IN</button>
            </div>                    
          </form>
        </div>
        <div class="modal-footer footer-box">
          <a href="#">Forgot password ?</a>
          <span>No account ? <a id="signup-btn" href="#">Sign Up.</a></span>            
        </div>
      </div>
      <!-- Start signup section -->
      <div id="signup-content" class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-lock"></i>Sign Up</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input placeholder="Name" class="form-control">
            </div>
            <div class="form-group">
              <input placeholder="Username" class="form-control">
            </div>
            <div class="form-group">
              <input placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <div class="signupbox">
              <span>Already got account? <a id="login-btn" href="#">Sign In.</a></span>
            </div>
            <div class="loginbox">
              <label><input type="checkbox"><span>Remember me</span><i class="fa"></i></label>
              <button class="btn signin-btn" type="button">SIGN UP</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End login modal window -->

  <!-- BEGIN MENU -->
  <section id="menu-area">      
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index.html"><img src="assets/images/magisorg copy.png" height="50px" width="200px"></a>              
          <!-- IMG BASED LOGO  -->
           <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="#feature">Feature</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#service">Service</a></li>
             <li><a href="#testimonial">Testimonials</a></li>
             <li><a href="#clients-brand">Clients</a></li>
            <li><a href="#subscribe">Contact</a></li>
          </ul>                     
        </div><!--/.nav-collapse -->
        <a href="#" id="search-icon">
          <i class="fa fa-search">            
          </i>
        </a>
      </div>     
    </nav>
  </section>
  <!-- END MENU --> 

  <!-- Start slider -->
  <section id="slider">
    <div class="main-slider slick-initialized slick-slider"><button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;">Previous</button>
      <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4047px;"><div class="single-slide slick-slide" data-slick-index="0" aria-hidden="true" style="width: 1349px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear 0s;">
        <img src="assets/images/technology-and-us.jpg" alt="img">
        <div class="slide-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="slide-article">
                   <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">MAGIS CLOUDS</h1><h3 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">TECHNOLOGIES</h3> 
                  <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.75s; animation-name: fadeInUp;">Brings you the world of innovation</p>
                  
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="slider-img wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                  <img src="assets/images/team1.png" alt="business man">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><div class="single-slide slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" style="width: 1349px; position: relative; left: -1349px; top: 0px; z-index: 999; opacity: 1;">
        <img src="assets/images/cybersec.jpg" alt="img">
        <div class="slide-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="slide-article">
                  <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">MAGIS CLOUDS</h1><h3 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">TECHNOLOGIES</h3>
                  <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.75s; animation-name: fadeInUp;">We promises you to secure your data</p>
                 
                </div>
              </div>
<!--
              <div class="col-md-6 col-sm-6">
                <div class="slider-img wow fadeInUp">
                  <img src="assets/images/person1.png" alt="business man">
                </div>
              </div>
-->
            </div>
          </div>
        </div>
      </div><div class="single-slide slick-slide" data-slick-index="2" aria-hidden="true" style="width: 1349px; position: relative; left: -2698px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear 0s;">
        <img src="assets/images/tech.png" alt="img">
        <div class="slide-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="slide-article">
                  <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">Uniqueness</h1>
                  <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.75s; animation-name: fadeInUp;">Makes you feel different</p>
                 
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="slider-img wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
<!--                  <img src="assets/images/person2.png" alt="business man">-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div></div></div>
      
                
    <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button><ul class="slick-dots" style="display: block;"><li class="" aria-hidden="true"><button type="button" data-role="none" role="button" aria-required="false" tabindex="0">1</button></li><li aria-hidden="false" class="slick-active"><button type="button" data-role="none" role="button" aria-required="false" tabindex="0">2</button></li><li aria-hidden="true" class=""><button type="button" data-role="none" role="button" aria-required="false" tabindex="0">3</button></li></ul></div>
  </section>
  <!-- End slider -->

  <!-- Start Feature -->
  <section id="feature">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Features</h2>
            <span class="line"></span>
            <p>There Features make us unique in the wourld of Information Technology</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="feature-content">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                  <i class="fa fa-leaf feature-icon"></i>
                  <h4 class="feat-title">Commitment</h4>
                  <p>We promise to our clients- our commitment towards works is sincere and we value customer satisfaction</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                  <i class="fa fa-mobile feature-icon"></i>
                  <h4 class="feat-title">Customer Focus</h4>
                  <p>We give priorities to the customers.so we value them. we give full support to client ideas and we tried to give satisfaction to customers. we make relations with our cliends after the work.</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                  <i class="fa fa-thumbs-o-up feature-icon"></i>
                  <h4 class="feat-title">Keen on Security</h4>
                  <p>Now a days cyber attack is common. so we focussed on security to our clients product.security is most important.we are rearching on the security aspects</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                  <i class="fa fa-gears feature-icon"></i>
                  <h4 class="feat-title">Problem solving</h4>
                  <p>we have an unique way to solve the complex problems. and help in customer satisfaction. We use most advanced tools to solve the problem in unique way</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                  <i class="fa fa-code feature-icon"></i>
                  <h4 class="feat-title">Quality Code</h4>
                  <p>We ensure that we use quality code. wre use the best algorithem to solve the problems. we clear all the loopholes and threads in our code. we continously check our </p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                  <i class="fa fa-smile-o feature-icon"></i>
                  <h4 class="feat-title">Awesome Support</h4>
                  <p>We promissed our clients that the we give full support before and after the work. we value customer relation. we have a great team as customer support team</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Feature -->

  <!-- Start about  -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">About us</h2>
            <span class="line"></span>
            <p>We are a software development and Information security company from Trivandrum, Kerala and a focus on the latest technologies. we are passionate about delivering strong, robust software solutions to our clients. We specialise in enterprise level systems that can solve many of the problems that businesses face as they grow and adapt to a changing marketplace.Our team are highly skilled software developers and security professionals who have long-term experience across a wide range of technologies and industries. Whether you need specific skills or ongoing support, we have the people to help you.</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="about-content">
            <div class="row">
              <div class="col-md-6">
                <div class="our-skill">
                  <h3>Developments</h3> 
                  <br>                 
                  <p>We are here to solve problems and help your business grow. Many things can hold a business back such as repetitive tasks, disconnected systems, and inefficient manual processes. This waste can cost your business valuable resources and prevent you from reaching new customers or worse: risk losing existing ones. Our goal is to give you a solution to these problems and do it on time and on budget.We aim to be the best at what we do. We have a dream of evolving into a Global IT Company, ensuring that the solutions being delivered include best practice in IT. with the chosen area of technology.</p> 
                  <p>Each of our projects is tailored to your unique situation. When you work with our team, we’ll start by defining the project vision and a clear strategy. We work with you to identify detailed plans for what you’ll build. This leads to a successful project launch by defining how the digital place will be built.We have developed a meticulous methodology to fulfill our customers’ requirements, in accordance with the Information Technology Infrastructure Library (ITIL), a set of detailed practices for IT service management (ITSM) that focuses on aligning IT services with the needs of your business.</p>
               
                </div>
              </div>
              <div class="col-md-6">
                <div class="why-choose-us">
                  <h3>Information Security</h3>
                  <br>
                  <p>MAGIS CLOUD TECHNOLOGIES addresses the challenges of data breach and incident response with our dedicated and skilled cyber forensic team. We evaluate existing IT Infrastructure and develop defensive strategies as per best practices which are customized as per ones data security needs.</p>
                  <p>Our information Security expert team has a wider and deep industry knowledge to identify and analyses gaps and loopholes in the Network, Servers, and End User Systems. After uncovering the vulnerabilities, our Information Security team builds up data security plans to mitigate the risks in the systems preventing any kind of hacks</p>
                  <p>We help our clients to not only protect their IT infrastructure and data against cyber-attack but we also help them to run their IT Security initiatives through our cyber security solution offerings. We help them to strategize and build more secure environment. We as cyber security consultants help our clients in addressing their IT Security needs right from the VAPT to complex security challenges that they face</p>
                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about -->

  <!-- Start counter -->
  <section id="counter">
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="counter-area">
              <div class="row">
                <!-- Start single counter -->
                <div class="col-md-3 col-sm-6">
                  <div class="single-counter">
                    <div class="counter-icon">
                      <i class="fa fa-suitcase"></i>
                    </div>
                    <div class="counter-no counter">10</div>
                    <div class="counter-label">
                      Projects
                    </div>
                  </div>
                </div>
                <!-- End single counter -->
                <!-- Start single counter -->
                <div class="col-md-3 col-sm-6">
                  <div class="single-counter">
                    <div class="counter-icon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="counter-no counter">0</div>
                    <div class="counter-label">
                      Hours Work
                    </div>
                  </div>
                </div>
                <!-- End single counter -->
                <!-- Start single counter -->
                <div class="col-md-3 col-sm-6">
                 <div class="single-counter">
                    <div class="counter-icon">
                      <i class="fa fa-trophy"></i>
                    </div>
                    <div class="counter-no counter">0</div>
                    <div class="counter-label">
                      Awards
                    </div>
                  </div>
                </div>
                <!-- End single counter -->
                <!-- Start single counter -->
                <div class="col-md-3 col-sm-6">
                  <div class="single-counter">
                    <div class="counter-icon">
                      <i class="fa fa-users"></i>
                    </div>
                    <div class="counter-no counter">10</div>
                    <div class="counter-label">
                      Clients
                    </div>
                  </div>
                </div>
                <!-- End single counter -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End counter -->


  <!-- Start Service -->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Our Services</h2>
            <span class="line"></span>
            <p>we provide complete development solutions for the unique needs of our customers. We focus on ensuring world class solutions for our customers to enhance their business across a wide platform. We always try to enhance the business of our clients by delivering innovative application solutions at affordable cost that boost the internet marketing performance and productivity and to be competent in the IT market. We are committed in providing innovative application solutions that adds values to our client’s business. Our comprehensive approach enables us to device effective and cost efficient solutions for our customers’ requirements with no compromise on the quality of service. Our featured services include: </p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="service-content">
            <div class="row">
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                  <i class="fa fa-desktop service-icon"></i>
                  <h4 class="service-title">Web Development</h4>
                  <p>Magis clouds Technologies has an excellent team of website development experienced enough to develop websites of any complexity.</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                  <i class="fa fa-mobile service-icon"></i>
                  <h4 class="service-title">App Development</h4>
                  <p> We are highly-skilled analysts, UX experts and certified and well-versed in building apps for all the major platforms — IOS, Android, or Windows Phone.</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                  <i class="fa fa-database service-icon"></i>
                  <h4 class="service-title">Software Development</h4>
                  <p>Magis clouds Technologies Pvt. Ltd. Trivandrum software development methodology is a framework that is used to structure, plan, and control the process of developing information systems. </p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                  <i class="fa fa-mobile service-icon"></i>
                  <h4 class="service-title">Vulnerability Assessment Penetration Testing (VAPT)</h4>
                  <p>We are a great team for Vulnerability assessment and penetration testing. we provide complete security to your application</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                  <i class="fa fa-lock service-icon"></i>
                  <h4 class="service-title">Information Security Audit</h4>
                  <p>We have provide security from data breach. we are researchers who are fully focussed on security in Infortaion technology.</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                  <i class="fa fa-sitemap service-icon"></i>
                  <h4 class="service-title">Network Security Audit</h4>
                  <p>We provide security Audit on internal network of organisations.we tries to keep organisations network from cyber attack.</p>
                </div>
              </div>
              <!-- End single service -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service -->

 
  
  <!-- Start Testimonial section -->
<!--  <section id="testimonial">-->
<!--    <div class="container">-->
<!--      <div class="row">-->
<!--        <div class="col-md-6">-->
<!--          <div class="row">-->
<!--            <div class="col-md-12">-->
<!--              <div class="title-area">-->
<!--                <h2 class="title">Whats Client Say</h2>-->
<!--                <span class="line"></span>           -->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="col-md-12">-->
              <!-- Start testimonial slider -->
<!--              <div class="testimonial-slider">-->
                <!-- Start single slider -->
<!--                <div class="single-slider">-->
<!--                  <div class="testimonial-img">-->
<!--                    <img src="assets/images/testi1.jpg" alt="testimonial image">-->
<!--                  </div>-->
<!--                  <div class="testimonial-content">-->
<!--                    <p>No Testimonials</p>-->
<!--                    <h6>----<span>---</span></h6>-->
<!--                  </div>-->
<!--                </div>-->
                <!-- Start single slider -->
<!--                <div class="single-slider">-->
<!--                  <div class="testimonial-img">-->
<!--                    <img src="assets/images/testi3.jpg" alt="testimonial image">-->
<!--                  </div>-->
<!--                   <div class="testimonial-content">-->
<!--                    <p>No Testimonials</p>-->
<!--                    <h6>----<span>---</span></h6>-->
<!--                  </div>-->
<!--                </div>-->
                <!-- Start single slider -->
<!--                <div class="single-slider">-->
<!--                  <div class="testimonial-img">-->
<!--                    <img src="assets/images/testi2.jpg" alt="testimonial image">-->
<!--                  </div>-->
<!--                   <div class="testimonial-content">-->
<!--                    <p>No Testimonials</p>-->
<!--                    <h6>----<span>---</span></h6>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="col-md-6"></div>        -->
<!--      </div>-->
<!--    </div>-->
<!--  </section>-->
  <!-- End Testimonial section -->

  <!-- Start Clients brand -->
  <section id="clients-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <div class="title-area">
            <h2 class="title">Our Clients</h2>
            <span class="line"></span>
            <br>
            <br>
          </div>
         
          <div class="clients-brand-area">
            <ul class="clients-brand-slide slick-initialized slick-slider">
              <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1140px; transform: translate3d(0px, 0px, 0px);" role="listbox"><li class="col-md-3 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" role="option" aria-describedby="slick-slide10" style="width: 285px;">
                <div class="single-brand">
                  <a href="https://www.bident-creatives.com/" tabindex="0"><img src="assets/images/g1 copy.png" alt="img"></a>
                </div>
              </li><li class="col-md-3 slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" role="option" aria-describedby="slick-slide11" style="width: 285px;">
                <div class="single-brand">
                 <a href="" tabindex="0"> <img src="assets/images/vanasreelogo.png" alt="img"></a>
                </div>
              </li><li class="col-md-3 slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" role="option" aria-describedby="slick-slide12" style="width: 285px;">
                <div class="single-brand">
                 <a href="" tabindex="0"> <img src="assets/images/g3 copy.png" alt="img"></a>
                </div>
              </li><li class="col-md-3 slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" role="option" aria-describedby="slick-slide13" style="width: 285px;">
                <div class="single-brand">
                 <a href="" tabindex="0"> <img src="assets/images/muthoot-skychef-logo1.png" alt="img"></a>
                </div>
              </li></div></div>
              
              
               
<!--
             <li class="col-md-3">
                <div class="single-brand">
                  <img src="assets/images/g1 copy.png" alt="img">
                </div>
              </li>
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="assets/images/vanasreelogo.png" alt="img">
                </div>
              </li>
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="assets/images/g3 copy.png" alt="img">
                </div>
              </li>
-->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Clients brand -->

   <!-- Start subscribe us -->
  <section id="subscribe">
    <div class="subscribe-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscribe-area">
              <h2 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">CONTACT US</h2>
              <ul class="list-unstyled mb-0 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <li><i class="fa fa-map-marker fa-2x"></i>
                    <p>Saphalya Nagar Ln, Kesavadasapuram, Thiruvananthapuram, Kerala, India 695004.</p>
                </li>

                <li><i class="fa fa-phone mt-4 fa-2x"></i>
                    <p>+(91) 8893335148</p>
                </li>

                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                    <p>info@magiscloudstech.com</p>
                </li>
            </ul>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End subscribe us -->

  <!-- Start footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="footer-left">
            <p>Designed by <a href="http://www.magiscloudstech.com/">Magis Clouds Technologies</a></p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="footer-right">
            <a href="https://www.facebook.com/magiscloudstech/"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
           </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End footer -->

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>    
  <!-- mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
 <!-- counter -->
  <script src="assets/js/waypoints.js"></script>
  <script src="assets/js/jquery.counterup.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 
  <!-- progress bar   -->
  <script type="text/javascript" src="assets/js/bootstrap-progressbar.js"></script>  
  
 
  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  
</body>