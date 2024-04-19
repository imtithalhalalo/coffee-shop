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


    public function addToCart(Request $request, $id) {
        // Check if the user is authenticated
        if (!Auth::check()) {
            // Redirect the user to the login page or return an error response
            return redirect()->route('login')->with('error', 'You must be logged in to add items to the cart.');
        }
       // Retrieve the product details from the request parameters
        $prod_id = $request->input('prod_id');
        $name = $request->input('name');
        $price = $request->input('price');
        $image = $request->input('image');

        // Create a new cart item
        $addToCart = Cart::create([
            'prod_id' => $prod_id,
            'name' => $name,
            'price' => $price,
            'image' => $image,
            'user_id' => Auth::id(),
        ]);

        // Check if the cart item was successfully created
        if ($addToCart) {
            return Redirect::route('product.details', $id)->with(['success' => 'item added to cart']);

        } else {
            // Return an error response if the cart item creation failed
            return "Failed to add item to cart";
        }
    }


}
