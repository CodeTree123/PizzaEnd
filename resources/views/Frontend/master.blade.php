<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png" sizes="16x16">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Pizza End</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        @include('Frontend.css.css')
        <style>
            .home-slider {
                overflow: auto;

            }

            .owl-carousel img {
                overflow: auto;
            }

            .special_item {
                border: 1px solid white;
                border-radius: 5px;
                padding: 10px;
                text-align: center;
                height: auto;
                margin-left: 60px;
                margin-top: 20px;
            }

            @media all and (max-width: 700px) {
                .home-slider owl-carousel img {
                    overflow-y: scroll;
                }

                .slider-item {
                    overflow-y: scroll;
                }

                .special_item {
                    margin-left: 3px;
                }
            }
        </style>
    </head>

<body>

    @include('Frontend.include.header')

 @if(session()->has('massage'))
        <div class="alert alert-success">
            {{session()->get('massage')}}
        </div>
        @endif
    <section class="home-slider owl-carousel img" style="background-image: url(frontend/images/bg_1.jpg);height:350px;">



        <div class="slider-item" style="background-image: url(img/);height:350px;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true" style="margin-top:0px;height:350px;">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Welcome</span>
                        <h1 class="mb-0">We cooked your desired Pizza Recipe</h1>
                        <p><a href="{{route('menu')}}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
                    </div>

                </div>
            </div>
        </div>


    </section>
    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url(frontend/images/about.jpg);"></div>
        <div class="one-half ftco-animate">
            <div class="heading-section ftco-animate ">
                <h2 class="mb-4">Welcome to <span class="flaticon-pizza">Pizza End</span></h2>
            </div>
            <div>
                <p>A place emotions,thrills,memories,love,friends,families and ties. As days goes by Pizza End culture gets bigger and stronger with our regular and increasing friends and well wishes.Let's share our time in this world together...<br>Pizza End has been making world class pizza from as early as 1995, making it one of the oldest pizza joints in Dhaka. We currently have 2 branches namely in Panthapath ( cnr. Mirpur Rd.) and in Sayed Grand Center, Uttara. The cheesy pizzas and other yummy foods come with friendly yet professional hospitality. Facilities include corporate dinner, party center, kids play zone and FREE HOME DELIVERY only available at brance areas!!</p>
            </div>
        </div>
    </section>


    <!--<section class="mt-5">-->
    <!--    <div class="container-fluid">-->
    <!--        <div class="row justify-content-center pb-3">-->
    <!--            <div class="col-md-7 heading-section ftco-animate text-center">-->
    <!--                <h2 class="mb-4"><span style="color:#fac564"></h2>-->
    <!--                <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>-->



    <!--            </div>-->
    <!--        </div>-->
            <!--<div class="offset-sm-3 col-sm-6 col-xs-12">-->
            <!--    <img src="img/" style="width:100%" class="mt-3">-->
            <!--    <center>-->
            <!--        <p class=" btn btn-white btn-outline-white mt-2 p-2 col-sm-4" style="font-size:15px;">ORDER</p>-->
            <!--    </center>-->


            <!--</div>-->
    <!--    </div>-->
    <!--    <input type="hidden" class="" value="">-->
    <!--    <input type="hidden" class="" value="">-->
    <!--    <input type="hidden" class="" value="">-->
    <!--</section>-->

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4"><span style="color:#fac564">Pizza End</span> Meals</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters d-flex">
                <!--<div class="col-lg-4 d-flex ftco-animate">-->
                <!--    <div class="services-wrap d-flex">-->
                <!--        <a href="#" class="img" style="background-image: url(img/);"></a>-->
                <!--        <div class="text p-4">-->
                <!--            <h3></h3>-->
                <!--            <p></p>-->
                <!--            <p class="price"><span>&#2547;</span></p>-->
                <!--            <span class=" ml-2 btn btn-white btn-outline-white">Order</span>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

               

                <!--<div class="col-lg-4 d-flex ftco-animate">-->
                <!--    <div class="services-wrap d-flex">-->
                <!--        <a href="#" class="img order-lg-last" style="background-image: url(img/);"></a>-->
                <!--        <div class="text p-4">-->
                <!--            <h3></h3>-->
                <!--            <p></p>-->
                <!--            <p class="price"><span>&#2547;</span></p>-->
                <!--            <span class=" ml-2 btn btn-white btn-outline-white">Order</span>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4"><span style="color:#fac564">Pizza End</span> Special</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 col-sm-1">
                </div>
                <div class="col-md-10  col-sm-10 col-xs-12">
                    <div class="row">
                        <!--<div class="special_item col-md-5  col-sm-5 col-xs-12">-->
                        <!--    <form>-->
                        <!--        <input type="hidden" class="" value="">-->
                        <!--        <input type="hidden" class="" value="">-->
                        <!--        <input type="hidden" class="" value="">-->
                        <!--    </form>-->

                        <!--    <p style="background-color:#c9101c;color:white;border-top-right-radius:50px;"></p>-->
                        <!--    <h5><span></span></h5>-->
                        <!--    <h5><span></span></h5>-->
                        <!--    <h5><span></span></h5>-->
                        <!--    <h5><span> </span></h5>-->

                        <!--    <p class="price" style="color:#fac564"><span style="color:#fac564">&#2547;</span> </p>-->
                        <!--    <p class="price_info">-->
                        <!--        <span class=" ml-2 btn btn-white btn-outline-white">Order</span>-->
                        <!--    </p>-->
                        <!--</div>-->


                    </div>
                </div>
                <div class="col-md-1 col-sm-1">

                </div>
            </div>
        </div>
    </section>






    <div id="services">
        <section class="ftco-section ftco-services">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 heading-section ftco-animate text-center">
                        <h2 class="mb-4">Our Services</h2>
                        <!--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 ftco-animate">
                        <div class="media d-block text-center block-6 services">
                            <div class="icon d-flex justify-content-center align-items-center mb-5">
                                <span class="flaticon-diet"></span>
                            </div>
                            <div class="media-body">
                                <h3 class="heading">Healthy Foods</h3>
                                <!--<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <div class="media d-block text-center block-6 services">
                            <div class="icon d-flex justify-content-center align-items-center mb-5">
                                <span class="flaticon-bicycle"></span>
                            </div>
                            <div class="media-body">
                                <h3 class="heading">Fastest Delivery</h3>
                                <!--<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <div class="media d-block text-center block-6 services">
                            <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
                            <div class="media-body">
                                <h3 class="heading">Original Recipes</h3>
                                <!--<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>




    @include('Frontend.include.footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    @include('Frontend.css.js')

</body>

</html>
