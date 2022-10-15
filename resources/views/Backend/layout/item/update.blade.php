@extends('Backend.master')
@section('content')
<!-- main content start-->

<div class="forms">
    <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
            <h4>Update Item for Menu</h4>
        </div>
        <div class="form-body">
        <form action="{{route('item.edit',$item->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Food Name </label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Food Item Name" value="{{$item->name}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Category Name </label>
                <select class="form-control" name="category_id" id="">
                    <option value="">Select Category Name</option>
                    @foreach($cat as $category)
                    <option @if($item->category_id==$category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Description </label>
                <input cols="50" rows="8" type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter Food Description" value="{{$item->description}}">
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
