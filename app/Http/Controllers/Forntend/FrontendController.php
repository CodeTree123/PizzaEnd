<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;
use App\Models\item;
use App\Models\order;
use App\Models\price;
use App\Models\suborder;
use App\Models\subprice;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class FrontendController extends Controller
{
    public function index()
    {
        return view('Frontend.master');
    }
    public function menu()
    {
        $items=item::all();
        $prices=price::all();
        $subprices = subprice::all();
        return view('Frontend.layout.menu',compact('prices','items','subprices'));
    }

    public function addtocart($id)
    {
        $price=price::find($id);
        Cart::add([
            'id' => $id,
             'name' => $price->item->name,
             'category_id' => $price->category_id,
             'qty' => 1,
             'price'=>$price->small,
              'weight' => 0,

              ]);
        return redirect()->back()->with('massage','Item added to the cart');

    }
    public function addtocart2($id,$sub_id)
    {
        // $price=price::find($id);
        $price=price::Join('subprices','prices.id','=','subprices.price_id')->where('prices.id',$id)->where('subprices.id',$sub_id)->first(['prices.*','subprices.price_type','subprices.price']);
        // dd($price);
        Cart::add([
            'id' => $id.$sub_id,
             'name' => $price->item->name,
             'category_id' => $price->category_id,
             'qty' => 1,
             'price'=>$price->price,
              'weight' => 0,

              ]);
        return redirect()->back()->with('massage','Item added to the cart');

    }
    public function checkout()
    {
        $cart=Cart::content();
        return view('Frontend.layout.cart.checkout',compact('cart'));
    }
    public function list()
    {
        $cart=Cart::content();
        return view('Frontend.layout.cart.list',compact('cart'));
    }
    public function delete($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back()->with('massage','Item Removed From the Cart');
    }
    public function update(Request $request)
    {
        Cart::update($request->rowId, $request->u_qty);
        return redirect()->back()->with('massage','Item Quaintity Update From the Cart');
    }
    public function detailes(Request $request)
    {
       $cart=Cart::content();


       $total=Cart::priceTotal();

       DB::beginTransaction();
       try {
            $order=order::create([
                'name'=>$request->name,
                'total'=>$total,
                'address'=>$request->address,
                'mobile'=>$request->phone,
            ]);
            foreach ($cart as $data) {
                $suborder=suborder::create([
                    'order_id'=>$order->id,
                    'product_name'=>$data->name,
                    'qty'=>$data->qty,
                    'price'=>$data->price,
                ]);
            }
            DB::commit();
            Cart::destroy();
            return redirect()->route('index')->with('massage','order has been placed');
       }
       catch (Exception $e) {
           DB::rollBack();
           return redirect()->back()->withErrors($e->getMessage());
       }
    }
}
