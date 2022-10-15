<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\item;
use App\Models\meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function create()
    {
        $item = item::all();
        $cat = category::all();
        return view('Backend.layout.meal.create',compact('item','cat'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'item_id' => 'required',
            'category_id' => 'required',
            
        ]);
        meal::create([
            'item_id' => $request->item_id,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('meal.list')->with('massage', 'PizzaEnd Meal Created successfully');;
    }
    public function list()
    {
        $meal = meal::all();
        return view('Backend.layout.meal.list', compact('meal'));
    }
    public function update($id)
    {
        $meal = meal::find($id);
        $item = item::all();
        $cat = category::all();
        // dd($menu);
        return view('Backend.layout.meal.update', compact('meal','item','cat'));
    }
    public function edit(Request $request, $id)
    {

        meal::find($id)->update([
            'item_id' => $request->item_id,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('meal.list')->with('massage', 'PizzaEnd Meal Updated successfully');
    }
    public function delete($id)
    {
        $meal = meal::find($id);
        $meal->delete();
        return redirect()->route('meal.list')->with('massage', 'PizzaEnd Meal Deleted successfully');
    }
}
