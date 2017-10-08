@extends('layouts.master')
@section('title')
    About Us
 @endsection
 @section('content')
   
<section id="about" class="home-section text-center">
    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                        <div class="section-heading">
                            <h2 class="details">Meet Our Team</h2>
                            <p class="text-center paragraph">The Honest team that leads the bussiness towards the high.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">

        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <h5>Hassaan Ali</h5>
                            <p class="subtitle">Head</p>
                            <div class="avatar"><img src="images/1.jpeg" alt="" class="img-responsive img-circle" /></div>
                            <p>The honest and passionate man </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.5s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <h5>ShahRukh Amanat</h5>
                            <p class="subtitle">Seeker</p>
                            <div class="avatar"><img src="img/team/2.jpg" alt="" class="img-responsive img-circle" /></div>
                            <p>The Motivator</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.8s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <h5>Talha Ejaz</h5>
                            <p class="subtitle">Mazdooor</p>
                            <div class="avatar"><img src="images/2.jpeg" alt="" class="img-responsive img-circle" /></div>
                            <p>The poor one labour</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 

 @endsection