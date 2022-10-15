<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\menues;
use App\Models\speacial;
use Illuminate\Http\Request;

class SpeacialController extends Controller
{
    public function create()
    {
        return view('Backend.layout.special_Menu.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'item_1' => 'required',
            'item_2' => 'required',
            'item_3' => 'required',
            'item_4' => 'required',
            'price' => 'required',
        ]);
        menues::create([
            'name' => $request->name,
            'item_1' => $request->item_1,
            'item_2' => $request->item_2,
            'item_3' => $request->item_3,
            'item_4' => $request->item_4,
            'price' => $request->price,

        ]);
        return redirect()->route('speacial.list')->with('massage', 'Special Menu Created successfully');
    }
    public function list()
    {
        $menu = menues::all();
        return view('Backend.layout.special_Menu.list', compact('menu'));
    }
    public function update($id)
    {
        $menu = menues::find($id);
        // dd($menu);
        return view('Backend.layout.special_Menu.update', compact('menu'));
    }
    public function edit(Request $request, $id)
    {

        menues::find($id)->update([
            'name' => $request->name,
            'item_1' => $request->item_1,
            'item_2' => $request->item_2,
            'item_3' => $request->item_3,
            'item_4' => $request->item_4,
            'price' => $request->price,
        ]);
        return redirect()->route('speacial.list')->with('massage', 'Special Menu Updated successfully');
    }
    public function delete($id)
    {
        $menus = menues::find($id);
        $menus->delete();
        return redirect()->route('speacial.list')->with('massage', 'Special Menu Deleted successfully');
    }
}
