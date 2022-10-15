@extends('Backend.master')
@section('content')
<!-- main content start-->

<div class="forms">
    <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
            <h4>Add PizzaEnd Meal </h4>
        </div>
        <div class="form-body">
        <form action="{{route('meal.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Food Name </label>
                <select class="form-control" name="item_id" id="">
                    <option value="">Select Item Name</option>
                    @foreach($item as $items)
                    <option value="{{$items->id}}">{{$items->name}}</option>
                    @endforeach
                </select>
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
        
           
            <button type="submit" class="btn btn-default">Submit </button>
        </form>
        </div>
    </div>
</div>

 
@endsection