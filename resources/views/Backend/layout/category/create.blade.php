@extends('Backend.master')
@section('content')
<!-- main content start-->

<div class="forms">
    <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
            <h4>Add Category for Menu</h4>
        </div>
        <div class="form-body">
        <form action="{{route('category.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Category Name </label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name">
            </div>
            <button type="submit" class="btn btn-default">Submit </button>
        </form>
        </div>
    </div>
</div>

 
@endsection