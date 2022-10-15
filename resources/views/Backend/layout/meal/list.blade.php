@extends('Backend.master')
@section('content')
@if(session()->has('massage'))
<div class="alert alert-success">
    {{session()->get('massage')}}
</div>
@endif
<div class="tables">
    <div class="table-responsive bs-example widget-shadow">
        <h4>Total Pizza End Meals:</h4>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Food Name </th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($meal as $key =>$meals)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$meals->item->name}}</td>
                    <td>{{$meals->category->name}}</td>
                    <td style="vertical-align: middle;">
                        <input type="hidden" value="" id="">
                        <a href="{{route('meal.update',$meals->id)}}"><i class="fa fa-edit" style="color:orange;font-size:25px;" title="Edit"></i> </a>
                        <a href="{{route('meal.delete',$meals->id)}}" id=""><i class="fa fa-remove" style="color:red;font-size:25px;" title="Delete"></i> </a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection