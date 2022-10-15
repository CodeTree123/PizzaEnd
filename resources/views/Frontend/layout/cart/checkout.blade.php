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
    <div id="checkout">
        @if(session()->has('massage'))
        <div class="alert alert-success">
            {{session()->get('massage')}}
        </div>
        @endif


        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif




            <form action="{{ route('order.detailes') }}" method="POST">
                @csrf
                <div class="col-md-8 col-md-offset-2">
                    <h2>
                        Review Your Order & Complete Checkout
                    </h2>

                    @foreach ($cart as $data)
                    <input type="hidden" class="media-heading" value="{{ $data->name }}">
                    <input type="hidden" class="cart_pizza_quantity" id="exampleInputEmail1" value="{{ $data->qty }}" min="1" name="qty">
                    <input type="hidden" class="col-sm-1 col-md-1 text-center" value="{{ $data->subtotal }}">

                    @endforeach

                    <hr />
                    <div class="shopping_cart">
                        <form class="form-horizontal">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                contact and Billing Information</h4>
                                        </div>
                                        <hr>
                                        <div id="collapseTwo">
                                            <div class="panel-body">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <td style="width: 175px;">
                                                            <label for="name">Name</label>
                                                        </td>
                                                        <td>
                                                            <input class="form-control" id="id_name" name="name" required="required" type="text" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 175px;">
                                                            <label for="mobile">Mobile No:</label>
                                                        </td>
                                                        <td>
                                                            <input class="form-control" name="phone" required="required" type="text" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 175px;">
                                                            <label for="address">Address:</label>
                                                        </td>
                                                        <td>
                                                            <input class="form-control" id="address" name="address" required="required" type="text" />
                                                        </td>
                                                    </tr>




                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion">
                                                    <b>Payment Information</b>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree">
                                            <div class="panel-body">
                                                <span class='payment-errors'></span>
                                                <fieldset>


                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label" for="card-number">Ammount</label>
                                                        <div class="col-sm-9">
                                                            <input readonly type="text" name="total" value="{{ Cart::subtotal() }}">
                                                            <br />
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <button class="btn btn-success" type="submit"> confirm</button>


                                            </div>
                                        </div>
                                    </div>
                        </form>
                    </div>
                </div>



</body>

</html>
