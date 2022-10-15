<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pizza End</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('Frontend.css.css')
    <style>
        .price_info {
            color: white;
        }
    </style>
</head>

<body>

    @include('Frontend.include.header')
    <style>
        .card_title {
            position: relative;
            text-align: center;
        }

        .card_title img {
            width: 85%;
        }

        .card_title_full img {
            width: 45%;
        }

        .title_text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-52%, -40%);
        }

        .menu_item_sub_detail {
            word-wrap: break-word;
        }

        .menu_card {

            border-top: 2px dashed #fff;
            border-bottom: 2px dashed #fff;
        }

        .custom-border-2 {
            border: 2px solid #fff;
        }
    </style>
    @if(session()->has('massage'))
    <div class="alert alert-success">
        {{session()->get('massage')}}
    </div>
    @endif
    <section class="ftco-menu">
        <div class="container">
            <!-- sausage crust and pasta start -->
            <div class="row my-5">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 my-lg-0 my-md-0 my-sm-4 my-4">
                    <div class="card_container  custom-border-2 py-3">
                        <!-- sausage crust start-->
                        <div class="card_title text-center m-4">
                            <img src="frontend/manu/b13.png" alt="">
                        </div>
                        <table class="table table-borderless table-responsive-lg  ">
                            <thead class="text-center">
                                <tr class="menu_card row-12">
                                    <th scope="col-4" class="text-warning">9"</th>
                                    <th scope="col-4" class="text-warning">12"</th>
                                    <th scope="col-4" class="text-warning">15"</th>
                                </tr>
                            <tbody class="text-center">
                                @foreach($prices as $price)
                                @if($price->category_id == 32)
                                <tr>
                                    <td class="text-warning">955 TK <a href="{{ route('cart.addtocart',$price->id) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order</a></td>
                                    @foreach($subprices as $subprice)
                                    @if($price->id == $subprice->price_id)
                                    <td class="text-warning">{{$subprice->price}} TK <a href="{{ route('cart.addtocart2',[$price->id,$subprice->id]) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order</a></td>
                                    @endif
                                    @endforeach
                                    <!-- <td class="text-warning">1555TK <a href="{{ route('cart.addtocart',$price->id) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order</a></td> -->
                                </tr>
                            </tbody>
                            </thead>
                        </table>
                        <!-- sausage crust end -->

                        <!-- pasta start -->
                        <div class="menu_item_box mx-4">
                            <div class="menu_item">
                                <h3 class="text-wrap">{{$price->item->name}}</h3>
                                <h6 class="menu_item_sub_detail mb-5">{{$price->item->description}}</h6>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <div class="card_title text-center m-4">
                            <img src="frontend/manu/b2.png" alt="">
                        </div>
                        @foreach($prices as $price)
                        @if($price->category_id == 33)
                        <div class="menu_item_box mx-4">
                            <div class="menu_item">
                                <h3 class="text-wrap">{{$price->item->name}}............................{{$price->small}}<a href="{{ route('cart.addtocart',$price->id) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order</a></h3>
                                <h6 class="menu_item_sub_detail mb-5">{{$price->item->description}}</h6>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <!-- pasta end -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 my-lg-0 my-md-0 my-sm-4 my-4">
                    <div class="my-4">
                        <img src="frontend/manu/pasta.png" alt="pasta" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- sausage crust and pasta end -->

            <!-- salad start -->
            <div class="row my-5 ">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 my-lg-0 my-md-0 my-sm-4 my-4">
                    <div class="mb-4">
                        <img src="frontend/manu/brocolli.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 my-lg-0 my-md-0 my-sm-4 my-4 ms-5">
                    <div class="card_container  custom-border-2 py-3 ">
                        <div class="card_title text-center m-4">
                            <img src="frontend/manu/b3.png" alt="">
                        </div>
                        @foreach($prices as $price)
                        @if($price->category_id == 34)
                        <div class="menu_item_box mx-4">
                            <div class="menu_item">
                                <h3 class="text-wrap">{{$price->item->name}}............................{{$price->small}}<a href="{{ route('cart.addtocart',$price->id) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order</a></h3>
                                <h6 class="menu_item_sub_detail mb-5">{{$price->item->description}}</h6>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- salad end -->


            <!-- Burger start -->
            <div class="row my-5">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 my-lg-0 my-md-0 my-sm-4 my-4">
                    <div class="mb-4">
                        <img src="frontend/manu/burger_half.png" alt="pasta" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 my-lg-0 my-md-0 my-sm-4 my-4">
                    <div class="card_container  custom-border-2 py-3">
                        <div class="card_title text-center m-4">
                            <img src="frontend/manu/b15.png" alt="">
                        </div>
                        @foreach($prices as $price)
                        @if($price->category_id == 38)
                        <div class="menu_item_box mx-4">
                            <div class="menu_item">
                                <h3 class="text-wrap">{{$price->item->name}}............................{{$price->small}}<a href="{{ route('cart.addtocart',$price->id) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order</a></h3>
                                <h6 class="menu_item_sub_detail mb-5">{{$price->item->description}}</h6>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Burger end -->

            <!-- sandwitches and garlic brade start -->
            <div class="row my-5">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 my-lg-0 my-md-0 my-sm-4 my-4">
                    <div class="card_container  custom-border-2 py-3">
                        <div class="card_title text-center m-4">
                            <img src="frontend/manu/b16.png" alt="">
                        </div>
                        @foreach($prices as $price)
                        @if($price->category_id == 36)
                        <div class="menu_item_box mx-4">
                            <div class="menu_item">
                                <h3 class="text-wrap">{{$price->item->name}}............................{{$price->small}}<a href="{{ route('cart.addtocart',$price->id) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order</a></h3>
                                <h6 class="menu_item_sub_detail mb-5">{{$price->item->description}}</h6>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <div class="card_title text-center m-4">
                            <img src="frontend/manu/b17.png" alt="">
                        </div>
                        @foreach($prices as $price)
                        @if($price->category_id == 37)
                        <div class="menu_item_box mx-4">
                            <div class="menu_item">
                                <h3 class="text-wrap">{{$price->item->name}}............................{{$price->small}}<a href="{{ route('cart.addtocart',$price->id) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order</a></h3>
                                <h6 class="menu_item_sub_detail mb-5">{{$price->item->description}}</h6>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 my-lg-0 my-md-0 my-sm-4 my-4">
                    <div class="my-4">
                        <img src="frontend/manu/sandwich.png" alt="pasta" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- sandwitches and garlic brade end -->

            <!-- pizza express start -->
            <div class="row my-5">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 my-lg-0 my-md-0 my-sm-4 my-4">
                    <div class="mb-4">
                        <img src="frontend/manu/capcicum_pizza.png" alt="pasta" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 my-lg-0 my-md-0 my-sm-4 my-4">
                    <div class="card_container  custom-border-2 py-3">
                        <div class="card_title text-center m-4">
                            <img src="frontend/manu/b12.png" alt="">
                        </div>
                        <table class="table table-borderless table-responsive-lg  ">
                            <thead class="text-center">
                                <tr class="menu_card row-12">
                                    <th scope="col-4" class="text-warning ">6"</th>
                                    <th scope="col-4" class="text-warning">9"</th>
                                    <th scope="col-4" class="text-warning">12"</th>
                                    <th scope="col-4" class="text-warning">15"</th>
                                </tr>
                            <tbody class="text-center">
                                <tr>
                                    <td class="text-warning text-center">199 TK </td>
                                    <td class="text-warning">399 TK </td>
                                    <td class="text-warning">699 TK </td>
                                    <td class="text-warning">999 TK </td>
                                </tr>
                            </tbody>
                            </thead>
                        </table>
                        @foreach($prices as $price)
                        @if($price->category_id == 39)
                        <div class="menu_item_box mx-4">
                            <div class="menu_item">
                                <h3 class="text-wrap">{{$price->item->name}}..............................................<a href="{{ route('cart.addtocart',$price->id) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order - 6"</a></h3>
                                 @foreach($subprices as $subprice)
                                    @if($price->id == $subprice->price_id)
                                    <a href="{{ route('cart.addtocart2',[$price->id,$subprice->id]) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order - {{$subprice->price_type}}</a>
                                    @endif
                                    @endforeach
                                <h6 class="menu_item_sub_detail mb-5">{{$price->item->description}}</h6>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <div class="card_title text-center m-4">
                            <img src="frontend/manu/b10.png" alt="">
                        </div>
                        <table class="table table-borderless table-responsive-lg  ">
                            <thead class="text-center">
                                <tr class="menu_card row-12">
                                    <th scope="col-4" class="text-warning ">6"</th>
                                    <th scope="col-4" class="text-warning">9"</th>
                                    <th scope="col-4" class="text-warning">12"</th>
                                    <th scope="col-4" class="text-warning">15"</th>
                                </tr>
                            <tbody class="text-center">
                                <tr>
                                    <td class="text-warning text-center">250 TK </td>
                                    <td class="text-warning">450 TK </td>
                                    <td class="text-warning">799 TK </td>
                                    <td class="text-warning">1150TK </td>
                                </tr>
                            </tbody>
                            </thead>
                        </table>
                        @foreach($prices as $price)
                        @if($price->category_id == 40)
                        <div class="menu_item_box mx-4">
                            <div class="menu_item">
                                <h3 class="text-wrap">{{$price->item->name}}.......................<a href="{{ route('cart.addtocart',$price->id) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order - 6"</a></h3>
                                 @foreach($subprices as $subprice)
                                    @if($price->id == $subprice->price_id)
                                    <a href="{{ route('cart.addtocart2',[$price->id,$subprice->id]) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order - {{$subprice->price_type}}</a>
                                    @endif
                                    @endforeach
                                <h6 class="menu_item_sub_detail mb-5">{{$price->item->description}}</h6>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- pizza express end -->

            <!-- regular pizza start -->
            <div class="row my-5">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 my-lg-0 my-md-0 my-sm-4 my-4">
                    <div class="card_container  custom-border-2 py-3">
                        <!-- sausage crust start-->
                        <div class="card_title text-center m-4">
                            <img src="frontend/manu/b11.png" alt="">
                        </div>
                        <table class="table table-borderless table-responsive-lg  ">
                            <thead class="text-center">
                                <tr class="menu_card row-12">
                                    <th scope="col-4" class="text-warning">6"</th>
                                    <th scope="col-4" class="text-warning">9"</th>
                                    <th scope="col-4" class="text-warning">12"</th>
                                    <th scope="col-4" class="text-warning">15"</th>
                                </tr>
                            <tbody class="text-center">
                                <tr>
                                    <td class="text-warning ">199 TK </td>
                                    <td class="text-warning">399 TK </td>
                                    <td class="text-warning">699 TK </td>
                                    <td class="text-warning">999 TK </td>
                                </tr>
                            </tbody>
                            </thead>
                        </table>
                        @foreach($prices as $price)
                        @if($price->category_id == 42)
                        <div class="menu_item_box mx-4">
                            <div class="menu_item">
                                <h3 class="text-wrap">{{$price->item->name}}............................................<a href="{{ route('cart.addtocart',$price->id) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order - 6"</a></h3>
                                 @foreach($subprices as $subprice)
                                    @if($price->id == $subprice->price_id)
                                    <a href="{{ route('cart.addtocart2',[$price->id,$subprice->id]) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order - {{$subprice->price_type}}</a>
                                    @endif
                                    @endforeach
                                <h6 class="menu_item_sub_detail mb-5">{{$price->item->description}}</h6>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 my-lg-0 my-md-0 my-sm-4 my-4">
                    <div class="my-4">
                        <img src="frontend/manu/pizza_half.png" alt="pasta" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- regular pizza end -->

            <!-- fried chicken start -->
            <div class="row my-5">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 my-lg-0 my-md-0 my-sm-4 my-4">
                    <div class="my-4">
                        <img src="frontend/manu/chicken_soup.png" alt="pasta" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 my-lg-0 my-md-0 my-sm-4 my-4">
                    <div class="card_container  custom-border-2 py-3">
                        <div class="card_title text-center m-4">
                            <img src="frontend/manu/b6.png" alt="">
                        </div>
                        @foreach($prices as $price)
                        @if($price->category_id == 43)
                        <div class="menu_item_box mx-4">
                            <div class="menu_item">
                                <h3 class="text-wrap">{{$price->item->name}}............................{{$price->single}}<a href="{{ route('cart.addtocart',$price->id) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order</a></h3>
                                <h6 class="menu_item_sub_detail mb-5">{{$price->item->description}}</h6>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- fried chicken end -->

            <div class="row my-5">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 my-lg-0 my-md-0 my-sm-4 my-4">
                    <div class="card_container  custom-border-2 py-3">
                        <div class="card_title text-center m-4">
                            <img src="frontend/manu/b6.png" alt="">
                        </div>
                        @foreach($prices as $price)
                        @if($price->category_id == 44)
                        <div class="menu_item_box mx-4">
                            <div class="menu_item">
                                <h3 class="text-wrap">{{$price->item->name}}............................{{$price->single}}<a href="{{ route('cart.addtocart',$price->id) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order</a></h3>
                                <h6 class="menu_item_sub_detail mb-5">{{$price->item->description}}</h6>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <div class="card_title text-center m-4">
                            <img src="frontend/manu/b7.png" alt="">
                        </div>
                        @foreach($prices as $price)
                        @if($price->category_id == 45)
                        <div class="menu_item_box mx-4">
                            <div class="menu_item">
                                <h3 class="text-wrap">{{$price->item->name}}............................{{$price->single}}<a href="{{ route('cart.addtocart',$price->id) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order</a></h3>
                                <h6 class="menu_item_sub_detail mb-5">{{$price->item->description}}</h6>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <div class="card_title text-center m-4">
                            <img src="frontend/manu/b9.png" alt="">
                        </div>
                        @foreach($prices as $price)
                        @if($price->category_id == 46)
                        <div class="menu_item_box mx-4">
                            <div class="menu_item">
                                <h3 class="text-wrap">{{$price->item->name}}............................{{$price->single}}<a href="{{ route('cart.addtocart',$price->id) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order</a></h3>
                                <h6 class="menu_item_sub_detail mb-5">{{$price->item->description}}</h6>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 my-lg-0 my-md-0 my-sm-4 my-4">
                    <div class="my-4">
                        <img src="frontend/manu/wedges.png" alt="pasta" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- frie end -->

            <!-- soft drinks end -->
            <div class="row my-5">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 my-lg-0 my-md-0 my-sm-4 my-4">
                    <div class="my-4">
                        <img src="frontend/manu/juice.png" alt="pasta" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 my-lg-0 my-md-0 my-sm-4 my-4">
                    <div class="card_container  custom-border-2 py-3">
                        <div class="card_title text-center m-4">
                            <img src="frontend/manu/b5.png" alt="">
                        </div>
                        @foreach($prices as $price)
                        @if($price->category_id == 47)
                        <div class="menu_item_box mx-4">
                            <div class="menu_item">
                                <h3 class="text-wrap">{{$price->item->name}}............................{{$price->single}}<a href="{{ route('cart.addtocart',$price->id) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order</a></h3>
                                <h6 class="menu_item_sub_detail mb-5">{{$price->item->description}}</h6>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <div class="card_title text-center m-4">
                            <img src="frontend/manu/b4.png" alt="">
                        </div>
                        @foreach($prices as $price)
                        @if($price->category_id == 48)
                        <div class="menu_item_box mx-4">
                            <div class="menu_item">
                                <h3 class="text-wrap">{{$price->item->name}}............................{{$price->single}}<a href="{{ route('cart.addtocart',$price->id) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order</a></h3>
                                <h6 class="menu_item_sub_detail mb-5">{{$price->item->description}}</h6>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>

            </div>
            <!-- soft drinks end -->
            <div class="row justify-content-center  custom-border-2">
                <div class="card_title_full text-center m-4">
                    <img src="frontend/manu/b1.png" alt="">
                </div>
                <table class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm table-responsive-xl">
                    <thead>
                        <tr class="menu_card">
                            <th scope="col" class="text-warning">Additional Toppings</th>
                            <th scope="col" class="text-warning text-center">6"</th>
                            <th scope="col" class="text-warning text-center">9"</th>
                            <th scope="col" class="text-warning text-center">12"</th>
                            <th scope="col" class="text-warning text-center">15"</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($prices as $price)
                        @if($price->category_id == 35)
                        <tr>
                            <td scope="row" class="text-white">{{$price->item->name}}</td>
                            <td class="text-warning">{{$price->small}} TK <a href="{{ route('cart.addtocart',$price->id) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order</a></td>
                                    @foreach($subprices as $subprice)
                                    @if($price->id == $subprice->price_id)
                                    <td class="text-warning">{{$subprice->price}} TK <a href="{{ route('cart.addtocart2',[$price->id,$subprice->id]) }}" class="btn btn-warning rounded rounded-pill mx-1 mb-2">Order</a></td>
                                    @endif
                                    @endforeach
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    @include('Frontend.include.footer')
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>
    @include('Frontend.css.js')
</body>

</html>
