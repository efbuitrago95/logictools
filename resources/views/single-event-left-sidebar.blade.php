<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Single Event Left Sidebar - KIDZ</title>
  
  <!-- PLUGINS CSS STYLE -->
  <link href="plugins/jquery-ui/jquery-ui.css" rel="stylesheet">
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="plugins/rs-plugin/css/settings.css" media="screen">
  <link rel="stylesheet" type="text/css" href="plugins/selectbox/select_option1.css">
  <link rel="stylesheet" type="text/css" href="plugins/owl-carousel/owl.carousel.css" media="screen">
  <link rel="stylesheet" type="text/css" href="plugins/isotope/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" href="plugins/isotope/isotope.css">
  

  <!-- GOOGLE FONT -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Dosis:400,300,600,700' rel='stylesheet' type='text/css'>

  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/colors/default.css" id="option_color">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">

  <div class="main-wrapper">
    <!-- HEADER -->
    <header id="pageTop" class="header-wrapper">
      <!-- COLOR BAR -->
      <div class="container-fluid color-bar top-fixed clearfix">
        <div class="row">
          <div class="col-sm-1 col-xs-2 bg-color-1">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-2">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-3">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-4">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-5">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-6">fix bar</div>
          <div class="col-sm-1 bg-color-1 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-2 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-3 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-4 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-5 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-6 hidden-xs">fix bar</div>
        </div>
      </div>

      <!-- TOP INFO BAR -->
      <div class="top-info-bar bg-color-7 hidden-xs">
        <div class="container">
          <div class="row">
            <div class="col-sm-7">
              <ul class="list-inline topList">
                <li><i class="fa fa-envelope bg-color-1" aria-hidden="true"></i> <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
                <li><i class="fa fa-phone bg-color-2" aria-hidden="true"></i> +1 234 567 8900</li>
                <li><i class="fa fa-clock-o bg-color-6" aria-hidden="true"></i> Open: 9am - 6pm</li>
              </ul>
            </div>
            <div class="col-sm-5">
              <ul class="list-inline functionList">
                <li><i class="fa fa-globe bg-color-4" aria-hidden="true"></i></li>
                <li class="LanguageList">
                  <select name="guiest_id1" id="guiest_id1" class="select-drop">
                    <option value="0"><i class="fa fa-globe bg-color-4" aria-hidden="true"></i> Language</option>
                    <option value="1">English</option>
                    <option value="2">Spanish</option>
                    <option value="3">Hindi</option>            
                  </select>
                </li>
                <li><i class="fa fa-unlock-alt bg-color-5" aria-hidden="true"></i> <a href='#loginModal' data-toggle="modal" >Login</a><span>or</span><a href='#createAccount' data-toggle="modal">Create an account</a></li>
                <li class="cart-dropdown">
                  <a href="#" class="bg-color-6 shop-cart" >
                    <i class="fa fa-shopping-basket " aria-hidden="true"></i>
                    <span class="badge bg-color-1">3</span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><i class="fa fa-shopping-basket " aria-hidden="true"></i>3 items in your cart</li>
                    <li>
                      <a href="single-product.html">
                        <div class="media">
                          <div class="media-left">
                            <img src="img/home/cart/cart-img.png" alt="cart-Image">
                          </div>
                          <div class="media-body">
                            <h4>Barbie Racing Car</h4>
                            <div class="price">
                              <span class="color-1">$50</span>
                            </div>
                            <span class="amount">Qnt: 1</span>
                          </div>
                        </div>
                      </a>
                      <span class="cancel"><i class="fa fa-close" aria-hidden="true"></i></span>
                    </li>
                    <li>
                      <a href="single-product.html">
                        <div class="media">
                          <div class="media-left">
                            <img src="img/home/cart/cart-img.png" alt="cart-Image">
                          </div>
                          <div class="media-body">
                            <h4>Barbie Racing Car</h4>
                            <div class="price">
                              <span class="color-1">$50</span>
                            </div>
                            <span class="amount">Qnt: 1</span>
                          </div>
                        </div>
                      </a>
                      <span class="cancel"><i class="fa fa-close" aria-hidden="true"></i></span>
                    </li>
                    <li>
                      <a href="single-product.html">
                        <div class="media">
                          <div class="media-left">
                            <img src="img/home/cart/cart-img.png" alt="cart-Image">
                          </div>
                          <div class="media-body">
                            <h4>Barbie Racing Car</h4>
                            <div class="price">
                              <span class="color-1">$50</span>
                            </div>
                            <span class="amount">Qnt: 1</span>
                          </div>
                        </div>
                      </a>
                      <span class="cancel"><i class="fa fa-close" aria-hidden="true"></i></span>
                    </li>
                    <li>
                      <span class="cart-total">Subtotal</span>
                      <span class="cart-price">$150</span>
                      <div class="cart-button">
                        <button type="button" class="btn btn-primary" onclick="location.href='checkout-step-1.html';">Checkout</button>
                        <button type="button" class="btn btn-primary" onclick="location.href='cart-page.html';">View Cart</button>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- NAVBAR -->
      <nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index-v1.html"><img src="img/logo.png" alt="logo"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown singleDrop color-1">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-home bg-color-1" aria-hidden="true"></i> <span>Home</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-left">
                  <li><a href="index-v1.html">Kidz School</a></li>
                  <li><a href="index-v2.html">Kidz Store</a></li>
                  <li><a href="index-v3.html">Kidz Daycare</a></li>
                </ul>
              </li>
              <li class="active dropdown singleDrop color-3">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list-ul bg-color-3" aria-hidden="true"></i> <span>pages</span></a>
                <ul class="dropdown-menu dropdown-menu-left">
                  <li><a href="about_us.html">About</a></li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Team<i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="teachers.html">Teachers</a></li>
                      <li><a href="teachers-details.html">Teacher Details</a></li>
                    </ul>
                  </li>
                  <li><a href="testimonial.html">Testimonial</a></li>
                  <li class="active dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Events <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="all-events.html">All Events</a></li>
                      <li class="active"><a href="single-event-left-sidebar.html">Single Event Left Sidebar</a></li>
                      <li><a href="single-event-right-sidebar.html">Single Event Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li><a href="photo-gallery.html">Photo Gallery</a></li>
                  <li><a href="pricing-table.html">Pricing Table</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="service-details.html">Services Details</a></li>
                  <li><a href="search-result.html">Search Results</a></li>
                  <li><a href="contact-us.html">Contact Us</a></li>
                  <li><a href="faq.html">FAQ</a></li>
                  <li><a href="sign-up-or-login.html">Sign Up / Login</a></li>
                  <li><a href="404.html">Error 404</a></li>
                  <li><a href="coming-soon.html">Coming Soon</a></li>
                </ul>
              </li>
              <li class=" dropdown megaDropMenu color-2">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true" aria-expanded="false">
                  <i class="fa fa-file-text-o bg-color-2" aria-hidden="true"></i> 
                  <span>Courses</span>
                </a>
                <ul class="row dropdown-menu">
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Courses Grid</li>
                      <li><a href="course-grid-full.html">Courses Grid Fullwidth</a></li>
                      <li><a href="course-grid-left-sidebar.html">Courses Grid Left Sidebar</a></li>
                      <li><a href="course-grid-right-sidebar.html">Courses Grid Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Courses List</li>
                      <li><a href="course-list-fullwidth.html">Courses List Fullwidth</a></li>
                      <li><a href="course-list-left-sidebar.html">Courses List left Sidebar</a></li>
                      <li><a href="course-list-right-sidebar.html">Courses List Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Single Course</li>
                      <li><a href="course-single.html">Single Course Fullwidth</a></li>
                      <li><a href="course-single-left-sidebar.html">Single Course left Sidebar</a></li>
                      <li><a href="course-single-right-sidebar.html">Single Course Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Checkout</li>
                      <li><a href="checkout-step-1.html">Personal Info</a></li>
                      <li><a href="checkout-step-2.html">Payment Info</a></li>
                      <li><a href="checkout-step-3.html">Confirmation</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown singleDrop color-4">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-pencil-square-o bg-color-4" aria-hidden="true"></i> 
                  <span>Store</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle " data-toggle="dropdown">Products<i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="product.html">Products Fullwidth</a></li>
                      <li><a href="product-left-sidebar.html">Products Left Sidebar</a></li>
                      <li><a href="product-right-sidebar.html">Products Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li><a href="single-product.html">Single Product</a></li>
                  <li><a href="category.html">Product Categories</a></li>
                  <li><a href="cart-page.html">Cart</a></li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Checkout<i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="checkout-step-1.html">Personal Info</a></li>
                      <li><a href="checkout-step-2.html">Payment Info</a></li>
                      <li><a href="checkout-step-3.html">Confirmation</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown singleDrop color-5">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-calendar bg-color-5" aria-hidden="true"></i> 
                  <span>Blog</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog Grid<i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="blog-grid.html">Blog Grid Fullwidth</a></li>
                      <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                      <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog List<i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="blog-list.html">Blog List Fullwidth</a></li>
                      <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                      <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Single Blog<i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="single-blog.html">Single Blog Fullwidth</a></li>
                      <li><a href="single-blog-left-sidebar.html">Single Blog Left Sidebar</a></li>
                      <li><a href="single-blog-right-sidebar.html">Single Blog Right Sidebar</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown singleDrop color-6">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-gg bg-color-6" aria-hidden="true"></i> <span>Components</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="accordion-toggles.html">Accordions &amp; Toggles</a></li>
                  <li><a href="tabs-dropdown.html">Tabs &amp; Dropdowns</a></li>
                </ul>
              </li>
            </ul>
          </div>

          <div class="cart-dropdown">
            <a href="#" class="bg-color-6 shop-cart">
              <i class="fa fa-shopping-basket " aria-hidden="true"></i>
              <span class="badge bg-color-1">3</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><i class="fa fa-shopping-basket " aria-hidden="true"></i>3 items in your cart</li>
              <li>
                <a href="single-product.html">
                  <div class="media">
                    <div class="media-left">
                      <img src="img/home/cart/cart-img.png" alt="cart-Image">
                    </div>
                    <div class="media-body">
                      <h4>Barbie Racing Car</h4>
                      <div class="price">
                        <span class="color-1">$50</span>
                      </div>
                      <span class="amount">Qnt: 1</span>
                    </div>
                  </div>
                </a>
                <span class="cancel"><i class="fa fa-close" aria-hidden="true"></i></span>
              </li>
              <li>
                <a href="single-product.html">
                  <div class="media">
                    <div class="media-left">
                      <img src="img/home/cart/cart-img.png" alt="cart-Image">
                    </div>
                    <div class="media-body">
                      <h4>Barbie Racing Car</h4>
                      <div class="price">
                        <span class="color-1">$50</span>
                      </div>
                      <span class="amount">Qnt: 1</span>
                    </div>
                  </div>
                </a>
                <span class="cancel"><i class="fa fa-close" aria-hidden="true"></i></span>
              </li>
              <li>
                <a href="single-product.html">
                  <div class="media">
                    <div class="media-left">
                      <img src="img/home/cart/cart-img.png" alt="cart-Image">
                    </div>
                    <div class="media-body">
                      <h4>Barbie Racing Car</h4>
                      <div class="price">
                        <span class="color-1">$50</span>
                      </div>
                      <span class="amount">Qnt: 1</span>
                    </div>
                  </div>
                </a>
                <span class="cancel"><i class="fa fa-close" aria-hidden="true"></i></span>
              </li>
              <li>
                <span class="cart-total">Subtotal</span>
                <span class="cart-price">$150</span>
                <div class="cart-button">
                  <button type="button" class="btn btn-primary" onclick="location.href='checkout-step-1.html';">Checkout</button>
                  <button type="button" class="btn btn-primary" onclick="location.href='cart-page.html';">View Cart</button>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>Event Details</h2>
          <ol class="breadcrumb">
            <li><a href="index-v1.html">Home</a></li>
            <li class="active">Event Details</li>
          </ol>
        </div>
      </div>
    </section>

    <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-8 col-xs-12 block pull-right">
            <div class="thumbnail thumbnailContent alt">
              <img src="img/event/1.jpg" alt="image" class="img-responsive">
              <div class="sticker bg-color-1">$50</div>
              <div class="caption border-color-1 singleBlog">
                <h3 class="color-1">Phasellus convallis eros.</h3>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
                <div class="imagesPart clearfix">
                  <img src="img/event/3.jpg" class="img-rounded">
                  <img src="img/event/2.jpg" class="img-rounded">
                </div>
                <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-12 pull-left">
            <aside>
              <div class="panel panel-default eventSidebar">
                  <div class="panel-heading bg-color-1 border-color-1">
                    <h3 class="panel-title">Event Information</h3>
                  </div>
                  <div class="panel-body">
                    <ul class="media-list">
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">Start Date</h4>
                          <p>15 Oct,2016</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-3">
                          <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-3">Event Duration</h4>
                          <p>9.00 AM-11.00 AM</p>
                        </div>
                      </li>
                      <li class="media iconContet">
                        <div class="media-left iconContent bg-color-4">
                          <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-4">Contact</h4>
                          <p>954 124 2542</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-5">
                          <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-5">Event Venue</h4>
                          <p>9/4 C  Block, garden <br> Street, Shyamoli, <br> Dhaka.</p>
                        </div>
                      </li>
                      <li><a href="#" class="btn btn-primary bg-color-6 btn-block">Register now</a></li>
                    </ul>
                  </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer>
      <!-- COLOR BAR -->
      <div class="container-fluid color-bar clearfix">
        <div class="row">
          <div class="col-sm-1 col-xs-2 bg-color-1">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-2">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-3">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-4">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-5">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-6">fix bar</div>
          <div class="col-sm-1 bg-color-1 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-2 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-3 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-4 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-5 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-6 hidden-xs">fix bar</div>
        </div>
      </div>
      <!-- FOOTER INFO AREA -->
      <div class="footerInfoArea full-width clearfix" style="background-image: url(img/footer/footer-bg-1.png);">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <a href="index-v1.html"><img src="img/logo-footer.png"></a>
              </div>
              <div class="footerInfo">
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia.Lorem ipsum dolor sit amet.</p>
                <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <h4>Useful Links</h4>
              </div>
              <div class="footerInfo">
                <ul class="list-unstyled footerList">
                  <li>
                    <a href="index-v1.html">
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>Kidz School
                    </a>
                  </li>
                  <li>
                    <a href="about_us.html">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>About Kidz School
                    </a>
                  </li>
                  <li>
                    <a href="index-v2.html">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>Kidz Store
                    </a>
                  </li>
                  <li>
                    <a href="index-v3.html">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>Kidz Daycare
                    </a>
                  </li>
                  <li>
                    <a href="photo-gallery.html">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                      Photo Gallery
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <h4>Recent Post</h4>
              </div>
              <div class="footerInfo">
                <ul class="list-unstyled postLink">
                  <li>
                    <div class="media">
                      <a class="media-left" href="single-blog.html">
                        <img class="media-object img-rounded border-color-1" src="img/footer/footer-img-1.png" alt="Image">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading"><a href="single-blog.html">A Clean Website Gives More Experience To The Visitors</a></h5>
                        <p>July 7 - 2016</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <a class="media-left" href="single-blog-left-sidebar.html">
                        <img class="media-object img-rounded border-color-2" src="img/footer/footer-img-2.png" alt="Image">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading"><a href="single-blog-left-sidebar.html">A Clean Website Gives More Experience To The Visitors</a></h5>
                        <p>July 7 - 2016</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <a class="media-left" href="single-blog-left-sidebar.html">
                        <img class="media-object img-rounded border-color-4" src="img/footer/footer-img-3.png" alt="Image">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading"><a href="single-blog-left-sidebar.html">A Clean Website Gives More Experience To The Visitors</a></h5>
                        <p>July 7 - 2016</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <h4>Mailing List</h4>
              </div>
              <div class="footerInfo">
                <p>Sign up for our mailing list to get latest updates and offers.</p>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Email address" aria-describedby="basic-addon21">
                  <button type="submit" class="input-group-addon" id="basic-addon21"><i class="fa fa-check" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- COPY RIGHT -->
      <div class="copyRight clearfix">
        <div class="container">
          <div class="row">
            <div class="col-sm-5 col-sm-push-7 col-xs-12">
              <ul class="list-inline">
                <li><a href="#" class="bg-color-1"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class="bg-color-2"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" class="bg-color-3"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#" class="bg-color-4"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                <li><a href="#" class="bg-color-5"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            <div class="col-sm-7 col-sm-pull-5 col-xs-12">
              <div class="copyRightText">
                <p>© 2016 Copyright Kidz School Bootstrap Template by <a href="https://www.iamabdus.com/">Abdus</a>.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <div class="scrolling">
    <a href="#pageTop" class="backToTop hidden-xs" id="backToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
  </div>

  <!-- LOGIN MODAL -->
  <div class="modal fade customModal" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="panel panel-default formPanel">
          <div class="panel-heading bg-color-1 border-color-1">
            <h3 class="panel-title">Login</h3>
          </div>
          <div class="panel-body">
            <form action="#" method="POST" role="form">
              <div class="form-group formField">
                <input type="text" class="form-control" placeholder="User name">
              </div>
              <div class="form-group formField">
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group formField">
                <input type="submit" class="btn btn-primary btn-block bg-color-3 border-color-3" value="Log in">
              </div>
              <div class="form-group formField">
                <p class="help-block"><a href="#">Forgot password?</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CREATE ACCOUNT MODAL -->
  <div class="modal fade customModal" id="createAccount" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="panel panel-default formPanel">
          <div class="panel-heading bg-color-1 border-color-1">
            <h3 class="panel-title">Create  an account</h3>
          </div>
          <div class="panel-body">
            <form action="#" method="POST" role="form">
              <div class="form-group formField">
                <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="form-group formField">
                <input type="text" class="form-control" placeholder="User name">
              </div>
              <div class="form-group formField">
                <input type="text" class="form-control" placeholder="Phone">
              </div>
              <div class="form-group formField">
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group formField">
                <input type="password" class="form-control" placeholder="Re-Password">
              </div>
              <div class="form-group formField">
                <input type="submit" class="btn btn-primary btn-block bg-color-3 border-color-3" value="Register">
              </div>
              <div class="form-group formField">
                <p class="help-block">Allready have an account? <a href="#">Log in</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="plugins/jquery-ui/jquery-ui.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
  <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  <script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
  <script src="plugins/owl-carousel/owl.carousel.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script src="plugins/counter-up/jquery.counterup.min.js"></script>
  <script src="plugins/isotope/isotope.min.js"></script>
  <script src="plugins/isotope/jquery.fancybox.pack.js"></script>
  <script src="plugins/isotope/isotope-triger.js"></script>
  <script src="plugins/countdown/jquery.syotimer.js"></script>
  <script src="plugins/velocity/velocity.min.js"></script>
  <script src="plugins/smoothscroll/SmoothScroll.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>