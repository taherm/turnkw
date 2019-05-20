@extends('layouts.master-en')
@section('content')


{{-- <div class="container">


 <div class="row align-items-center">
        <div class="col-lg-12">
            <img src="{{asset('uploads/home.jpeg')}}" width="100%" height="auto">
</div>

</div>

</div>
--}}


<br><br>
<div class="container">
    <div class="row text-center">
        <div class="col">
            <img src="{{asset('uploads/1.jpg')}}" width="100%" height="auto">
        </div>
    </div>
    {{--<div class="row text-center mt-5">
    <div class="owl-carousel owl-theme" data-plugin-options="{'items': 6, 'autoplay': true, 'autoplayTimeout': 3000}">
        <div>
            <img class="img-fluid" src="{{asset('img/logos/logo-1.png')}}" alt="">
</div>
<div>
    <img class="img-fluid" src="{{asset('img/logos/logo-2.png')}}" alt="">
</div>
<div>
    <img class="img-fluid" src="{{asset('img/logos/logo-3.png')}}" alt="">
</div>
<div>
    <img class="img-fluid" src="{{asset('img/logos/logo-4.png')}}" alt="">
</div>
<div>
    <img class="img-fluid" src="{{asset('img/logos/logo-5.png')}}" alt="">
</div>
<div>
    <img class="img-fluid" src="{{asset('img/logos/logo-6.png')}}" alt="">
</div>

</div>
</div>--}}
</div>




<br>
<div class="container">

    <div class="row align-items-center">
        <div class="col-lg-12">
            <h1 class="text-center">Welcome to Turn</h1>
            <h2 class="text-center">We hope that you'll find inspiration here!</h2>
            <h3 class="text-center">We provide clients with the highest possible level of service anywhere in the area.
            </h3>
            <h4 class="text-center">From concept through construction, to the finishing touches of each of your
                projects, you can rely on our team to deliver a personal environment tailored specifically for you.
                By interpreting an individual client’s style and needs, our licensed designers can successfully
                incorporate function while following current fashion trends.</h4>

        </div>

    </div>

</div>

<br>



<div class="container">



    <div class="row portfolio-list sort-destination" data-sort-id="portfolio">

        @foreach($ser as $s)
        <div class="col-lg-4 isotope-item websites" id="websites">
            <div class="portfolio-item">
                <a href="{{ url('services_en/'.$s->id) }}">
                    <span class="thumb-info thumb-info-lighten thumb-info-bottom-info thumb-info-centered-icons">
                        <span class="thumb-info-wrapper">
                            <img src="{{asset('uploads/'.$s->image)}}" class="img-fluid" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner text-1 line-height-xs pt-1">{{$s->title_en}}</span>

                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        @endforeach



    </div>
</div>


<section class="section m-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Our <strong>Services</strong></h2>
            </div>
        </div>
        <div class="row text-center text-md-left mt-4">
            <div class="col-md-4">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-4">
                        <img class="img-fluid mb-4" src="{{asset('uploads/design.png')}}" alt="">
                    </div>
                    <div class="col-lg-8">
                        <h4 class="mb-1">Why TURN Design & Build</h4>
                        <p>We dedicate our brains to Clients</p>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-4">
                        <img class="img-fluid mb-4" src="{{asset('uploads/vision.png')}}" alt="">
                    </div>
                    <div class="col-lg-8">
                        <h4 class="mb-1">Vision</h4>
                        <p>A new dimension is added in all aspects of life with design, innovation, and achievement of the best
                            quality, leading the industry with competitiveness and team spirit, and becoming the most successful
                            design company in our region</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-4">
                        <img class="img-fluid mb-4" src="{{asset('uploads/mission.png')}}" alt="">
                    </div>
                    <div class="col-lg-8">
                        <h4 class="mb-1">Mission</h4>
                        <p>A brand is created to add more precious value to the world’s success and beauty.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-4">
                        <img class="img-fluid mb-4" src="{{asset('uploads/values.png')}}" alt="">
                    </div>
                    <div class="col-lg-8">
                        <h4 class="mb-1">Our Values</h4>
                        <p>Achievement,Challenge,Competency,Creativity
                            ,Honesty
                            ,Loyalty
                            ,Service
                            ,Success</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>









<section class="parallax section section-text-light section-parallax section-center mt-0 mb-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/parallax-3.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="owl-carousel owl-theme nav-bottom rounded-nav" data-plugin-options="{'items': 1, 'loop': false}">
                    <div>
                        <div class="col">
                            <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">

                                <blockquote>
                                    <p>With Turn, I’m part of the creative process. So not only is my interior design
                                        unique, it’s also uniquely me. The end result is not merely a design statement,
                                        but a reflection of my identity</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p><strong>Martha Stanley</strong><span>South Carolina</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col">
                            <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">

                                <blockquote>
                                    <p>H&amp;D was super to work with from concept to final product. Their keen eye and
                                        expert design sense is beyond compare. They were such fun to work with as well
                                        as being a true professional</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p><strong>Sergio Ramos</strong><span>Central Madrid</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col">
                            <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">

                                <blockquote>
                                    <p>Turn listened to our ideas, determined our style tastes and came up with a
                                        complete solution which included furniture, fabric, paint, artwork,
                                        kitchen/bathroom materials and hardware</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p><strong>New York</strong><span>New York</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<footer id="footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <h1 class="text-center">Let’s Hear you!</h1>

                <h4 class="text-center">Ready to take it a step further? Let’s start talking about your project or idea and find out how we can help you.</h4>
                <a href="/" class="btn btn-lg btn-warning btn-block">Request a Free Quote</a>
            </div>
            <div class="col-lg-4">
                <div class="contact-details">
                    <h4>Contact Us</h4>
                    <ul class="contact">
                        <li>
                            <p><i class="fa fa-map-marker"></i> <strong>Address:</strong> Salmiya, Salem al Mubarak Street, Laila Gallery Complex, 1st Floor, Office 4</p>
                        </li>
                        <li>
                            <p><i class="fa fa-phone"></i> <strong>Phone:</strong> (+965) 2205-4505</p>
                        </li>
                        <li>
                            <p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:info@turnkw.com">info@turnkw.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>













@endsection