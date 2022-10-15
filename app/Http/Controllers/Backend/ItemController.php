<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\item;
use App\Models\price;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create()
    {
        $cat = category::all();
        return view('Backend.layout.item.create', compact('cat'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'image' => 'required',
        ]);

        $filename = '';
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            if ($file->isValid()) {
                $filename = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
                $file->storeAs('Items', $filename);
            }
        }
        item::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'image' => $filename,
        ]);
        return redirect()->back()->with('massage', 'Item Created successfully');
    }
    public function list()
    {
        $item = item::all();
        // $item = item::Join('');
        // $item = item::join('categories','items.category_id','=','categories.id')->get('items.*','categories.name');
        // dd($item);
        return view('Backend.layout.item.list', compact('item'));
    }
    public function price()
    {
        $cat = category::all();
        $food = item::all();
        return view('Backend.layout.item.price', compact('cat', 'food'));
    }
    public function price_list()
    {
        $price = price::join('items','prices.item_id','=','items.id')->get(['prices.*','items.name']);
        return view('Backend.layout.item.list_price', compact('price'));
    }
    public function price_store(Request $request)
    {
        $request->validate([
            'item_id' => 'required',
            'category_id' => 'required',
        ]);
        price::create([
            'item_id' => $request->item_id,
            'category_id' => $request->category_id,
            'small' => $request->small,
            'medium' => $request->medium,
            'large' => $request->large,
            'single' => $request->single,
            'family' => $request->family,
            'party' => $request->party,
        ]);
        return redirect()->back()->with('massage', 'Item price added successfully');
    }
    public function delete($id)
    {
        $items = item::find($id);

        $items->delete();
        return redirect()->back()->with('massage', 'Item Deleted successfully');
    }
    public function update($id)
    {
        $item = item::find($id);
        $cat = category::all();

        return view('Backend.layout.item.update', compact('item', 'cat'));
    }

    public function edit(Request $request, $id)
    {
        $filename = '';
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            if ($file->isValid()) {
                $filename = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
                $file->storeAs('Items', $filename);
            }
        }
        item::find($id)->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'image' => $filename,
        ]);
        return redirect()->route('item.list')->with('massage', 'Item Updated successfully');
    }
}
