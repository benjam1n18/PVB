@include('header')
<!-- jumbotron -->
      <div class="blog jumbotron">
         <div class="container">
            <div class="col-lg-6 col-centered text-center">
               <h1 class="text-light">Blog Post</h1>
               <!-- Breadcrumb -->
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
                     <li class="breadcrumb-item"><a href="blog-home.blade.php">Blog</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Blog Post</li>
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
         data-start="transform:translatey(0%);"
         data-top="transform:translatey(-80%);">
         <!-- Image -->
         <img src="img/blogobject1.png" alt="">
      </div>
      <div class="blog-object2 d-none d-lg-block" data-0="opacity:1;"
         data-start="transform:translatey(0%);"
         data-top="transform:translatey(-80%);">
         <!-- Image -->
         <img src="img/blogobject2.png" alt="">
      </div>
      <!-- Page Content -->
      <div id="page" class="container pb-lg-0">
         <div class="row">
            <!-- Blog Post -->
            <div class="single-page-collumn col-lg-9">
               <!-- Content-->
               <div class="blog-post post-main">
                  <h2>Everything about our Daycare</h2>
                  <!-- Post Info -->
                  <div class="post-info">
                     <p><i class="fa-regular fa-clock"></i>Posted on Aug 24, 2023 at 9:00 PM</p>
                     <p><i class="fa fa-user"></i>by <a href="#">Mary Jane</a></p>
                     <!-- Post Comments -->
                     <p><i class="fa fa-comment"></i>3 Comments</p>
                  </div>
                  <!-- Image -->
                  <img class="img-fluid mx-auto d-block" src="img/blogmain1.jpg" alt="">
                  <!-- Post Content -->
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis tincidunt rhoncus. Integer pulvinar elit ligula, laoreet imperdiet magna consectetur vel. Nullam tempus, tellus sed laoreet porttitor, urna quam efficitur magna, id vestibulum arcu massa eget risus.</p>
                  <p>Mauris sagittis elit nec magna congue aliquam. Nam sollicitudin urna nunc, eu iaculis leo vulputate vel. Donec ultrices ipsum laoreet suscipit consectetur. In pulvinar diam arcu, eu tincidunt arcu mollis quis. Sed vulputate pharetra enim ac pretium. Quisque at rutrum nunc, nec dictum ligula. Vestibulum magna nibh, dapibus at eros et, auctor sagittis ipsum.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
                  <p>Laoreet imperdiet magna consectetur vel. Nullam tempus, tellus sed laoreet porttitor, urna quam efficitur magna, id vestibulum arcu massa eget risus. Mauris sagittis elit nec magna congue aliquam. Nam sollicitudin urna nunc, eu iaculis leo vulputate vel. Donec ultrices ipsum laoreet suscipit consectetur.
                  </p>
                  <p>In pulvinar diam arcu, eu tincidunt arcu mollis quis. Sed vulputate pharetra enim ac pretium. Quisque at rutrum nunc, nec dictum ligula. Vestibulum magna nibh, dapibus at eros et, auctor sagittis ipsum.</p>
                  <div class="post-info">
                     <!-- Tags -->
                     <div class="blog-tags">
                        <p><i class="fa fa-tags"></i>Tags:</p>
                        <a href="#">Events</a> <a href="#">Daycare</a> <a href="#">Fruit Salad</a> <a href="#">Education</a>
                     </div>
                  </div>
                  <!-- /post-info -->
               </div>
               <!-- /blog-post -->
               <!-- Comments Form -->
               <div class="card mt-5">
                  <h5>Leave a Comment:</h5>
                  <!-- Form Starts -->
                  <div class="form-group">
                     <input type="text" name="name" class="form-control input-field" placeholder="Name">
                     <input type="email" name="email" class="form-control input-field" placeholder="Email ID" >
                  </div>
                  <textarea name="message" id="message" class="textarea-field form-control" rows="4" placeholder="Enter your Comment"></textarea>
                  <button type="submit" value="Submit" class="btn mx-auto">Send Comment</button>
               </div>
               <!-- Posted Comments -->
               <div class="comments-block mt-5">
                  <h4>Comments</h4>
                  <hr>
                  <!-- Comment -->
                  <div class="comment">
                     <a href="#">
                     <img class="comment-img  img-fluid rounded-circle" src="img/comment1.jpg" alt="">
                     </a>
                     <div class="comment-body">
                        <a href="#">
                           <h6 class="comment-heading">Maria Silva
                              <small>August 25, 2022 at 9:30 PM</small>
                           </h6>
                        </a>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>
                        <!-- Reply Button -->
                        <div class="d-md-flex justify-content-md-end">
                           <a class="btn">Reply</a>
                        </div>
                     </div>
                  </div>
                  <!-- /comment -->
                  <!-- Comment -->
                  <div class="comment">
                     <a href="#">
                     <img class="comment-img  img-fluid rounded-circle" src="img/comment2.jpg" alt="">
                     </a>
                     <div class="comment-body">
                        <a href="#">
                           <h6 class="comment-heading">Mariane Lindberg
                              <small>August 25, 2022 at 9:30 PM</small>
                           </h6>
                        </a>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>
                        <!-- Reply Button -->
                        <div class="d-md-flex justify-content-md-end">
                           <a class="btn">Reply</a>
                        </div>
                        <!-- Nested Comment -->
                        <div class="comment nested">
                           <a href="#">
                           <img class="comment-img img-fluid rounded-circle" src="img/comment3.jpg" alt="">
                           </a>
                           <div class="comment-body">
                              <a href="#">
                                 <h6 class="comment-heading">Nested Comment
                                    <small>August 25, 2022 at 9:30 PM</small>
                                 </h6>
                              </a>
                              <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                              </p>
                              <!-- Reply Button -->
                              <div class="d-md-flex justify-content-md-end">
                                 <a class="btn">Reply</a>
                              </div>
                           </div>
                        </div>
                        <!-- /comment -->
                        <!-- End Nested Comment -->
                     </div>
                     <!-- /comment-body -->
                  </div>
                  <!-- /comment -->
               </div>
               <!-- /comments block -->
            </div>
            <!-- /single-collumn -->
            <!-- Sidebar -->
            <div class="sidebar col-lg-3">
               <!-- About us Widget -->
               <div class="card">
                  <h5>About Us</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                  <!-- Social Media icons -->
                  <div class="social-media">
                     <a href="#" title=""><i class="fa-brands fa-twitter"></i></a>
                     <a href="#" title=""><i class="fa-brands fa-facebook-f"></i></a>
                     <a href="#" title=""><i class="fa-brands fa-linkedin"></i></a>
                     <a href="#" title=""><i class="fa-brands fa-pinterest"></i></a>
                     <a href="#" title=""><i class="fa-brands fa-instagram"></i></a>
                  </div>
               </div>
               <!-- Blog Search -->
               <div class="card">
                  <h5>Search</h5>
                  <!-- input group -->
                  <div class="input-group mb-3">
                     <input type="text" class="form-control" placeholder="search..">
                     <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                  </div>
                  <!-- /input group -->
               </div>
               <!-- /card -->
               <!-- Blog Categories -->
               <div class="card">
                  <h5>Categories</h5>
                  <div class="row">
                     <ul class="list-unstyled">
                        <li><a href="#">Parent's Book</a>
                        </li>
                        <li><a href="#">Events and News</a>
                        </li>
                        <li><a href="#">Teachers</a>
                        </li>
                        <li><a href="#">Updates</a>
                        </li>
                     </ul>
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /card -->
               <!-- Text Widget-->
               <div class="card">
                  <h5>Text Widget</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
               </div>
               <!-- /card -->
               <!-- Image Widget -->
               <div class="card">
                  <h5>Image</h5>
                  <img src="img/imgwidget.jpg" class="img-fluid" alt="">
               </div>
               <!-- /card -->
               <!-- Tags Widget -->
               <div class="card">
                  <h5>Tags</h5>
                  <div class="blog-tags">
                     <a href="#">Daycare</a> <a href="#">Concert</a> <a href="#">Father's day</a> <a href="#">Fun</a> <a href="#">Activity</a> <a href="#">Toys</a> <a href="#">Offer</a>
                  </div>
               </div>
               <!-- /card -->
               <!-- Accordion -->
               <div class="card">
                  <h5>Accordion</h5>
                  <div class="accordion" id="accordionExample">
                     <!--accordion item -->
                     <div class="accordion-item">
                        <h5 class="accordion-header" id="headingOne">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           Activities
                           </button>
                        </h5>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>Aenean ut ex leo. Nulla faucibus turpis sit amet turpis mattis vestibulum et vel enim. Suspendisse magna magna, consectetur at erat non, mattis aliquet elit. </p>
                           </div>
                        </div>
                     </div>
                     <!--accordion item -->
                     <div class="accordion-item">
                        <h5 class="accordion-header" id="headingTwo">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           Age Group
                           </button>
                        </h5>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>Vivamus finibus lorem diam, sit amet facilisis tellus placerat Aliquam porttitor ut lectus eget imperdiet. Aenean ut ex leo. Nulla faucibus turpis sit amet turpis mattis vestibulum et vel enim. Suspendisse magna magna, consectetur at erat non, mattis aliquet elit. </p>
                              <p>Fusce at nibh lacinia orci dictum euismod. Praesent vel nisl in quam commodo tristique.
                              </p>
                           </div>
                        </div>
                     </div>
                     <!--accordion item -->
                     <div class="accordion-item">
                        <h5 class="accordion-header" id="headingThree">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                           Timetable
                           </button>
                        </h5>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>Vivamus finibus lorem diam, sit amet facilisis tellus placerat Aliquam porttitor ut lectus eget imperdiet. Aenean ut ex leo. Nulla faucibus turpis sit amet turpis mattis vestibulum et vel enim. Suspendisse magna magna, consectetur at erat non, mattis aliquet elit. </p>
                              <p>Fusce at nibh lacinia orci dictum euismod. Praesent vel nisl in quam commodo tristique.
                              </p>
                           </div>
                        </div>
                     </div>
                     <!--/accordion item -->
                  </div>
                  <!--/accordion -->
               </div>
               <!-- /card -->
            </div>
            <!-- /sidebar -->
         </div>
         <!-- / row -->
      </div>
      <!-- /blog-page -->
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
   </body>
</html>
