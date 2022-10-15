<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\suborder;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list()
    {
        $order = order::all();
        $suborders = suborder::all();
        return view('Backend.layout.order.list', compact('order', 'suborders'));
    }
    public function ordre_status($id)
    {

        $getStatus = order::find($id);
        // dd($getStatus);
        if ($getStatus->order_status == 1) {
            $status = 0;
            order::where('id', '=', $id)->update(['status' => $status]);
        } else {
            $status = 1;
            order::where('id', '=', $id)->update(['status' => $status]);
        }

        return back();
    }
    public function order_detail($id)
    {
        $sor = suborder::where('order_id', '=', $id)->get();
        return response()->json([
            'status' => 200,
            'sor' => $sor,
        ]);
    }
}
