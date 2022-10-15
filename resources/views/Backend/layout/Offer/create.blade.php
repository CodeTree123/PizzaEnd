@extends('Backend.master')
@section('content')
<!-- main content start-->

<div class="forms">
    <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
            <h4>Add Item for Menu</h4>
        </div>
        <div class="form-body">
        <form action="{{route('offer.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Offer Name </label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Offer Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Offer price </label>
                <input type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter Offer Name">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">option - 1 </label>
                <input cols="50" rows="8" type="text" name="option-1" class="form-control" id="exampleInputEmail1" placeholder="Enter Offer option 1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">option - 2 </label>
                <input cols="50" rows="8" type="text" name="option-2" class="form-control" id="exampleInputEmail1" placeholder="Enter Offer option 2">
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