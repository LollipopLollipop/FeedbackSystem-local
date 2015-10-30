<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">--> 
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">
	
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{ URL::asset('images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
    <style>
	.criteria-img { 
	   position: relative; 
	   width: 100%; /* for IE 6 */
	}
	
	.criteria-text { 
	   position: absolute; 
	   text-align:center; 
	   top: 100px; 
	   width: 100%; 
	}
	.progress-label {
		padding-left: 10px;
		font-size: 150%;
	}
	</style>
    
</head><!--/head-->

<body>
	<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.html">
                    	<h1><img src="images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li class="dropdown"><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="aboutus.html">About</a></li>
                                <li><a href="aboutus2.html">About 2</a></li>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="contact2.html">Contact us 2</a></li>
                                <li><a href="404.html">404 error</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>                    
                        <li class="dropdown"><a href="blog.html">Blog <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="blog.html">Blog Default</a></li>
                                <li><a href="blogtwo.html">Timeline Blog</a></li>
                                <li><a href="blogone.html">2 Columns + Right Sidebar</a></li>
                                <li><a href="blogthree.html">1 Column + Left Sidebar</a></li>
                                <li><a href="blogfour.html">Blog Masonary</a></li>
                                <li><a href="blogdetails.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="portfolio.html">Portfolio <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="portfolio.html">Portfolio Default</a></li>
                                <li><a href="portfoliofour.html">Isotope 3 Columns + Right Sidebar</a></li>
                                <li><a href="portfolioone.html">3 Columns + Right Sidebar</a></li>
                                <li><a href="portfoliotwo.html">3 Columns + Left Sidebar</a></li>
                                <li><a href="portfoliothree.html">2 Columns</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                            </ul>
                        </li>                         
                        <li><a href="shortcodes.html ">Shortcodes</a></li>                    
                    </ul>
                </div>
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>We Provide Feedback :D</h1>
                        <p>Get real time feedback for your presentation based on customized criteria!</p>
                        <a href="#" class="btn btn-common" style="width: 100px;" data-toggle="modal" data-target="#createModal">Create</a><br>
                        <a href="#" class="btn btn-common" style="width: 100px;" data-toggle="modal" data-target="#enterModal">Enter</a>
                    </div>
                    <img src="images/home/slider/hill.png" class="slider-hill" alt="slider image">
                    <img src="images/home/slider/house.png" class="slider-house" alt="slider image">
                    <img src="images/home/slider/sun.png" class="slider-sun" alt="slider image">
                    <img src="images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                    <img src="images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
                    <!-- Modal -->
                    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">New Presentation</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input id="title" class="form-control" placeholder="Enter presentation title">
                                    </div>
                                    <div class="form-group">
                                        <label>Presenter</label>
                                        <input id="presenter" class="form-control" placeholder="Enter presenter name">
                                    </div>
                                    <div class="form-group">
                                        <label>Criteria</label><br>
                                        <input type="text" id="criteria" value="Volume,Gesture,Eye Contact,Time Control,Content" data-role="tagsinput"         />
                                      	<!--<select multiple data-role="tagsinput" class="form-control" id="criteria">
                                          <option value="Volume">Volume</option>
                                          <option value="Eye Contact">Eye Contact</option>
                                          <option value="Gesture">Gesture</option>
                                          <option value="Time Control">Time Control</option>
                                          <option value="Content">Content</option>
                                        </select>-->
                                   	</div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="createBtn">Create</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    
                    <!-- Modal -->
                    <div class="modal fade" id="createSuccessModal" tabindex="-1" role="dialog" aria-labelledby="createSuccessModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Success</h4>
                                </div>
                                <div class="modal-body">
                                    <!--<div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">-->
                                        <div class="feature-inner">
                                            <div class="icon-wrapper">
                                                <i class="fa fa-2x fa-check-square-o"></i>
                                            </div>
                                            <h2 id="pid"></h2>
                                            <p>Audience can enter your presentation based on the ID shown above</p>
                                        </div>
                                    <!--</div>-->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" id="createDoneBtn">OK</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    
                    <!-- Modal -->
                    <div class="modal fade" id="enterModal" tabindex="-1" role="dialog" aria-labelledby="enterModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Enter Presentation</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Presentation ID</label>
                                        <input id="enterPID" class="form-control" placeholder="Enter presentation ID">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="enterBtn">Confirm</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    
                    
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->
    
    <section id="page-breadcrumb" style="display:none;">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title" id="fd-title">Presenter Defined Tags</h1>
                            <p id="fd-session">Be Attentive</p>
                            <p id="fd-presenter">Be Attentive</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="portfolio" style="display:none;">
        <div class="container">
            <div class="row">
                <br>
                <br>
                    
                <div class="portfolio-items">
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos" style="display:none;">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <img src="images/tag/1.jpg" class="img-responsive" alt="">
                                    <h2 class="criteria-text" id="tag0">Volume</h2>
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        
                                        <li><a href="#"><i class="fa fa-volume-down"></i></a></li>
                                        <li><a href="#"><i class="fa fa-smile-o"></i></a></li>
                                        <li><a href="images/thankyou.jpg" data-lightbox="example-set"><i class="fa fa-volume-up"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded folio" style="display:none;">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <img src="images/tag/2.jpg" class="img-responsive" alt="">
                                    <h2 class="criteria-text" id="tag1">Eye Contact</h2>
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="images/thankyou.jpg" class="thumbs-down" data-lightbox="example-set"><i class="fa fa-thumbs-down"></i></a></li>
                                        <li><a href="images/thankyou.jpg" data-lightbox="example-set"><i class="fa fa-thumbs-up"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos" style="display:none;">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <img src="images/tag/3.jpg" class="img-responsive" alt="">
                                    <h2 class="criteria-text" id="tag2">Content</h2>
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-long-arrow-up"></i></a></li>
                                        <li><a href="portfolio-details.html"><i class="fa fa-smile-o"></i></a></li>
                                        <li><a href="images/portfolio/3.jpg"  data-lightbox="example-set"><i class="fa fa-long-arrow-down"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                      		<div class="portfolio-info ">
                                <h2></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos" style="display:none;">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <img src="images/tag/4.jpg" class="img-responsive" alt="">
                                    <h2 class="criteria-text" id="tag3">Body Gesture</h2>
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/4.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
          					<div class="portfolio-info ">
                                <h2></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded mobile" style="display:none;">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <img src="images/tag/5.jpg" class="img-responsive" alt="">
                                    <h2 class="criteria-text" id="tag4">Time Control</h2>
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/5.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                           	<div class="portfolio-info ">
                                <h2></h2>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded mockup" style="display:none;">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <img src="images/tag/6.jpg" class="img-responsive" alt="">
                                    <h2 class="criteria-text" id="tag5">Stammer</h2>
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/6.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded folio" style="display:none;">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <img src="images/tag/7.jpg" class="img-responsive" alt="">
                                    <h2 class="criteria-text" id="tag6">Shaky</h2>
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/7.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
							<div class="portfolio-info ">
                                <h2></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos" style="display:none;">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <img src="images/tag/8.jpg" class="img-responsive" alt="">
                                    <h2 class="criteria-text" id="tag7">...</h2>
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="portfolio-details.html"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/8.jpg#" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="portfolio-info ">
                                <h2></h2>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#portfolio-->
    <section id="streaming" style="display:none">
    <div class="container">
    	<div id="progressbar-container" class="wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2 class="page-header" id="stream-title">Progress Bars</h2>
            <div class="progress" style="display:none">
            	<strong class="progress-label" id="progress-tag0"></strong>
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    40% Complete (success)
                </div>
            </div>
            <div class="progress" style="display:none">
            	<strong class="progress-label" id="progress-tag1"></strong>
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    20% Complete
                </div>
            </div>
            <div class="progress" style="display:none">
            	<strong class="progress-label" id="progress-tag2"></strong>
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    60% Complete (warning)
                </div>
            </div>
            <div class="progress" style="display:none">
            	<strong class="progress-label" id="progress-tag3"></strong>
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    80% Complete
                </div>
            </div>
            
            <div class="progress" style="display:none">
            	<strong class="progress-label" id="progress-tag4"></strong>
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    40% Complete (success)
                </div>
            </div>
            <div class="progress" style="display:none">
            	<strong class="progress-label" id="progress-tag5"></strong>
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    20% Complete
                </div>
            </div>
            <div class="progress" style="display:none">
            	<strong class="progress-label" id="progress-tag6"></strong>
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    60% Complete (warning)
                </div>
            </div>
            <div class="progress" style="display:none">
            	<strong class="progress-label" id="progress-tag7"></strong>
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    80% Complete
                </div>
            </div>
            
        </div><!--/#progressbar-container-->
        <div class="container">
	</section>
    


    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Testimonial</h2>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/home/profile1.png" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
                                <h3><a href="#">- Jhon Kalis</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/home/profile2.png" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
                                <h3><a href="">- Abraham Josef</a></h3>
                            </div>
                        </div>   
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br> 
                        Phone: +1 (123) 456 7890 <br> 
                        Fax: +1 (123) 456 7891 <br> 
                        </address>

                        <h2>Address</h2>
                        <address>
                        Unit C2, St.Vincent's Trading Est., <br> 
                        Feeder Road, <br> 
                        Bristol, BS2 0UY <br> 
                        United Kingdom <br> 
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required class="form-control" rows="8" placeholder="Your text here"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Your Company 2014. All Rights Reserved.</p>
                        <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.4/typeahead.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular.min.js"></script>
    
	<script type="text/javascript" src="bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <!--<script type="text/javascript" src="bootstrap-tagsinput/bootstrap-tagsinput-angular.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>-->
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
    <script>
	$(document).ready(function(){
		$('#createBtn').click(function(){
			// Create our XMLHttpRequest object
			var hr = new XMLHttpRequest();
			// Create some variables we need to send to our PHP file
			var url = "createNew.php";
			var title = $('#title').val();
			var presenter = $('#presenter').val();
			var criteria = $("#criteria").val();

			var vars = "title="+title+"&presenter="+presenter+"&criteria="+criteria;
			hr.open("POST", url, true);
			// Set content type header information for sending url encoded variables in the request
			hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			// Access the onreadystatechange event for the XMLHttpRequest object
			hr.onreadystatechange = function() {
				if(hr.readyState == 4 && hr.status == 200) {
					var return_data = hr.responseText;
					$('#createModal').modal('hide'); 
					$('#pid').html(return_data);
					$('#createSuccessModal').modal('show'); 
				}
			}
			// Send the data to PHP now... and wait for response to update the status div
			hr.send(vars); // Actually execute the request
			
			
		});
		
		$('#enterBtn').click(function(){
			// Create our XMLHttpRequest object
			var hr = new XMLHttpRequest();
			// Create some variables we need to send to our PHP file
			var url = "enter.php";
			var pid = $("#enterPID").val();
			alert(pid);
			var vars = "pid="+pid;
			hr.open("POST", url, true);
			// Set content type header information for sending url encoded variables in the request
			hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			// Access the onreadystatechange event for the XMLHttpRequest object
			hr.onreadystatechange = function() {
				if(hr.readyState == 4 && hr.status == 200) {
					var return_data = hr.responseText.split("|");
					alert("success");
					$('#enterModal').modal('hide'); 
					$('#home-slider').hide();
					$('#fd-title').html(return_data[1]);
					$('#fd-presenter').html(return_data[0]);
					$('#fd-session').html(pid);
					var tags = return_data[2].split(",");
					var tagNum = tags.length;
					for (var i = 0; i < tagNum; i++) {
    					$('#tag'+i).html(tags[i]);
						$('#tag'+i).parent().parent().parent().parent().show();
    					//Do something
					}
					$('#page-breadcrumb').show();
					$('#portfolio').show();
					//$("#enterPID").val(return_data);
					//$('#enterModal').modal('hide'); 
				}
			}
			// Send the data to PHP now... and wait for response to update the status div
			hr.send(vars); // Actually execute the request
			alert("waiting");
			
		});
		
		$('#createDoneBtn').click(function(){
			$('#createSuccessModal').modal('hide'); 
			$('#home-slider').hide();
			var title = $('#title').val();
			var criteria = $("#criteria").val();
			$('#stream-title').html(title);
			var tags = criteria.split(",");
			var tagNum = tags.length;
			for (var i = 0; i < tagNum; i++) {
				$('#progress-tag'+i).html(tags[i]);
				$('#progress-tag'+i).parent().show();
				//Do something
			}
			$('#streaming').show();
			
			
		});
		
		$(".thumbs-down").click(function(){
			//alert("thumbs-down");
			var tag = $(this).parent().parent().parent().parent().find('.criteria-text').html();
			//var title = $('#fd-title').html();
			//var presenter = $('#fd-presenter').html();
			var session_id = $('#fd-session').html();
			alert(tag);
			// Create our XMLHttpRequest object
			var hr = new XMLHttpRequest();
			// Create some variables we need to send to our PHP file
			var url = "sendFb.php";
			
			var vars = "feedback=bad&session_id="+session_id+"&tag_name="+tag;
			hr.open("POST", url, true);
			// Set content type header information for sending url encoded variables in the request
			hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			// Access the onreadystatechange event for the XMLHttpRequest object
			hr.onreadystatechange = function() {
				if(hr.readyState == 4 && hr.status == 200) {
					//var return_data = hr.responseText;
					//$('#createModal').modal('hide'); 
					//$('#pid').html(return_data);
					//$('#createSuccessModal').modal('show'); 
				}
			}
			// Send the data to PHP now... and wait for response to update the status div
			hr.send(vars); // Actually execute the request
			
			
		});
		
	});	
	</script>
</body>
</html>
