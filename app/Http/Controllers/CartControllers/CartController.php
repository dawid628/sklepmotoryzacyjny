<?php

namespace App\Http\Controllers\CartControllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index(Request $request)
    {

        $query = Cart::with('part')->where('carts.user_id', $request->user()->id);
        $query = $query->get(); 

       return view('cart.index', ['cart' => $query]);
    }
    
    public function add(Request $request)
    {
        $product = new Cart();

        $product->user_id = $request->user()->id;
        $product->part_id = $request->id;
        $product->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        if(Cart::find($id)){
            Cart::destroy($id);
        }
        
        return redirect()->back();
    }
}
