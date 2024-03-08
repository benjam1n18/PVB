@include('header')
      <div class="blog jumbotron">
         <div class="container">
            <div class="col-lg-6 col-centered text-center">
               <h1 class="text-light">Theme Elements</h1>
               <!-- Breadcrumb -->
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a  href="index.blade.php">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Elements</li>
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
      <div id="page" class="container">
         <!-- Extras -->
         <div class="col-lg-12">
            <!-- Basic elements -->
            <div class="section-heading">
               <h2>Basic Elements</h2>
            </div>
            <!-- /page-header -->
            <div class="row">
               <div class="col-lg-12">
                  <!-- Typography -->
                  <h3 class="subheader">Typography</h3>
                  <div class="row">
                     <div class="col-lg-6">
                        <h1>Header h1</h1>
                        <h2>Testing Header h2</h2>
                        <h3>Testing Header h3</h3>
                        <h4>Testing Header h4</h4>
                        <h5>Testing Header h5</h5>
                        <h6>Testing Header h6</h6>
                        <div class="section-heading">
                           <h2>Testing Section heading</h2>
                        </div>
                     </div>
                     <div class="col-lg-5 offset-lg-1">
                        <p class="text-primary">.text-primary</p>
                        <p class="text-secondary">.text-secondary</p>
                        <p class="text-success">.text-success</p>
                        <p class="text-danger">.text-danger</p>
                        <p class="text-warning bg-dark">.text-warning</p>
                        <p class="text-info bg-dark">.text-info</p>
                        <p class="text-light bg-dark">.text-light</p>
                        <p class="text-dark">.text-dark</p>
                        <p class="text-body">.text-body</p>
                        <p class="text-muted">.text-muted</p>
                        <p class="text-white bg-dark">.text-white</p>
                        <p class="text-black-50">.text-black-50</p>
                        <p class="text-white-50 bg-dark">.text-white-50</p>
                     </div>
                  </div>
                  <!-- /row-->
               </div>
               <!-- /col-->
            </div>
            <!--/row-->
            <div class="row mt-5">
               <div class="section-heading mt-5">
                  <h2>Extras</h2>
               </div>
               <div class="col-lg-4">
                  <h5 class="mt-5">Breadcrumbs</h5>
                  <!-- breadcrumb -->
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a  href="index.blade.php">Home</a></li>
                        <li class="breadcrumb-item"><a  href="#">Page</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Elements</li>
                     </ol>
                  </nav>
                  <!-- /breadcrumb -->
                  <!-- Pagination -->
                  <h5 class="mt-5">Pagination</h5>
                  <nav aria-label="Page navigation example">
                     <ul class="pagination">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                     </ul>
                  </nav>
                  <!-- Lists -->
                  <h5 class="mt-5">Basic list</h5>
                  <ul>
                     <li>Home</li>
                     <li>Products</li>
                     <li>About Us</li>
                     <li>Contact</li>
                  </ul>
                  <!--List Group-->
                  <h5 class="mt-5">List Group</h5>
                  <div class="list-group">
                     <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                     The current link item
                     </a>
                     <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                     <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                     <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                     <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1">A disabled link item</a>
                  </div>
                  <h5 class="mt-5">Badges</h5>
                  <span class="badge rounded-pill bg-primary">Primary</span>
                  <span class="badge rounded-pill bg-secondary">Secondary</span>
                  <span class="badge rounded-pill bg-success">Success</span>
                  <span class="badge rounded-pill bg-danger">Danger</span>
                  <span class="badge rounded-pill bg-warning text-dark">Warning</span>
                  <span class="badge rounded-pill bg-info text-dark">Info</span>
                  <span class="badge rounded-pill bg-light text-dark">Light</span>
                  <span class="badge rounded-pill bg-dark">Dark</span>
                  <!--/col-md-2 -->
                  <!--Shadows -->
                  <h5 class="mt-5">Shadows</h5>
                  <div class="shadow-sm p-3 mb-5 bg-body rounded">Small shadow</div>
                  <div class="shadow p-3 mb-5 bg-body rounded">Regular shadow</div>
                  <div class="shadow-lg p-3 mb-5 bg-body rounded">Larger shadow</div>
               </div>
               <!-- /col-md-4 -->
               <div class="col-lg-7 offset-lg-1">
                  <!-- Tabs -->
                  <h5 class="mt-5">Tabs</h5>
                  <!--nav tabs -->
                  <ul class="nav nav-tabs justify-content-center" id="pills-tab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab"  aria-selected="true">Tab 1</button>
                     </li>
                     <!--/nav-item -->
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab"  aria-selected="false">Tab 2</button>
                     </li>
                     <!--/nav-item -->
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-selected="false">Tab 3</button>
                     </li>
                     <!--/nav-item -->
                  </ul>
                  <!--/nav-tabs -->
                  <div class="tab-content color_block" id="pills-tabContent">
                     <div class="tab-pane  show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                        <h4>Tab 1</h4>
                        <p>Felis tiam non metus Placerat a ultricies a, posuere lorem ipseut lincas psuiem t volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi quidem minus id omnis a nibh fusce mollis imperdie tlorem ipuset campas fincas interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget usce mollis imperdiet interdum donec eget metus auguen unc vel lorem ispuet Ibu lum orci eget, viverra elit l</p>
                     </div>
                     <!--/tab-pane -->
                     <div class="tab-pane " id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                        <h4>Tab 2</h4>
                        <p>Felis tiam non metus Placerat a ultricies a.</p>
                        <p>																	 posuere lorem ipseut lincas psuiem t volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi quidem minus id omnis a nibh fusce mollis imperdie tlorem ipuset campas fincas interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget usce mollis imperdiet interdum donec eget metus auguen unc vel lorem ispuet Ibu lum orci eget, viverra elit l</p>
                     </div>
                     <!--/tab-pane -->
                     <div class="tab-pane" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                        <h4>Tab 3</h4>
                        <p>Felis tiam non metus Placerat a ultricies a, posuere lorem ipseut lincas psuiem t volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi quidem minus id omnis a nibh fusce mollis imperdie tlorem ipuset campas fincas interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget usce mollis imperdiet interdum donec eget metus auguen unc vel lorem ispuet Ibu lum orci eget, viverra elit l</p>
                     </div>
                     <!--/tab-pane -->
                  </div>
                  <!--/tab-content -->
                  <!-- Pills -->
                  <h5 class="mt-5">Pills</h5>
                  <ul class="nav nav-pills">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Active link</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Link here</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Link here</a>
                     </li>
                  </ul>
                  <!-- Accordions -->
                  <h5 class="mt-5">Accordions</h5>
                  <div class="accordion" id="accordionExample">
                     <!--accordion item -->
                     <div class="accordion-item">
                        <h4 class="accordion-header" id="headingOne">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           Activities
                           </button>
                        </h4>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>Aenean ut ex leo. Nulla faucibus turpis sit amet turpis mattis vestibulum et vel enim. Suspendisse magna magna, consectetur at erat non, mattis aliquet elit. </p>
                           </div>
                        </div>
                     </div>
                     <!--accordion item -->
                     <div class="accordion-item">
                        <h4 class="accordion-header" id="headingTwo">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           Age Group
                           </button>
                        </h4>
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
                        <h4 class="accordion-header" id="headingThree">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                           Timetable
                           </button>
                        </h4>
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
                  <!-- buttons -->
                  <h5 class="mt-5">Buttons</h5>
                  <a href="#" class="btn btn-primary">Primary</a>
                  <a href="#" class="btn btn-secondary">Secondary</a>
                  <div class="dropdown">
                     <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                     Dropdown link
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                     </ul>
                  </div>
               </div>
               <!-- /col-lg- -->
            </div>
            <!--/row-->
            <div class="row">
               <!--Alerts -->
               <h5 class="mt-5">Alerts</h5>
               <div class="col-lg-3">
                  <!-- Closeable Alert -->
                  <div class="alert alert-success">
                     <strong>Success!</strong> Indicates a positive informative change or action
                  </div>
               </div>
               <div class="col-lg-3">
                  <!-- Alert Info -->
                  <div class="alert alert-info">
                     <strong>Info!</strong> Indicates a neutral informative change or action.
                  </div>
               </div>
               <div class="col-lg-3">
                  <!-- Warning Alert -->
                  <div class="alert alert-warning">
                     <strong>Warning!</strong> Indicates a warning that might need attention.
                  </div>
               </div>
               <div class="col-lg-3">
                  <!-- Danger Alert -->
                  <div class="alert alert-danger">
                     <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
                  </div>
               </div>
            </div>
            <!--/row-->
            <div class="row">
               <!-- Tables -->
               <h5 class="mt-5">Tables</h5>
               <table class="table table-bordered table-striped table-hover">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                     </tr>
                     <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                     </tr>
                     <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <!-- /row -->
            <div class="row">
               <div class="col-lg-12 mt-5">
                  <!-- Children Icons -->
                  <h5 class="mt-5">Children Icons</h5>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-alphabet"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-animals"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-back"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-book"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-book-1"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-clip"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-clock"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-folder"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-fruit"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-game"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-gestures"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-hat"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-interface"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-left"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-music"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-people"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-people-1"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-people-2"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-people-3"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-people-4"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-people-5"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-people-6"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-people-7"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-people-8"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-people-9"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-person"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-person-1"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-school"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-school-1"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-school-2"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-school-3"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-school-4"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-smile"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-symbol"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-symbols"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-tool"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-tool-1"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-transport"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-two"></div>
                  </div>
                  <div class="glyph">
                     <div class="glyph-icon flaticon-two-1"></div>
                  </div>
               </div>
            </div>
            <!-- /row -->
         </div>
         <!-- /col-lg-12 -->
         <!-- IMAGES -->
         <div class="row  mt-5">
            <div class="section-heading mt-5">
               <h2>Images</h2>
            </div>
            <div class="col-lg-4 col-md-4">
               <!-- Curved image -->
               <h5>Curved Image</h5>
               <img src="img/teammain.jpg" class="img-curved img-fluid" alt="">
            </div>
            <div class="col-lg-4 col-md-4">
               <!-- Circle image -->
               <h5>Circle Image</h5>
               <img src="img/teammain.jpg" class="rounded-circle img-fluid" alt="">
            </div>
            <div class="col-lg-4 col-md-4">
               <!-- Rounded image -->
               <h5>Rounded Image</h5>
               <img src="img/teammain.jpg" class="rounded img-fluid" alt="">
            </div>
         </div>
         <div class="row">
            <div class="col-lg-4 col-md-4">
               <!-- rounded image -->
               <h5 class="mt-5">Thumbnail Image</h5>
               <img src="img/teammain.jpg" class="img-thumbnail img-fluid" alt="">
            </div>
            <div class="col-lg-4 col-md-4">
               <!-- Gradient Hover  image -->
               <h5 class="mt-5">Gradient Hover Effect</h5>
               <div class="img-effect">
                  <img src="img/teammain.jpg" class="img-fluid" alt="">
               </div>
            </div>
            <div class="col-lg-4 col-md-4">
               <!-- Zoom Hover  image -->
               <h5 class="mt-5">Zoom Hover Effect</h5>
               <div class="img-effect no-grad">
                  <img src="img/teammain.jpg" class="img-fluid" alt="">
               </div>
            </div>
         </div>
         <!--/row -->
         <!-- BLOCKS -->
         <div class="row mt-5">
            <div class="section-heading mt-5">
               <h2>Blocks</h2>
            </div>
            <div class="col-lg-6 col-md-6">
               <!-- Color Block -->
               <div class="color_block">
                  <h5>Color Block</h5>
                  <p>Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac sodales felis tiam non Doloreiur qui commolu ptatemp dolupta orem retibusam andigen Ibu lum orci eget, viverra elit aliquam erat volut pat phas ellus ac sodales felis tiam non metus. Placerat a ultricies a, posuere lorem ipseut lincas psuiem t volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi quidem minus id omnis a nibh fusce mollis imperdie tlorem ipuset campas fincas interdum donec eget metus auguen unc vel mauris ultricies,
                  </p>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 res-margin">
               <!-- Paper Block -->
               <div class="paper_block">
                  <h5>Paper Block</h5>
                  <p>Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac sodales felis tiam non Doloreiur qui commolu ptatemp dolupta orem retibusam andigen Ibu lum orci eget, viverra elit aliquam erat volut pat phas ellus ac sodales felis tiam non metus. Placerat a ultricies a, posuere lorem ipseut lincas psuiem t volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi quidem minus id omnis a nibh fusce mollis imperdie tlorem ipuset campas fincas interdum donec eget metus auguen unc vel mauris ultricies,
                  </p>
               </div>
            </div>
         </div>
         <!-- /row -->
		     <div class="row mt-5">
       <div class="section-heading mt-5">
         <h2>Forms</h2>
      </div>
      <div class="col-lg-5 col-md-12">
         <!-- Forms -->
         <h5>Form Elements</h5>
         <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="text">
            <label for="floatingInput">Text</label>
         </div>
         <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput2" placeholder="name@example.com">
            <label for="floatingInput2">Email address</label>
         </div>
         <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
         </div>
         <div class="form-floating mt-2">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Text Area</label>
         </div>
         <!-- Forms -->
         <h5 class="mt-5">Field sizes</h5>
         <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
         <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
         <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
      </div>
      <!--/col-lg-6-->
      <div class="offset-lg-1 col-lg-6">
         <!-- selects-->
         <h5>Selects</h5>
         <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
         </select>
         <h5 class="mt-5">Checkbox</h5>
         <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            Default checkbox
            </label>
         </div>
         <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
            Checked checkbox
            </label>
         </div>
         <h5 class="mt-5">Radio</h5>
         <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
            Default radio
            </label>
         </div>
         <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
            Default checked radio
            </label>
         </div>
         <h5 class="mt-5">Switch</h5>
         <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
         </div>
         <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
         </div>
         <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
            <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
         </div>
         <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked disabled>
            <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
         </div>
      </div>
      <!--/col-lg- -->
   </div>
   <!--/row-->
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
   </body>
</html>
