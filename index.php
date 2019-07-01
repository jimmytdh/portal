<?php
    $host = $_SERVER['SERVER_NAME'];
    $url = "http://$host/tdh";
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <title>Cebu South Medical Center Portal</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:tmc.cebu.doh@gmail.com">tmc.cebu.doh@gmail.com</a>
        <i class="fa fa-phone"></i> (032) 273-3226
      </div>
      <div class="social-links float-right">
        <a href="https://www.facebook.com/DOHTDHCebu/" class="facebook"><i class="fa fa-facebook"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">CSMC<span>Portal</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="#about">About</a></li>
          <li class="menu-has-children"><a href="#">Information System</a>
            <ul>
              <li><a href="#his"><i class="fa fa-heartbeat"></i> &nbsp;Health Information System(HIS)</a></li>
              <li><a href="#management"><i class="fa fa-briefcase"></i> &nbsp;Management Information System (MIS)</a></li>
              <li><a href="#hris"><i class="fa fa-group"></i> &nbsp;Human Resource Information System (HRIS)</a></li>
            </ul>
          </li>
          <li><a href="#team">Our Team</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>Cebu South Medical Center<br /><span>Information Systems!</span></h2>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="img/about-img.jpg" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>CSMC - Information Systems</h2>
            <h3>Aims to automate health, management and human resource management for much faster transactions and operations.</h3>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Health Information System.</li>
              <li><i class="ion-android-checkmark-circle"></i> Management Information System.</li>
              <li><i class="ion-android-checkmark-circle"></i> Human Resource Information System.</li>
            </ul>


          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="his">
      <div class="container">
        <div class="section-header">
          <h2>Health Information System</h2>
          <p></p>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <a href="<?php echo "$url/his";?>">
                    <div class="box wow fadeInLeft">
                        <div class="icon"><i class="fa fa-hospital-o"></i></div>
                        <h4 class="title">Hospital System</h4>
                        <p class="description">
                            An alternative Web based Information System that helps personnel to automate manual works.
                        </p>
                    </div>
                </a>
            </div>


          <div class="col-lg-6">
              <a href="<?php echo "$url/qs";?>">
                <div class="box wow fadeInLeft">
                  <div class="icon"><i class="fa fa-clock-o"></i></div>
                  <h4 class="title">Queuing System</h4>
                  <p class="description">
                      Web based system that decrease customer wait times and improve your service efficiency.
                  </p>
                </div>
              </a>
          </div>

          <div class="col-lg-6">
              <a href="<?php echo "$url/soc";?>">
                <div class="box wow fadeInRight">
                  <div class="icon"><i class="fa fa-book"></i></div>
                  <h4 class="title">eSOA</h4>
                  <p class="description">
                      Electronic Statement of Account or eSOA automates the manual process of generating SOA to the patients.
                  </p>
                </div>
              </a>
          </div>

            <div class="col-lg-6">
                <a href="<?php echo "$url/nims";?>">
                    <div class="box wow fadeInRight">
                        <div class="icon"><i class="fa fa-bookmark"></i></div>
                        <h4 class="title">NIMS</h4>
                        <p class="description">
                            Web based system that helps Nursing Service Office to automate churva (Si Roland lang bahala ani)
                        </p>
                    </div>
                </a>
            </div>

            <div class="col-lg-6">
                <a href="<?php echo "$url/exps";?>">
                    <div class="box wow fadeInRight">
                        <div class="icon"><i class="fa fa-wheelchair"></i></div>
                        <h4 class="title">ePCB</h4>
                        <p class="description">
                            ePCB or Expanded Primary Care Benefit is an offline web-based system created by Philhealth.
                        </p>
                    </div>
                </a>
            </div>
      </div>

        </div>

      </div>
    </section><!-- #services -->

      <!--==========================
       Management Section
     ============================-->
      <section id="management">
          <div class="container">
              <div class="section-header">
                  <h2>Management Information System</h2>
                  <p></p>
              </div>

              <div class="row">

                  <div class="col-lg-6">
                      <a href="<?php echo "$url/dts";?>">
                          <div class="box wow fadeInLeft">
                              <div class="icon"><i class="fa fa-barcode"></i></div>
                              <h4 class="title">DTS</h4>
                              <p class="description">
                                  Document Tracking System is a web based information system that tracks the flow of the documents.
                              </p>
                          </div>
                      </a>
                  </div>

                  <div class="col-lg-6">
                      <a href="<?php echo "$url/intranet";?>">
                          <div class="box wow fadeInRight">
                              <div class="icon"><i class="fa fa-archive"></i></div>
                              <h4 class="title">INTRANET</h4>
                              <p class="description">
                                  A web based information system that stores all the hospital order records.
                              </p>
                          </div>
                      </a>
                  </div>

                  <div class="col-lg-6">
                      <a href="<?php echo "$url/calendar";?>">
                          <div class="box wow fadeInLeft">
                              <div class="icon"><i class="fa fa-calendar"></i></div>
                              <h4 class="title">CALENDAR</h4>
                              <p class="description">
                                  Web based information system that lists all the events regarding hospital activities.
                              </p>
                          </div>
                      </a>
                  </div>

                  <div class="col-lg-6">
                      <a href="<?php echo "$url/css";?>">
                          <div class="box wow fadeInRight">
                              <div class="icon"><i class="fa fa-files-o"></i></div>
                              <h4 class="title">CSS</h4>
                              <p class="description">
                                  Web based information system that consolidates result based on the CSS Form.
                              </p>
                          </div>
                      </a>
                  </div>

                  <div class="col-lg-6">
                      <a href="<?php echo "$url/srs";?>">
                          <div class="box wow fadeInRight">
                              <div class="icon"><i class="fa fa-wrench"></i></div>
                              <h4 class="title">SRS</h4>
                              <p class="description">
                                  Service Request System allow users to request or borrow equipments from IT Office.
                              </p>
                          </div>
                      </a>
                  </div>
              </div>

          </div>

          </div>
      </section>
      <!--==========================
        HR Section
      ============================-->
      <section id="hris">
          <div class="container">
              <div class="section-header">
                  <h2>Human Resource Information System</h2>
                  <p></p>
              </div>

              <div class="row">
                  <div class="col-lg-6">
                      <a href="<?php echo "$url/dtr";?>">
                          <div class="box wow fadeInLeft">
                              <div class="icon"><i class="fa fa-clock-o"></i></div>
                              <h4 class="title">DTR</h4>
                              <p class="description">
                                  Web based application that allow users to view their Daily Time Record.
                              </p>
                          </div>
                      </a>
                  </div>

                  <div class="col-lg-6">
                      <a href="<?php echo "$url/pis";?>">
                          <div class="box wow fadeInRight">
                              <div class="icon"><i class="fa fa-vcard"></i></div>
                              <h4 class="title">PIS</h4>
                              <p class="description">
                                  A contemporary software tool for comprehensive support of personnel functions
                              </p>
                          </div>
                      </a>
                  </div>

                  <div class="col-lg-6">
                      <a href="<?php echo "$url/payroll";?>">
                          <div class="box wow fadeInRight">
                              <div class="icon"><i class="fa fa-credit-card"></i></div>
                              <h4 class="title">Payroll</h4>
                              <p class="description">
                                  Involves everything that has to do with the payment of employees and the filing of employment taxes.
                              </p>
                          </div>
                      </a>
                  </div>

                  <div class="col-lg-6">
                      <a href="<?php echo "$url/lms";?>">
                          <div class="box wow fadeInRight">
                              <div class="icon"><i class="fa fa-bar-chart"></i></div>
                              <h4 class="title">LMS</h4>
                              <p class="description">
                                  Leave Management System allow the user to check their remaining leave credits.
                              </p>
                          </div>
                      </a>
                  </div>
              </div>

          </div>

          </div>
      </section><!-- #services -->
    <!--==========================
      Our Team Section
    ============================-->
<!--    <section id="team" class="wow fadeInUp">-->
<!--      <div class="container">-->
<!--        <div class="section-header">-->
<!--          <h2>Our Team</h2>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-lg-3 col-md-6"></div>-->
<!--          <div class="col-lg-3 col-md-6">-->
<!--            <div class="member">-->
<!--              <div class="pic"><img src="img/team-1.jpg" alt=""></div>-->
<!--              <div class="details">-->
<!--                <h4>Jimmy B. Lomocso Jr.</h4>-->
<!--                <span>System Analyst/Programmer</span>-->
<!--                <div class="social">-->
<!--                  <a href="#"><i class="fa fa-twitter"></i></a>-->
<!--                  <a href="#"><i class="fa fa-facebook"></i></a>-->
<!--                  <a href="#"><i class="fa fa-google-plus"></i></a>-->
<!--                  <a href="#"><i class="fa fa-linkedin"></i></a>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!---->
<!---->
<!--          <div class="col-lg-3 col-md-6">-->
<!--            <div class="member">-->
<!--              <div class="pic"><img src="img/team-3.jpg" alt=""></div>-->
<!--              <div class="details">-->
<!--                <h4>Wairley Von C. Cabiluna</h4>-->
<!--                <span>Computer Maintenance Technologist</span>-->
<!--                <div class="social">-->
<!--                  <a href="#"><i class="fa fa-twitter"></i></a>-->
<!--                  <a href="#"><i class="fa fa-facebook"></i></a>-->
<!--                  <a href="#"><i class="fa fa-google-plus"></i></a>-->
<!--                  <a href="#"><i class="fa fa-linkedin"></i></a>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!---->
<!---->
<!--        </div>-->
<!---->
<!--      </div>-->
<!--    </section><!-- #team -->-->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
          <p></p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>San Isidro, Talisay City, Cebu</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:(032) 273-3226">(032) 273-3226</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:tmc.cebu.doh@gmail.com ">tmc.cebu.doh@gmail.com </a></p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>TDH Portal</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <!-- Uncomment below if you want to use dynamic Google Maps -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script> -->

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>
</html>
