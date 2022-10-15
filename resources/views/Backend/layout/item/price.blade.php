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
        <form action="{{route('item.price_store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Food Name </label>
                <select class="form-control" name="item_id" id="">
                    <option value="">Select Food Name</option>
                    @foreach($food as $foods)
                    <option value="{{$foods->id}}">{{$foods->name}}</option>
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
            <div class="form-group">
                <label for="exampleInputEmail1">Small (Price) </label>
                <input  type="number" name="small" class="form-control" id="exampleInputEmail1" placeholder="Enter price of Small Size if Avaible">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Medium (Price) </label>
                <input  type="number" name="medium" class="form-control" id="exampleInputEmail1" placeholder="Enter price of Medium Size if Avaible">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Large (Price) </label>
                <input  type="number" name="large" class="form-control" id="exampleInputEmail1" placeholder="Enter price of Large Size if Avaible">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Single (Price) </label>
                <input  type="number" name="single" class="form-control" id="exampleInputEmail1" placeholder="Enter price of Single Size if Avaible">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Family (Price) </label>
                <input  type="number" name="family" class="form-control" id="exampleInputEmail1" placeholder="Enter price of Family Size if Avaible">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Party (Price) </label>
                <input  type="number" name="party" class="form-control" id="exampleInputEmail1" placeholder="Enter price of Party Size if Avaible">
            </div>


            <button type="submit" class="btn btn-default">Submit </button>
        </form>
        </div>
    </div>
</div>


@endsection
