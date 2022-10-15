@extends('Backend.master')
@section('content')
@if(session()->has('massage'))
   <div class="alert alert-success">
    {{session()->get('massage')}}
   </div>
   @endif
<div class="tables">
    <div class="table-responsive bs-example widget-shadow">
        <h4>Total Special Menu:</h4>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Lable Name </th>
                    <th>Item 1</th>
                    <th>Item 2</th>
                    <th>Item 3</th>
                    <th>Item 4</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menu as $key =>$menus)
                <tr>

                    <td>{{$key+1}}</td>
                    <td>{{$menus->name}}</td>
                    <td>{{$menus->item_1}}</td>
                    <td>{{$menus->item_2}}</td>
                    <td>{{$menus->item_3}}</td>
                    <td>{{$menus->item_4}}</td>
                    <td>{{$menus->price}}</td>
                    <td style="vertical-align: middle;">
                        <input type="hidden" value="" id="">
                        <a href="{{route('speacial.update',$menus->id)}}"><i class="fa fa-edit" style="color:orange;font-size:25px;" title="Edit"></i> </a>
                        <a href="{{route('speacial.delete',$menus->id)}}" id=""><i class="fa fa-remove" style="color:red;font-size:25px;" title="Delete"></i> </a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
