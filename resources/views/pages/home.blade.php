@extends('layouts.app')
@include('layouts.header')
@section('content')
    <!-- banner-home -->
    <div class="background">
        <div class="position-absolute top-50 start-50 translate-middle text-background text-center">
        <h1> Welcome to Momentum Solutions </h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam vero recusandae at assumenda illum, rerum deserunt repellat quibusdam nihil similique quos dignissimos, harum, nostrum officia ducimus molestias delectus facilis itaque.</p>
        </div>
    </div>
    <!-- about -->
    <section id="about">
        <div class="container" >

            <div class="section-header">
                <h3>About US</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quibusdam neque totam fugit fuga consequatur exercitationem quae quos distinctio, consectetur expedita ipsum, incidunt culpa libero illo molestiae in laudantium repudiandae.</p>
            </div>

            <div class="row about-cols">

            <div class="col-md-4"  >
                <div class="about-col">
                <div class="img">
                    <img src="assets/images/about-mission.jpg" alt="" class="img-fluid">
                </div>
                <h2 class="title"><a href="#">Our Mission</a></h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                </div>
            </div>

            <div class="col-md-4"  data-aos-delay="200">
                <div class="about-col">
                <div class="img">
                    <img src="assets/images/about-plan.jpg" alt="" class="img-fluid">
                </div>
                <h2 class="title"><a href="#">Our Plan</a></h2>
                <p>
                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                    </p>
                </div>
            </div>

            <div class="col-md-4"  data-aos-delay="300">
                <div class="about-col">
                <div class="img">
                    <img src="assets/images/about-vision.jpg" alt="" class="img-fluid">
                </div>
                <h2 class="title"><a href="#">Our Vision</a></h2>
                <p>
                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                    </p>
                </div>
            </div>

            </div>

        </div>
    </section>
    <!-- choose  -->
    <section id="choose">
        <div class="container" class="chooice-us position-relative">
            <div class="section-header ">
                <h3>WHY CHOOSE US</h3>
            </div>
                <div class="your-class">
                    <div class="choose-card">
                        <img src="{{ asset('assets/images/img-card.png') }}"/>
                        <h4>CBM Calculator</h4>
                        <div class="choose-card-p">
                            <p class="ellipse three-lines">This CBM calculator for shipping is a simple tool that helps you determine the volume and weight of your consignment. </p>
                        </div>
                    </div>
                    <div class="choose-card">
                        <img src="{{ asset('assets/images/img-card.png') }}"/>
                        <h4>CBM Calculator</h4>
                        <div class="choose-card-p">
                            <p class="ellipse three-lines">This CBM calculator for shipping is a simple tool that helps you determine the volume and weight of your consignment. </p>
                        </div>
                    </div>
                    <div class="choose-card">
                        <img src="{{ asset('assets/images/img-card.png') }}"/>
                        <h4>CBM Calculator</h4>
                        <div class="choose-card-p">
                            <p class="ellipse three-lines">This CBM calculator for shipping is a simple tool that helps you determine the volume and weight of your consignment. </p>
                        </div>
                    </div>
                    <div class="choose-card">
                        <img src="{{ asset('assets/images/img-card.png') }}"/>
                        <h4>CBM Calculator</h4>
                        <div class="choose-card-p">
                            <p class="ellipse three-lines">This CBM calculator for shipping is a simple tool that helps you determine the volume and weight of your consignment. </p>
                        </div>
                    </div>
                    <div class="choose-card">
                        <img src="{{ asset('assets/images/img-card.png') }}"/>
                        <h4>CBM Calculator</h4>
                        <div class="choose-card-p">
                            <p class="ellipse three-lines">This CBM calculator for shipping is a simple tool that helps you determine the volume and weight of your consignment. </p>
                        </div>
                    </div>
                    <div class="choose-card">
                        <img src="{{ asset('assets/images/img-card.png') }}"/>
                        <h4>CBM Calculator</h4>
                        <div class="choose-card-p">
                            <p class="ellipse three-lines">This CBM calculator for shipping is a simple tool that helps you determine the volume and weight of your consignment. </p>
                        </div>
                    </div>
                </div>

        </div>
    </section>
    <!-- Services  -->
    <section id="services">
        <div class="container" >

            <header class="section-header ">
            <h3>Service</h3>
            <p>            
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel unde labore eius tempore nihil ex repellat suscipit, corporis saepe sint odit consectetur non dicta aliquid officia dolores. Ex, dignissimos cupiditate?
            </p>
            </header>

            <div class="row">

            <div class="col-lg-4 col-md-6 box"  >
                <div class="icon"><i class="fas fa-briefcase"></i></div>
                <h4 class="title"><a href=""> Ease and speed
                </a></h4>
                <p class="description">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel unde labore eius tempore nihil ex repellat suscipit, corporis saepe sint odit consectetur non dicta aliquid officia dolores. Ex, dignissimos cupiditate?
                </p>
            </div>
            <div class="col-lg-4 col-md-6 box"  data-aos-delay="300">
                <div class="icon"><i class="fas fa-clock"></i></div>
                <h4 class="title"><a href="">time
                </a></h4>
                <p class="description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel unde labore eius tempore nihil ex repellat suscipit, corporis saepe sint odit consectetur non dicta aliquid officia dolores. Ex, dignissimos cupiditate?

                </p>
            </div>
            <div class="col-lg-4 col-md-6 box"  data-aos-delay="200">
                <div class="icon"><i class="fas fa-binoculars"></i></div>
                <h4 class="title"><a href="">yjs
                </a></h4>
                <p class="description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel unde labore eius tempore nihil ex repellat suscipit, corporis saepe sint odit consectetur non dicta aliquid officia dolores. Ex, dignissimos cupiditate?

                </p>
            </div>

            </div>

        </div>
    </section>
@endsection
@include('layouts.footer')
