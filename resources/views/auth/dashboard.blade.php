@extends('auth.layouts')
@section('content')


    <div class="row justify-content-center mt-5">
        <div class="col-lg-6 col-md-6 res-margin">
            <!-- Paper Block -->
            <div class="paper_block">
                <div class="card-header">Dashboard</div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @else
                    <div class="alert alert-success">
                       Je bent ingelogd!
                    </div>
                @endif
            </div>
        </div>
    </div>


    <section id="services" class="color-section mt-5">
        <div class="container">
            <div class="col-lg-8 offset-lg-2">
                <!-- Section heading -->
                <div class="section-heading">
                    <h2>Projecten</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <!-- main text -->
                <div class="col-md-12 col-lg-6 text-center">
                    <h3 class="text-center"></h3>
                    <p class="fw-bold">Alphabet Daycare will provide a stimulating and safe environment for children ages three months to ten years. Run by a former elementary school educator (Jane Doe)</p>
                    <p>
                        Lectus placerat a ultricies a,interdum donec eget metus auguen u Fusce mollis imperdiet interdum donec eget metus auguen Lectus placerat a ultricies a,interdum donec eget metus auguen um fusce mollis imperdiet interdu.
                    </p>
                </div>
                <!-- /col-sm-12-->
                <div class="col-md-12 col-lg-5 offset-lg-1">
                    <!-- Image -->
                    <img src="img/services.png" alt="" class="img-fluid mx-auto">
                </div>
                <!-- /col-md-12-->
            </div>
            <!-- /row -->
            <div class="row mt-5 g-lg-5">
                <!-- item 1-->
                <div class="col-lg-3">
                    <div class="service float">
                        <img src="img/service1.jpg" alt="" class="rounded-circle mx-auto img-fluid">
                        <h4>Week 1</h4>
                        <p class="mt-3">Lectus placerat a ultricies a,interdum donec eget metus auguen u Fusce mollis imperdiet interdum donec eget metus auguen unc.</p>
                    </div>
                </div>
                <!-- /col -->
                <!-- item 2-->
                <div class="col-lg-3 res-margin">
                    <div class="service float">
                        <img src="img/service2.jpg" alt="" class="rounded-circle mx-auto  img-fluid">
                        <h4>Week 2</h4>
                        <p class="mt-3">Lectus placerat a ultricies a,interdum donec eget metus auguen u Fusce mollis imperdiet interdum donec eget metus auguen unc.</p>
                    </div>
                </div>
                <!-- /col-->
                <!-- item 3-->
                <div class="col-lg-3">
                    <div class="service float">
                        <img src="img/service3.jpg" alt="" class="rounded-circle mx-auto img-fluid">
                        <h4>Week 3</h4>
                        <p class="mt-3">Lectus placerat a ultricies a, interdum donec eget metus auguen u Fusce mollis imperdiet interdum donec eget metus auguen unc.</p>
                    </div>
                </div>
                <!-- /col -->
                <!-- item 4-->
                <div class="col-lg-3">
                    <div class="service float">
                        <img src="img/service3.jpg" alt="" class="rounded-circle mx-auto img-fluid">
                        <h4>Week 4</h4>
                        <p class="mt-3">Lectus placerat a ultricies a, interdum donec eget metus auguen u Fusce mollis imperdiet interdum donec eget metus auguen unc.</p>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container-->
    </section>
@endsection
