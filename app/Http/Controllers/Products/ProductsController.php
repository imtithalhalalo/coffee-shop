<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Product\Order;
use App\Models\Product\Cart;
use Illuminate\Support\Facades\Auth;
use Session;
use Redirect;

class ProductsController extends Controller
{
    

    public function productDetails($id) {
        $product = Product::find($id);

        if (!$product) {
            // Handle the case where the product does not exist
            abort(404); // Or any other appropriate action
        }

        $relatedProducts = Product::where('type', $product->type)
            ->where('id', '!=', $id)
            ->take('4')
            ->orderBy('id', 'desc')
            ->get();

        // checking for products in cart

        $checkingInCart = Cart::where('prod_id', $id)
        ->where('user_id', Auth::id())
        ->count();

        return view('products.productdetails', compact('product', 'relatedProducts', 'checkingInCart'));
    }


    
}
