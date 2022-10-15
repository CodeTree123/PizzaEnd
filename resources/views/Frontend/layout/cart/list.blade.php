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
        .cart_pizza_quantity{
            width:50px; 
            outline: none;
            color: white; 
            box-shadow: none; 
            padding: 0;
            background: none;
            border: none;
            border-radius: 0;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0px 10px 0px 0px;
        }
        .cart-table th, .cart-table td{
            border-top: none;
        }
        .cart-table {
            color: white;
        }
    </style>
</head>

<body>

  <div class="conntainer">
  @include('Frontend.include.header')
    <div class="row">
        @if(session()->has('massage'))
        <div class="alert alert-success">
            {{session()->get('massage')}}
        </div>
        @endif
        <div class="col-sm-12 col-md-10  mx-auto ">
            <h5>you have {{count($cart) }} Items In the Cart </h5>
            <table class="table table-hover cart-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th class="text-center">Action</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($cart as $data)
                    <tr>

                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <!-- <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{'/uploads/product/'.$data->options->image}}" style="width: 72px; height: 72px;"> </a> -->
                                <div class="media-body">
                                    <h4 class="media-heading">{{ $data->name }}</h4>
                                </div>
                            </div>
                        </td>
                        <td class="col-sm-1 col-md-1 " >
                            <form action="{{route('cart.update')}}" class="d-flex " method="post">
                            @csrf
                            @method('PUT')
                                <input type="hidden" value="{{$data->rowId}}" name="rowId">
                                <input type="number" class="cart_pizza_quantity" id="exampleInputEmail1" value="{{ $data->qty }}" min="1" name="u_qty">
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                            </form>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>{{ $data->price }} BDT</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>{{ $data->subtotal }} BDT</strong></td>
                        <td class="col-sm-1 col-md-1 text-center">
                            <a class="btn btn-danger" href="{{route('cart.delete',$data->rowId)}}"> 
                        <i class="fa-solid fa-trash"></i>
                        </a>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="3" class="text-right">
                            <h5>Total</h5>
                        </td>
                        <td class="text-right"><strong>{{ Cart::subtotal() }} </strong></td>
                    </tr>

                    <tr>

                        <td colspan="4" class="text-right"> <a class="btn btn-info" href="{{route('menu')}}">Continue</a></td>
                        <td>
                            <a class="btn btn-warning" href="{{route('cart.checkout')}}">Check Out</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  </div>
</body>

</html>