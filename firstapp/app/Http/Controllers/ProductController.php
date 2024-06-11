<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    function index()
    {
        $products= product::all();

        return view('jewelery', compact('products'));
    }

     function addtoCart(Request $req)
    {
        if(req->session->has('user'))
        {
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user'['id']);
            $cart->product_id=$req->product_id;
            $cart->save();
            return 'hello';

        }
        else{
            return redirect('/login');
        }
    }
}
