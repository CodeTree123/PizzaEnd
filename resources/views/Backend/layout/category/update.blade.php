@extends('Backend.master')
@section('content')

<div class="forms">
    <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
            <h4>Update Category for Menu</h4>
        </div>
        <div class="form-body">
            <form action="{{route('category.edit',$cat->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name </label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name" value="{{$cat->name}}">
                </div>
                <button type="submit" class="btn btn-default">Submit </button>
            </form>
        </div>
    </div>
</div>
@endsection