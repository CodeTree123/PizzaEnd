@extends('Backend.master')
@section('content')
<div class="tables">
    <div class="table-responsive bs-example widget-shadow">
        <h4>Total Special Menu:</h4>
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>No.</th>
                    <th> Name </th>
                    <th>Date & Time</th>
                    <th>Total</th>
                    <th>Address</th>
                    <th>Order Detalies </th>
                    <th>Status</th>
                    <!-- <th>Action</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($order as $key =>$orders)
                <tr class="text-center">
                    <td>{{$key+1}}</td>
                    <td>{{$orders->name}}</td>
                    <td>{{ \Carbon\Carbon::parse($orders->created_at)->format('d/m/Y - g:i A')}}</td>
                    <td>{{$orders->total}}</td>
                    <td>{{$orders->address}}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" data-id="{{$orders->id}}">
                            View
                        </button>
                    </td>
                    <td>
                        @if($orders->status == "1")
                        <a class="btn btn-sm btn-success" href="{{route('ordre_status',[$orders->id])}}" role="button">Confirm</a>
                        @else
                        <a class="btn btn-sm btn-danger" href="{{route('ordre_status',[$orders->id])}}" role="button">Pending</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Order Detailes</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table text-center align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <td>
                                        <p id="pro_name"></p>
                                    </td>
                                    <td>
                                        <p id="pro_qty"></p>
                                    </td>
                                    <td>
                                        <p id="pro_price"></p>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script>
    $('myModal').modal('hide');

    $(document).ready(function() {
        $('.btn-lg').click(function() {
            const id = $(this).attr('data-id');
            $.ajax({
                url: 'order_detail/' + id,
                type: 'GET',
                data: {
                    "id": id
                },
                success: function(data) {
                    console.log(data);
                }
            })
        });
    });
</script>

@endsection
