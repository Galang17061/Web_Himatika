@extends('layouts.layouts_contact._main')
@section('content')
    <div class="over-loader loader-live">
      <div class="loader">
        <div class="loader-item style4">
          <div class="cube1"></div>
          <div class="cube2"></div>
        </div>
      </div>
    </div>
    <!--end loading-->



    <div class="wrapper-boxed">
      <div class="site-wrapper">

        <div class="col-md-12 nopadding">
          <div class="header-section white style1 white pin-style">
            <div class="container">
              <div class="mod-menu">
                <div class="row">
                  <div class="col-sm-2"> <a href="index.html" title="" class="logo mar-4"> <img
                        src="images/logo/logo-dark.png" alt=""> </a> </div>
                  <div class="col-sm-10">
                    <div class="main-nav">
                      <ul class="nav navbar-nav top-nav">
                        <li class="search-parent"> <a href="javascript:void(0)" title=""><i aria-hidden="true"
                              class="fa fa-search"></i></a>
                          <div class="search-box">
                            <div class="content">
                              <div class="form-control">
                                <input type="text" placeholder="Type to search" />
                                <a href="#" class="search-btn"><i aria-hidden="true" class="fa fa-search"></i></a>
                              </div>
                              <a href="#" class="close-btn">x</a>
                            </div>
                          </div>
                        </li>
                        <li class="cart-parent"> <a href="javascript:void(0)" title=""> <i aria-hidden="true"
                              class="fa fa-shopping-cart"></i> <span class="number"> 4 </span> </a>
                          <div class="cart-box">
                            <div class="content">
                              <div class="row">
                                <div class="col-xs-8"> 2 item(s) </div>
                                <div class="col-xs-4 text-right"> <span>$99</span> </div>
                              </div>
                              <ul>
                                <li> <img src="http://via.placeholder.com/80x80" alt=""> Jean & Teashirt
                                  <span>$30</span> <a href="#" title="" class="close-btn">x</a> </li>
                                <li> <img src="http://via.placeholder.com/80x80" alt=""> Jean & Teashirt
                                  <span>$30</span> <a href="#" title="" class="close-btn">x</a> </li>
                              </ul>
                              <div class="row">
                                <div class="col-xs-6"> <a href="#" title="View Cart"
                                    class="btn btn-block btn-warning">View Cart</a> </div>
                                <div class="col-xs-6"> <a href="#" title="Check out"
                                    class="btn btn-block btn-primary">Check out</a> </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="visible-xs menu-icon"> <a href="javascript:void(0)" class="navbar-toggle collapsed"
                            data-toggle="collapse" data-target="#menu" aria-expanded="false"> <i aria-hidden="true"
                              class="fa fa-bars"></i> </a> </li>
                      </ul>
                      <div id="menu" class="collapse">
                        <ul class="nav navbar-nav">
                          <li class="right"> <a href="#">Home</a> <span class="arrow"></span>
                            <ul class="dm-align-2">
                              <li> <a href="index2.html">Home Page 2</a></li>
                              <li> <a href="index3.html">Home Page 3</a></li>
                              <li> <a href="index4.html">Home Page 4</a></li>
                              <li> <a href="index5.html">Home Page 5</a></li>
                              <li> <a href="index6.html">Home Page 6</a></li>
                              <li> <a href="index7.html">Home Page 7</a></li>
                              <li> <a href="index8.html">Home Page 8</a></li>
                              <li> <a href="index9.html">Home Page 9</a></li>
                              <li> <a href="index10.html">Home Page 10</a></li>
                              <li> <a href="index.html">Home Default</a></li>

                            </ul>
                          </li>
                          <li class="active"> <a href="slider-kenburns.html">Pages</a> <span class="arrow"></span>
                            <ul class="dm-align-2">
                              <li> <a href="#">About <span class="sub-arrow dark pull-right"><i
                                      class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span
                                  class="arrow"></span>
                                <ul>
                                  <li> <a href="page-about1.html">About Style 1</a> </li>
                                  <li> <a href="page-about2.html">About Style 2</a> </li>
                                  <li> <a href="page-about3.html">About Style 3</a> </li>
                                  <li> <a href="page-about4.html">About Style 4</a> </li>
                                  <li> <a href="page-about5.html">About Me</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Services <span class="sub-arrow dark pull-right"><i
                                      class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span
                                  class="arrow"></span>
                                <ul>
                                  <li> <a href="page-services1.html">Services Style 1</a> </li>
                                  <li> <a href="page-services2.html">Services Style 2</a> </li>
                                  <li> <a href="page-services3.html">Services Style 3</a> </li>
                                  <li> <a href="page-services4.html">Services Style 4</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Team <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right"
                                      aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                                <ul>
                                  <li> <a href="page-team-classic.html">Team Classic</a> </li>
                                  <li> <a href="page-team-parallax.html">Team Parallax</a> </li>
                                  <li> <a href="page-team-dark.html">Team dark Style</a> </li>
                                  <li> <a href="page-team-creative.html">Team Creative</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">FAQ <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right"
                                      aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                                <ul>
                                  <li> <a href="page-faq1.html">FAQ Style 1</a> </li>
                                  <li> <a href="page-faq2.html">FAQ Style 2</a> </li>
                                </ul>
                              </li>
                              <li class="active"> <a href="#">Contact<span class="sub-arrow dark pull-right"><i
                                      class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span
                                  class="arrow"></span>
                                <ul>
                                  <li> <a href="page-contact.html">Contact Classic</a> </li>
                                  <li> <a href="page-contact-left-sidebar.html">Contact Left Sidebar</a> </li>
                                  <li> <a href="page-contact-right-sidebar.html">Contact Right Sidebar</a> </li>
                                  <li class="active"> <a href="page-contact-map.html">Full Width Map</a> </li>
                                  <li> <a href="page-contact-parallax.html">Contact Parallax</a> </li>
                                  <li> <a href="page-contact-captcha.php">Contact With Captcha</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Other Pages 1<span class="sub-arrow dark pull-right"><i
                                      class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span
                                  class="arrow"></span>
                                <ul>
                                  <li> <a href="page-full-width.html">Full Width Page</a></li>
                                  <li> <a href="page-left-sidebar.html">Left Sidebar</a></li>
                                  <li> <a href="page-right-sidebar.html">Right Sidebar</a></li>
                                  <li> <a href="page-packages.html">Package Plans</a></li>
                                  <li> <a href="page-careers.html">Careers</a></li>
                                  <li> <a href="page-coming-soon.html">Coming Soon</a></li>
                                </ul>
                              </li>
                              <li> <a href="#">Other Pages 2<span class="sub-arrow dark pull-right"><i
                                      class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span
                                  class="arrow"></span>
                                <ul>
                                  <li> <a href="page-login.html">Login</a></li>
                                  <li> <a href="page-register.html">Register</a></li>
                                  <li> <a href="page-sitemap.html">Sitemap</a></li>
                                  <li> <a href="page-maintenance.html">Maintenance</a></li>
                                  <li> <a href="page-404.html">404 Error Page</a></li>
                                  <li> <a href="page-404-2.html">404 Error Page 2</a></li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li> <a href="slider-kenburns.html">Features</a> <span class="arrow"></span>
                            <ul class="dm-align-2">
                              <li> <a href="#">Sliders <span class="sub-arrow dark pull-right"><i
                                      class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span
                                  class="arrow"></span>
                                <ul>
                                  <li> <a href="slider-kenburns.html">KenBurns</a> </li>
                                  <li> <a href="slider-parallax.html">Parallax</a> </li>
                                  <li> <a href="slider-3d.html">3D</a> </li>
                                  <li> <a href="slider-carousel.html">Carousel</a> </li>
                                  <li> <a href="slider-gallery.html">Gallery</a> </li>
                                  <li> <a href="slider-scroll-effect.html">Scroll Efects</a> </li>
                                  <li> <a href="slider-vimeo.html">Vimeo Video</a> </li>
                                  <li> <a href="slider-youtube.html">Youtube Video</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Headers <span class="sub-arrow dark pull-right"><i
                                      class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span
                                  class="arrow"></span>
                                <ul>
                                  <li> <a href="index7.html">Header Light</a> </li>
                                  <li> <a href="page-about5.html">Header Dark</a> </li>
                                  <li> <a href="index4.html">Header Modern</a> </li>
                                  <li> <a href="index.html">Header Transparent</a> </li>
                                  <li> <a href="page-team-creative.html">Header Creative</a> </li>
                                  <li> <a href="index.html">Header Left Logo</a> </li>
                                  <li> <a href="page-team-creative.html">Header Center Logo</a> </li>
                                  <li> <a href="index7.html">Header White</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Menu Styles <span class="sub-arrow dark pull-right"><i
                                      class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span
                                  class="arrow"></span>
                                <ul>
                                  <li> <a href="index.html">Menu Transparent</a> </li>
                                  <li> <a href="index2.html">Menu Left logo</a> </li>
                                  <li> <a href="index7.html">Menu light</a> </li>
                                  <li> <a href="index2.html">Menu Dark</a> </li>
                                  <li> <a href="page-team-creative.html">Menu Center Logo</a> </li>
                                  <li> <a href="index4.html">Menu Boxed</a> </li>
                                  <li> <a href="page-team-creative.html">Menu Center</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Loading Styles<span class="sub-arrow dark pull-right"><i
                                      class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span
                                  class="arrow"></span>
                                <ul>
                                  <li> <a href="loading-style1.html">Loading Style 1</a> </li>
                                  <li> <a href="loading-style2.html">Loading Style 2</a> </li>
                                  <li> <a href="loading-style3.html">Loading Style 3</a> </li>
                                  <li> <a href="loading-style4.html">Loading Style 4</a> </li>
                                  <li> <a href="loading-style5.html">Loading Style 5</a> </li>
                                  <li> <a href="loading-style6.html">Loading Style 6</a> </li>
                                  <li> <a href="loading-style7.html">Loading Style 7</a> </li>
                                  <li> <a href="loading-style8.html">Loading Style 8</a> </li>
                                  <li> <a href="loading-style9.html">Loading Style 9</a> </li>
                                  <li> <a href="loading-style10.html">Loading Style 10</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Footer Styles<span class="sub-arrow dark pull-right"><i
                                      class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span
                                  class="arrow"></span>
                                <ul>
                                  <li> <a href="index3.html">Footer Dark</a> </li>
                                  <li> <a href="index4.html">Footer Light</a> </li>
                                  <li> <a href="index3.html">Footer Simple</a> </li>
                                  <li> <a href="page-about1.html">Footer Parallax</a> </li>
                                  <li> <a href="index8.html">Footer Big</a> </li>
                                  <li> <a href="index5.html">Footer Modern</a> </li>
                                  <li> <a href="index10.html">Footer With Map</a> </li>
                                  <li> <a href="page-about1.html">Footer Transparent</a> </li>
                                  <li> <a href="index4.html">Footer Classic</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Videos<span class="sub-arrow dark pull-right"><i
                                      class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span
                                  class="arrow"></span>
                                <ul>
                                  <li> <a href="shortcodes-videos.html">Youtube Videos</a> </li>
                                  <li> <a href="shortcodes-videos.html">Vimeo Videos</a> </li>
                                  <li> <a href="shortcodes-videos.html">HTML 5 Videos</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Layered PSD Files</a> </li>
                              <li> <a href="#">Unlimited Colors</a> </li>
                              <li> <a href="#">Wide & Boxed</a> </li>
                            </ul>
                          </li>
                          <li class="mega-menu"> <a href="header-style3.html">Portfolio</a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="#" title="home samples">Portfolio columns</a> <span class="arrow"></span>
                                <ul>
                                  <li> <a href="portfolio-1-columns.html"><i class="fa fa-angle-right"></i> &nbsp; One
                                      Column</a> </li>
                                  <li> <a href="portfolio-2-columns.html"><i class="fa fa-angle-right"></i> &nbsp; Two
                                      Column</a> </li>
                                  <li> <a href="portfolio-3-columns.html"><i class="fa fa-angle-right"></i> &nbsp; Three
                                      Column</a> </li>
                                  <li> <a href="portfolio-4-columns.html"><i class="fa fa-angle-right"></i> &nbsp; Four
                                      Column</a> </li>
                                  <li> <a href="portfolio-5-columns.html"><i class="fa fa-angle-right"></i> &nbsp; Five
                                      Column</a> </li>
                                  <li> <a href="portfolio-6-columns.html"><i class="fa fa-angle-right"></i> &nbsp; Six
                                      Column</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Portfolio Styles</a> <span class="arrow"></span>
                                <ul>
                                  <li> <a href="portfolio-masonry.html"><i class="fa fa-angle-right"></i> &nbsp;
                                      Masonry</a> </li>
                                  <li> <a href="portfolio-masonry-projects.html"><i class="fa fa-angle-right"></i>
                                      &nbsp; Masonry-Projects</a> </li>
                                  <li> <a href="portfolio-mosaic.html"><i class="fa fa-angle-right"></i> &nbsp;
                                      Mosaic</a> </li>
                                  <li> <a href="portfolio-mosaic-flat.html"><i class="fa fa-angle-right"></i> &nbsp;
                                      Mosaic-Flat</a> </li>
                                  <li> <a href="portfolio-mosaic-projects.html"><i class="fa fa-angle-right"></i> &nbsp;
                                      Mosaic-Projects</a> </li>
                                  <li> <a href="portfolio-slider-projects.html"><i class="fa fa-angle-right"></i> &nbsp;
                                      slider-projects</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Portfolio Styles</a> <span class="arrow"></span>
                                <ul>
                                  <li> <a href="portfolio-full-width.html"><i class="fa fa-angle-right"></i> &nbsp; Full
                                      Width</a> </li>
                                  <li> <a href="portfolio-gallery.html"><i class="fa fa-angle-right"></i> &nbsp;
                                      Gallery</a> </li>
                                  <li> <a href="portfolio-classic.html"><i class="fa fa-angle-right"></i> &nbsp;
                                      Classic</a> </li>
                                  <li> <a href="portfolio-nospace.html"><i class="fa fa-angle-right"></i> &nbsp; No
                                      Space</a> </li>
                                  <li> <a href="portfolio-boxed-size.html"><i class="fa fa-angle-right"></i> &nbsp;
                                      Boxed Size</a> </li>
                                  <li> <a href="portfolio-modern.html"><i class="fa fa-angle-right"></i> &nbsp;
                                      Modern</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Portfolio Single Page</a> <span class="arrow"></span>
                                <ul>
                                  <li> <a href="portfolio-parallax.html"><i class="fa fa-angle-right"></i> &nbsp;
                                      Parallax Image</a> </li>
                                  <li> <a href="portfolio-video.html"><i class="fa fa-angle-right"></i> &nbsp; Video
                                      Background</a> </li>
                                  <li> <a href="portfolio-left-sidebar.html"><i class="fa fa-angle-right"></i> &nbsp;
                                      Left Sidebar</a> </li>
                                  <li> <a href="portfolio-right-sidebar.html"><i class="fa fa-angle-right"></i> &nbsp;
                                      Right Sidebar</a> </li>
                                  <li> <a href="portfolio-carousel.html"><i class="fa fa-angle-right"></i> &nbsp;
                                      Carousel</a> </li>
                                  <li> <a href="portfolio-fullwidth-image.html"><i class="fa fa-angle-right"></i> &nbsp;
                                      Full width Image</a> </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li class="mega-menu five-col"> <a href="carousel-sliders.html">Shortcodes</a> <span
                              class="arrow"></span>
                            <ul>
                              <li> <a href="#">Shortcodes 1</a> <span class="arrow"></span>
                                <ul>
                                  <li><a href="shortcodes-accordions.html"><i class="fa fa-plus-circle"></i> &nbsp;
                                      Accordions</a> </li>
                                  <li><a href="shortcodes-alerts.html"><i class="fa fa-exclamation"
                                        aria-hidden="true"></i> &nbsp; Alerts</a> </li>
                                  <li><a href="shortcodes-animations.html"><i class="fa fa-bars"></i> &nbsp;
                                      Animations</a> </li>
                                  <li><a href="shortcodes-blockquotes.html"><i class="fa fa-quote-right"
                                        aria-hidden="true"></i> &nbsp; Blockquotes</a> </li>
                                  <li><a href="shortcodes-breadcrumbs.html"><i class="fa fa-share"
                                        aria-hidden="true"></i> &nbsp; Breadcrumbs</a> </li>
                                  <li><a href="shortcodes-buttons.html"><i class="fa fa-external-link"
                                        aria-hidden="true"></i> &nbsp; Buttons</a> </li>
                                  <li><a href="shortcodes-call-to-action.html"><i class="fa fa-level-up"
                                        aria-hidden="true"></i> &nbsp; Call to Action</a> </li>
                                  <li><a href="shortcodes-clients-logos.html"><i class="fa fa-user"
                                        aria-hidden="true"></i> &nbsp; Clients Logos</a> </li>
                                  <li><a href="shortcodes-carousel-sliders.html"><i class="fa fa-sort"
                                        aria-hidden="true"></i> &nbsp; Carousel Sliders</a> </li>
                                  <li><a href="shortcodes-counters.html"><i class="fa fa-text-height"
                                        aria-hidden="true"></i> &nbsp; Counters</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Shortcodes 2</a> <span class="arrow"></span>
                                <ul>
                                  <li><a href="shortcodes-content-boxes.html"><i class="fa fa-th"
                                        aria-hidden="true"></i> &nbsp; Content Boxes</a> </li>
                                  <li><a href="shortcodes-data-tables.html"><i class="fa fa-table"
                                        aria-hidden="true"></i> &nbsp; Data Tables</a> </li>
                                  <li><a href="shortcodes-date-pickers.html"><i class="fa fa-calendar"
                                        aria-hidden="true"></i> &nbsp; Date Pickers</a> </li>
                                  <li><a href="shortcodes-dropcaps.html"><i class="fa fa-font" aria-hidden="true"></i>
                                      &nbsp; Dropcap & Highlight</a> </li>
                                  <li><a href="shortcodes-dividers.html"><i class="fa fa-minus" aria-hidden="true"></i>
                                      &nbsp; Dividers</a> </li>
                                  <li><a href="shortcodes-file-uploads.html"><i class="fa fa-upload"
                                        aria-hidden="true"></i> &nbsp; File Uploads</a> </li>
                                  <li><a href="shortcodes-forms.html"><i class="fa fa-envelope" aria-hidden="true"></i>
                                      &nbsp; Forms</a> </li>
                                  <li><a href="shortcodes-grids.html"><i class="fa fa-th-list" aria-hidden="true"></i>
                                      &nbsp; Grids</a> </li>
                                  <li><a href="shortcodes-heading-styles.html"><i class="fa fa-text-height"
                                        aria-hidden="true"></i> &nbsp; Heading Styles</a> </li>
                                  <li><a href="shortcodes-hover-styles.html"><i class="fa fa-picture-o"
                                        aria-hidden="true"></i> &nbsp; Hover Styles</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Shortcodes 3</a> <span class="arrow"></span>
                                <ul>
                                  <li><a href="shortcodes-icon-boxes.html"><i class="fa fa-th-large"
                                        aria-hidden="true"></i> &nbsp; Icon Boxes</a> </li>
                                  <li><a href="shortcodes-icon-circles.html"><i class="fa fa-circle-o"
                                        aria-hidden="true"></i> &nbsp; Icon Circles</a> </li>
                                  <li><a href="shortcodes-countdown-timers.html"><i class="fa fa-bars"
                                        aria-hidden="true"></i> &nbsp; Countdown Timers</a> </li>
                                  <li><a href="shortcodes-icon-lists.html"><i class="fa fa-list" aria-hidden="true"></i>
                                      &nbsp; Icon Lists</a> </li>
                                  <li><a href="shortcodes-images.html"><i class="fa fa-picture-o"
                                        aria-hidden="true"></i> &nbsp; Images</a> </li>
                                  <li><a href="shortcodes-labels-and-badges.html"><i class="fa fa-adjust"
                                        aria-hidden="true"></i> &nbsp; Labels and Badges</a> </li>
                                  <li><a href="shortcodes-lightbox.html"><i class="fa fa-th" aria-hidden="true"></i>
                                      &nbsp; Lightbox</a> </li>
                                  <li><a href="shortcodes-lists.html"><i class="fa fa-list-ul" aria-hidden="true"></i>
                                      &nbsp; Lists</a> </li>
                                  <li><a href="shortcodes-maps.html"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                      &nbsp; Maps</a> </li>
                                  <li><a href="shortcodes-modal-popup.html"><i class="fa fa-search-plus"
                                        aria-hidden="true"></i> &nbsp; Modal Popup</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Shortcode 4</a> <span class="arrow"></span>
                                <ul>
                                  <li><a href="shortcodes-pagenation.html"><i class="fa fa-exchange"
                                        aria-hidden="true"></i> &nbsp; Pagenation</a> </li>
                                  <li><a href="shortcodes-parallax-backgrounds.html"><i class="fa fa-align-center"
                                        aria-hidden="true"></i> &nbsp; Parallax Backgrounds</a> </li>
                                  <li><a href="shortcodes-pricing-tables.html"><i class="fa fa-table"
                                        aria-hidden="true"></i> &nbsp; Pricing Tables</a> </li>
                                  <li><a href="shortcodes-pie-charts.html"><i class="fa fa-pie-chart"
                                        aria-hidden="true"></i> &nbsp; Pie Charts</a> </li>
                                  <li><a href="shortcodes-pricing-badges.html"><i class="fa fa-external-link"></i>
                                      &nbsp; Pricing Badges</a> </li>
                                  <li><a href="shortcodes-progress-bars.html"><i class="fa fa-outdent"
                                        aria-hidden="true"></i> &nbsp; Progress Bars</a> </li>
                                  <li><a href="shortcodes-process-steps.html"><i class="fa fa-long-arrow-right"
                                        aria-hidden="true"></i> &nbsp; Process Steps</a> </li>
                                  <li><a href="shortcodes-post-styles.html"><i class="fa fa-pencil"
                                        aria-hidden="true"></i> &nbsp; Post Styles</a> </li>
                                  <li><a href="shortcodes-toogle-switches.html"><i class="fa fa-toggle-on"
                                        aria-hidden="true"></i> &nbsp; Toogle Switches</a> </li>
                                  <li><a href="shortcodes-timeline.html"><i class="fa fa-align-left"
                                        aria-hidden="true"></i> &nbsp; Timeline</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Shortcode 5</a> <span class="arrow"></span>
                                <ul>
                                  <li><a href="shortcodes-star-ratings.html"><i class="fa fa-star-half-o"
                                        aria-hidden="true"></i> &nbsp; Star Ratings</a> </li>
                                  <li><a href="shortcodes-sections.html"><i class="fa fa-square-o"
                                        aria-hidden="true"></i> &nbsp; Sections</a> </li>
                                  <li><a href="shortcodes-social-icons.html"><i class="fa fa-twitter"
                                        aria-hidden="true"></i> &nbsp; Social Icons</a> </li>
                                  <li><a href="shortcodes-tabs.html"><i class="fa fa-th-large" aria-hidden="true"></i>
                                      &nbsp; Tabs</a> </li>
                                  <li><a href="shortcodes-team.html"><i class="fa fa-user" aria-hidden="true"></i>
                                      &nbsp; Team</a> </li>
                                  <li><a href="shortcodes-testimonials.html"><i class="fa fa-pencil-square"></i> &nbsp;
                                      Testimonials</a> </li>
                                  <li><a href="shortcodes-tooltips.html"><i class="fa fa-font" aria-hidden="true"></i>
                                      &nbsp; Tooltips</a> </li>
                                  <li><a href="shortcodes-toogles.html"><i class="fa fa-toggle-on"
                                        aria-hidden="true"></i> &nbsp; Toogles</a> </li>
                                  <li><a href="shortcodes-typography.html"><i class="fa fa-text-height"
                                        aria-hidden="true"></i> &nbsp; Typography</a> </li>
                                  <li><a href="shortcodes-videos.html"><i class="fa fa-play-circle"
                                        aria-hidden="true"></i> &nbsp; Videos</a> </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li class="right"> <a href="#">Blog</a> <span class="arrow"></span>
                            <ul class="dm-align-2">
                              <li> <a href="#">Classic <span class="sub-arrow dark pull-right"><i
                                      class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span
                                  class="arrow"></span>
                                <ul>
                                  <li> <a href="blog-full-width.html">Full Width</a> </li>
                                  <li> <a href="blog-left-sidebar.html">Left Sidebar</a> </li>
                                  <li> <a href="blog-right-sidebar.html">Right Sidebar</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Grids <span class="sub-arrow dark pull-right"><i
                                      class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span
                                  class="arrow"></span>
                                <ul>
                                  <li> <a href="blog-1-columns.html">One Column</a> </li>
                                  <li> <a href="blog-2-columns.html">Two Column</a> </li>
                                  <li> <a href="blog-3-columns.html">Three Column</a> </li>
                                  <li> <a href="blog-4-columns.html">Four Column</a> </li>
                                  <li> <a href="blog-5-columns.html">Five Column</a> </li>
                                  <li> <a href="blog-6-columns.html">Six Column</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Default<span class="sub-arrow dark pull-right"><i
                                      class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span
                                  class="arrow"></span>
                                <ul>
                                  <li> <a href="blog-default-full-width.html">Full Width</a> </li>
                                  <li> <a href="blog-default-left-sidebar.html">Left Sidebar</a> </li>
                                  <li> <a href="blog-default-right-sidebar.html">Right Sidebar</a> </li>
                                  <li> <a href="blog-default-author.html">Author Page</a> </li>
                                  <li> <a href="blog-default-comments.html">Blog Comments</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Thumbnail<span class="sub-arrow dark pull-right"><i
                                      class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span
                                  class="arrow"></span>
                                <ul>
                                  <li> <a href="blog-full-width-thumbnail.html">Full Width</a> </li>
                                  <li> <a href="blog-left-sidebar-thumbnail.html">Left Sidebar</a> </li>
                                  <li> <a href="blog-right-sidebar-thumbnail.html">Right Sidebar</a> </li>
                                  <li> <a href="blog-author-thumbnail.html">Author Page</a> </li>
                                  <li> <a href="blog-comments-thumbnail.html">Blog Comments</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Single Post<span class="sub-arrow dark pull-right"><i
                                      class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span
                                  class="arrow"></span>
                                <ul>
                                  <li> <a href="blog-image-post.html">Image Post</a> </li>
                                  <li> <a href="blog-video-post.html">Video Post</a> </li>
                                  <li> <a href="blog-gallery-post.html">Gallery Post</a> </li>
                                  <li> <a href="blog-sidebar-post.html">Sidebar Post</a> </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li class="right"> <a href="#">Shop</a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="#">Default<span class="sub-arrow dark pull-right"><i
                                      class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span
                                  class="arrow"></span>
                                <ul>
                                  <li> <a href="shop-full-width.html">Full Width</a> </li>
                                  <li> <a href="shop-left-sidebar.html">Left Sidebar</a> </li>
                                  <li> <a href="shop-right-sidebar.html">Right Sidebar</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Grids <span class="sub-arrow dark pull-right"><i
                                      class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span
                                  class="arrow"></span>
                                <ul>
                                  <li> <a href="shop-2-columns.html">Two Column</a> </li>
                                  <li> <a href="shop-3-columns.html">Three Column</a> </li>
                                  <li> <a href="shop-4-columns.html">Four Column</a> </li>
                                  <li> <a href="shop-5-columns.html">Five Column</a> </li>
                                  <li> <a href="shop-6-columns.html">Six Column</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Single Product<span class="sub-arrow dark pull-right"><i
                                      class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span
                                  class="arrow"></span>
                                <ul>
                                  <li> <a href="shop-single-full-width.html">Full Width</a> </li>
                                  <li> <a href="shop-single-left-sidebar.html">Left Sidebar</a> </li>
                                  <li> <a href="shop-single-right-sidebar.html">Right Sidebar</a> </li>
                                  <li> <a href="shop-single-both-sidebar.html">both Sidebars</a> </li>
                                </ul>
                              </li>
                              <li> <a href="#">Order Process<span class="sub-arrow dark pull-right"><i
                                      class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span
                                  class="arrow"></span>
                                <ul>
                                  <li> <a href="shop-cart.html">Shoping Cart</a> </li>
                                  <li> <a href="shop-checkout.html">Checkout</a> </li>
                                  <li> <a href="shop-wishlist.html">Wishlist</a> </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--end menu-->

        </div>
        <!--end menu-->

        <div class="clearfix"></div>
        <section class="section-side-image clearfix">
          <div class="img-holder col-md-12 col-sm-12 col-xs-12">
            <div class="background-imgholder" style="background:url(http://via.placeholder.com/1500x1000);"><img
                class="nodisplay-image" src="http://via.placeholder.com/1500x1000" alt="" /> </div>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
                <div class="header-inner less-height">
                  <div class="overlay">
                    <div class="text text-center">
                      <h3 class="uppercase text-white less-mar-1 title">Contact with full width map</h3>
                      <h6 class="uppercase text-white sub-title">Get Many More Features</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class=" clearfix"></div>
        <!--end header section -->

        <section>
          <div class="pagenation-holder">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <h4>Contact with full width map</h4>
                </div>
                <div class="col-md-6">
                  <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="current"><a href="#">Contact with full width map</a></li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="clearfix"></div>
        <!--end section-->


        <section class="sec-padding">
          <div class="container">
            <div class="row">

              <div class="col-md-8">
                <div class="smartforms-modal-body">
                  <div class="smart-wrap">
                    <div class="smart-forms smart-container transparent wrap-full">
                      <div class="form-body no-padd">
                        <form method="post" action="php/smartprocess.php" id="smart-form">

                          <div class="section">
                            <label class="field prepend-icon">
                              <input type="text" name="sendername" id="sendername" class="gui-input"
                                placeholder="Enter name">
                              <span class="field-icon"><i class="fa fa-user"></i></span>
                            </label>
                          </div><!-- end section -->

                          <div class="section">
                            <label class="field prepend-icon">
                              <input type="email" name="emailaddress" id="emailaddress" class="gui-input"
                                placeholder="Email address">
                              <span class="field-icon"><i class="fa fa-envelope"></i></span>
                            </label>
                          </div><!-- end section -->


                          <div class="section">
                            <label class="field prepend-icon">
                              <input type="text" name="telephone" id="telephone" class="gui-input"
                                placeholder="Enter Telephone...">
                              <span class="field-icon"><i class="fa fa-phone-square"></i></span>
                            </label>
                          </div><!-- end section -->


                          <div class="section">
                            <label class="field prepend-icon">
                              <input type="text" name="sendersubject" id="sendersubject" class="gui-input"
                                placeholder="Enter subjec">
                              <span class="field-icon"><i class="fa fa-lightbulb-o"></i></span>
                            </label>
                          </div><!-- end section -->

                          <div class="section">
                            <label class="field prepend-icon">
                              <textarea class="gui-textarea" id="sendermessage" name="sendermessage"
                                placeholder="Enter message"></textarea>
                              <span class="field-icon"><i class="fa fa-comments"></i></span>
                              <span class="input-hint"> <strong>Hint:</strong> Please enter between 80 - 300
                                characters.</span>
                            </label>
                          </div><!-- end section -->


                          <div class="result"></div><!-- end .result  section -->

                          <!-- end .form-body section -->
                          <div class="form-footer text-left">
                            <button type="submit" data-btntext-sending="Sending..."
                              class="button btn-primary">Submit</button>
                            <button type="reset" class="button"> Cancel </button>
                          </div><!-- end .form-footer section -->
                        </form>
                      </div><!-- end .form-body section -->
                    </div><!-- end .smart-forms section -->
                  </div><!-- end .smart-wrap section -->
                </div><!-- end .smart-wrap section -->
                <!-- end .smart-forms section -->
              </div>
              <!--end item-->

              <div class="col-md-4 text-left">
                <h2 class="uppercase"><strong>Get in Touch</strong></h2>
                <br />
                <h4>Address Info</h4>
                <h6>Company name</h6>
                <p>3096 Cemetery Hollow Street, Houston, TX 77099
                  Telephone: +1 1234-567-89000
                  FAX: +1 0123-4567-8900</p>
                <br />
                <p>E-mail: email@example.com</p>
                <p>Website: www.example.com</p>
              </div>
              <!--end item-->



            </div>
          </div>
        </section>
        <div class="clearfix"></div>
        <!-- end section -->


        <section>
          <div class="container-fluid">
            <div class="row">
              <div class="gmaps-holder-2">
                <div class="col-md-12 nopadding"> <br />
                  <div id="map_extended_full" class="map">
                    <p>This will be replaced with the Google Map.</p>
                  </div>
                </div>
              </div>
              <!--end item-->

            </div>
          </div>
        </section>
        <div class="clearfix"></div>
        <!-- end section -->

        <div class="section-dark sec-padding">
          <div class="container">
            <div class="row">

              <div class="col-md-3 col-sm-12 colmargin clearfix margin-bottom">
                <div class="fo-map">
                  <div class="footer-logo"><img src="images/logo/logo.png" alt="" /></div>

                  <address>
                    <strong class="text-white">Address:</strong>
                    <br>
                    No.28 - 63739 street lorem ipsum,
                    <br>
                    ipsum City, Country
                  </address>

                  <span><strong class="text-white">Phone:</strong> + 1 (234) 567 8901</span><br>
                  <span><strong class="text-white">Email:</strong> email@example.com </span><br>
                  <span><strong class="text-white">Fax:</strong> + 1 (234) 567 8901</span>
                  <ul class="footer-social-icons primary left-align icons-plain text-center">
                    <li><a class="twitter" href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="active" href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
              <!--end item-->

              <div class="col-md-3 col-xs-12 clearfix margin-bottom">
                <h4 class="text-white uppercase less-mar3 font-weight-5">Popular Services</h4>
                <div class="clearfix"></div>
                <div class="footer-title-bottomstrip"></div>
                <ul class="footer-quick-links-4 white">
                  <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i> Aliquam porttitor vestibulum ipsum</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
                </ul>
              </div>
              <!--end item-->

              <div class="col-md-3 col-sm-12 col-xs-12 bmargin clearfix margin-bottom">
                <div class="item-holder">
                  <h4 class="text-white uppercase less-mar3">Recent Posts</h4>
                  <div class="fo-title-bottom-line white"></div>
                  <div class="clearfix"></div>
                  <div class="fo-posts">
                    <div class="imgbox-medium left"><img src="http://via.placeholder.com/300x300" alt=""
                        class="img-responsive" /></div>
                    <div class="text-box-right">
                      <h6 class="less-mar3 uppercase nopadding text-white"><a href="#">Aenean arcu tortor</a></h6>
                      <p>Lorem ipsum dolor</p>
                      <div class="post-info"> <span>By John Doe</span><span> June 19</span> </div>
                    </div>
                  </div>
                  <div class=" divider-line light solid light opacity-1 "></div>
                  <div class="clearfix"></div>
                  <br />
                  <div class="fo-posts">
                    <div class="imgbox-medium left"><img src="http://via.placeholder.com/300x300" alt=""
                        class="img-responsive" /></div>
                    <div class="text-box-right">
                      <h6 class="less-mar3 uppercase nopadding text-white"><a href="#">Maecenas sed nisl amet</a></h6>
                      <p>Lorem ipsum dolor</p>
                      <div class="post-info"> <span>By John Doe</span><span> June 19</span> </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--end item-->

              <div class="col-md-3 col-xs-12 clearfix margin-bottom">
                <h4 class="text-white uppercase less-mar3 font-weight-5">Need Help</h4>
                <div class="clearfix"></div>
                <div class="footer-title-bottomstrip"></div>
                <ul class="footer-quick-links-4 white">
                  <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i> Aliquam porttitor vestibulum ipsum</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
                </ul>
              </div>
              <!--end item-->

              <div class="clearfix"></div>
              <div class="col-divider-margin-5"></div>
              <div class="col-md-12">
                <input class="bb-newsletter" type="search" placeholder="Your Name">
                <input class="bb-newsletter-email" type="search" placeholder="Email Address">
                <input name="search" value="Submit" class="bb-newsletter-btn" type="submit">
              </div>
              <!--end newsletter-->
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <!-- end section -->

        <section class="sec-padding-6">
          <div class="container">
            <div class="row">
              <div class="fo-copyright-holder text-center">

                Copyright © 2019 l yourdomain.com. All rights reserved. </div>
            </div>
          </div>
        </section>
        <div class="clearfix"></div>
        <!-- end section -->

        <a href="#" class="scrollup"></a><!-- end scroll to top of the page-->

      </div>
      <!--end site wrapper-->
    </div>
    <!--end wrapper boxed-->
    @endsection