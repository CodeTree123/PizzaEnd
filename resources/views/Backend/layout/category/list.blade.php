@extends('Backend.master')
@section('content')
@if(session()->has('massage'))
   <div class="alert alert-success">
    {{session()->get('massage')}}
   </div>
   @endif
        <div class="tables">
            <div class="table-responsive bs-example widget-shadow">
                <h4>Total Categories:</h4>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name </th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($cat as $key =>$category)
                        <tr>
                           
                            <td>{{$key+1}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->status}}</td>
                            <td style="vertical-align: middle;">
                                <input type="hidden" value="" id="">
                                <a href="view_single_item.php?id=>"><i class="fa fa-eye" style="color:green;font-size:25px;" title="View"></i> </a>
                                <a href="{{route('category.update',$category->id)}}"><i class="fa fa-edit" style="color:orange;font-size:25px;" title="Edit"></i> </a>
                                <a  href="{{route('category.delete',$category->id)}}" id=""><i class="fa fa-remove" style="color:red;font-size:25px;" title="Delete"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
   
@endsection