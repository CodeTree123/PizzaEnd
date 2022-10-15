@extends('Backend.master')
@section('content')
@if(session()->has('massage'))
   <div class="alert alert-success">
    {{session()->get('massage')}}
   </div>
   @endif
<div class="tables">
    <div class="table-responsive bs-example widget-shadow">
        <h4>Total Item:</h4>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Item Name </th>
                    <!--<th>Category Name</th>-->
                    <th>Small</th>
                    <th>Medium</th>
                    <th>Large</th>
                    <th>Single</th>
                    <th>Family</th>
                    <th>Party</th>
                    <!--<th>Image</th>-->
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach($price as $key =>$prices)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$prices->name}}</td>
                    <!--<td>{{$prices->item->category->name}}</td>-->
                    <td>{{$prices->small}}</td>
                    <td>{{$prices->medium}}</td>
                    <td>{{$prices->large}}</td>
                    <td>{{$prices->single}}</td>
                    <td>{{$prices->family}}</td>
                    <td>{{$prices->party}}</td>

                    <td style="vertical-align: middle;">
                        <input type="hidden" value="" id="">
                        <a href=""><i class="fa fa-edit" style="color:orange;font-size:25px;" title="Edit"></i> </a>
                        <a href="" id=""><i class="fa fa-remove" style="color:red;font-size:25px;" title="Delete"></i> </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
