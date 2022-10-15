@extends('Backend.master')
@section('content')
<!-- main content start-->
@if(session()->has('massage'))
<div class="alert alert-success">
    {{session()->get('massage')}}
</div>
@endif
<div class="forms">
    <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
            <h4>Add Item for Menu</h4>
        </div>
        <div class="form-body">
            <form action="{{route('item.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Food Name </label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Food Item Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name </label>
                    <select class="form-control" name="category_id" id="">
                        <option value="">Select Category Name</option>
                        @foreach($cat as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description </label>
                    <input cols="50" rows="8" type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter Food Description">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image </label>
                    <input cols="50" rows="8" type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Image">
                </div>
                <button type="submit" class="btn btn-default">Submit </button>
            </form>
        </div>
    </div>
</div>
@endsection
