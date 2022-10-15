@extends('Backend.master')
@section('content')
        <div class="tables">
            <div class="table-responsive bs-example widget-shadow">
                <h4>Total Categories:</h4>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name </th>
                            <th>Price</th>
                            <th>Option-1</th>
                            <th>Option-2</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($offer as $key =>$offers)
                        <tr>
                           
                            <td>{{$key+1}}</td>
                            <td>{{$offers->name}}</td>
                            <td>{{$offers->price}}</td>
                            <td>{{$offers->option_1}}</td>
                            <td>{{$offers->option_1}}</td>
                            <td>{{$offers->status}}</td>
                            <td style="vertical-align: middle;">
                                <input type="hidden" value="" id="">
                                <a href="view_single_item.php?id=>"><i class="fa fa-eye" style="color:green;font-size:25px;" title="View"></i> </a>
                                <a href=""><i class="fa fa-edit" style="color:orange;font-size:25px;" title="Edit"></i> </a>
                                <a  href="{{url('/offers/delete/'.$offers->id)}}" id=""><i class="fa fa-remove" style="color:red;font-size:25px;" title="Delete"></i> </a>
                            </td>
                     
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
   
@endsection