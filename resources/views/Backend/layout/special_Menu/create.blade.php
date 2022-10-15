@extends('Backend.master')
@section('content')
<!-- main content start-->

<div class="forms">
    <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
            <h4>Add Item for Special Menu</h4>
        </div>
        <div class="form-body">
            <form action="{{route('speacial.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Lable Name </label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Lable Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Item 1</label>
                    <input type="text" name="item_1" class="form-control" id="exampleInputEmail1" placeholder="Item-1 name and Pices">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Item 2</label>
                    <input type="text" name="item_2" class="form-control" id="exampleInputEmail1" placeholder="Item-2 name and Pices">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Item </label>
                    <input type="text" name="item_3" class="form-control" id="exampleInputEmail1" placeholder="Item-3 name and Pices">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Item 4</label>
                    <input type="text" name="item_4" class="form-control" id="exampleInputEmail1" placeholder="Item-4 name and Pices">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter Price">
                </div>
                <button type="submit" class="btn btn-default">Submit </button>
            </form>
        </div>
    </div>
</div>


@endsection