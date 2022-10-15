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
                    <th>Name </th>
                    <th>Category Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach($item as $key =>$items)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$items->name}}</td>
                    <td>{{$items->category->name}}</td>
                    <td>{{$items->description}}</td>
                    <td>
                        <img src="{{url('/uploads/Item/'.$items->image)}}" alt="Item_image">
                    </td>
                    <td style="vertical-align: middle;">
                        <input type="hidden" value="" id="">
                        <a href="{{route('item.update',$items->id)}}"><i class="fa fa-edit" style="color:orange;font-size:25px;" title="Edit"></i> </a>
                        <a href="{{route('item.delete',$items->id)}}" id=""><i class="fa fa-remove" style="color:red;font-size:25px;" title="Delete"></i> </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
