@include('header')
<!-- jumbotron -->
      <div class="blog jumbotron">
         <div class="container">
            <div class="col-lg-6 col-centered text-center">
               <h1 class="text-light">Calendar</h1>
               <!-- Breadcrumb -->
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a  href="index.blade.php">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                  </ol>
               </nav>
               <!-- /breadcrumb -->
            </div>
         </div>
         <!-- /.container -->
      </div>
      <!-- /jumbotron -->
      <!-- Clouds SVG Divider -->
      <svg id="deco-clouds2" class="head d-none d-md-block" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
         <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
         </path>
      </svg>
      <!-- Parallax objects -->
      <div class="blog-object1 d-none d-lg-block" data-0="opacity:1;"
         data-100="transform:translatey(0%);"
         data-1025="transform:translatey(-80%);">
         <!-- Image -->
         <img src="img/blogobject1.png" alt="">
      </div>
      <div class="blog-object2 d-none d-lg-block" data-0="opacity:1;"
         data-100="transform:translatey(0%);"
         data-1025="transform:translatey(-80%);">
         <!-- Image -->
         <img src="img/blogobject2.png" alt="">
      </div>
      <!-- Page Content -->
      <div id="page" class="container">
         <!-- single post -->
         <div class="single-page col-md-12">
            <!-- Please Read the documentation to learn how to edit the calendar -->
            <div id="calendar" class="margin1"></div>
         </div>
         <!-- /col-md-12 -->
      </div>
      <!-- /page -->
      <!-- Footer -->
      <div id="footer-divider" class="container-fluid cloud-divider white">
         <!-- Clouds SVG Divider -->
         <svg id="deco-clouds" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M-5 100 Q 0 20 5 100 Z
               M0 100 Q 5 0 10 100
               M5 100 Q 10 30 15 100
               M10 100 Q 15 10 20 100
               M15 100 Q 20 30 25 100
               M20 100 Q 25 -10 30 100
               M25 100 Q 30 10 35 100
               M30 100 Q 35 30 40 100
               M35 100 Q 40 10 45 100
               M40 100 Q 45 50 50 100
               M45 100 Q 50 20 55 100
               M50 100 Q 55 40 60 100
               M55 100 Q 60 60 65 100
               M60 100 Q 65 50 70 100
               M65 100 Q 70 20 75 100
               M70 100 Q 75 45 80 100
               M75 100 Q 80 30 85 100
               M80 100 Q 85 20 90 100
               M85 100 Q 90 50 95 100
               M90 100 Q 95 25 100 100
               M95 100 Q 100 15 105 100 Z">
            </path>
         </svg>
      </div>
      <footer>
         <div class="container">
            <div class="row">
               <!-- Newsletter -->
               <div class="col-lg-3 text-center res-margin my-auto">
                  <h6 class="text-light">Sign our Newsletter</h6>
                  <!-- Begin Mailchimp Signup Form -->
                  <div id="mc_embed_signup">
                     <!-- change your mailchimp URL below -->
                     <form action="//yourlist.us12.list-manage.com/subscribe/post?u=04e646927a196552aaee78a7b&amp;id=111" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                           <div class="mc-field-group">
                              <input type="email" value="" name="EMAIL" placeholder="Email address" class="form-control required email" id="mce-EMAIL">
                           </div>
                           <div id="mce-responses" class="clear foot">
                              <div class="response mt-2" id="mce-error-response" ></div>
                              <div class="response alert alert-success mt-2" id="mce-success-response"></div>
                           </div>
                           <div class="optionalParent">
                              <div class="clear foot">
                                 <input type="submit" class="btn btn-primary" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                  <!--End mc_embed_signup-->
               </div>
               <!-- /col-lg -->
               <!-- Bottom Credits -->
               <div class="col-lg-6 res-margin my-auto">
                  <a href="#page-top"><img src="img/logo.png"  alt="" class="d-block mx-auto"></a>
                  <!-- social-icons -->
                  <div class="social-media text-center mt-3">
                     <a href="#" title=""><i class="fa-brands fa-twitter"></i></a>
                     <a href="#" title=""><i class="fa-brands fa-facebook-f"></i></a>
                     <a href="#" title=""><i class="fa-brands fa-linkedin"></i></a>
                     <a href="#" title=""><i class="fa-brands fa-pinterest"></i></a>
                     <a href="#" title=""><i class="fa-brands fa-instagram"></i></a>
                  </div>
               </div>
               <!-- /col-lg- -->
               <!-- Opening Hours -->
               <div class="col-lg-3 my-auto text-center">
                  <!-- Sign-->
                  <h6 class="text-light">Opening Hours:</h6>
                  <!-- Table-->
                  <table class="table">
                     <tbody>
                        <tr class="text-light">
                           <td>Monday to Friday</td>
                           <td>7 a.m. to 7 p.m.</td>
                        </tr>
                        <tr class="text-light">
                           <td>Weekends / Holidays</td>
                           <td><span class="badge bg-danger m-0">Closed</span></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <!-- /col-lg- -->
            </div>
            <!-- / row -->
         </div>
         <!-- / container -->
         <hr>
         <p class="credits">Designed by  <a href="http://www.ingridkuhn.com">Ingrid Kuhn</a></p>
         <!-- /container -->
         <!-- Go To Top Link -->
         <div class="page-scroll d-none d-lg-block">
            <a href="#page-top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
         </div>
      </footer>
      <!-- /footer ends -->
      <!-- Core JavaScript Files -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Main Js -->
      <script src="js/main.js"></script>
      <!--Other Plugins -->
      <script src="js/plugins.js"></script>
      <!-- Calendar -->
      <script src="js/calendar_edit.js"></script>
      <script src="js/fullcalendar.js"></script>
   </body>
</html>
