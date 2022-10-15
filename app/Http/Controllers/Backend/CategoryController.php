<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
        $cat = category::all();
        return view('Backend.layout.category.list', compact('cat'));
    }
    
    public function create()
    {
        return view('Backend.layout.category.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
           
        ]);

        category::create([
            'name' => $request->name,
          
        ]);
        return redirect()->back();
    }
    public function update($id)
    {
        $cat = category::find($id);

        return view('Backend.layout.category.update', compact('cat'));
    }
    public function edit(Request $request, $id)
    {
        category::find($id)->update([
            'name' => $request->name,
        ]);
        return redirect()->route('category.list')->with('massage', 'category Updated successfully');
    }
    public function delete($id)
    {
        $category=category::find($id);
        $category->delete();

        return redirect()->back()->with('massage', 'category Deleted successfully');
    }
}
