<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Product\Order;
use App\Models\Product\Booking;
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
            abort(404); 
        }

        $relatedProducts = Product::where('type', $product->type)
            ->where('id', '!=', $id)
            ->take('4')
            ->orderBy('id', 'desc')
            ->get();

        // checking for products in cart
        if (isset(Auth::user()->id)) {
            $checkingInCart = Cart::where('prod_id', $id)
                ->where('user_id', Auth::id())
                ->count();

                return view('products.productdetails', compact('product', 'relatedProducts', 'checkingInCart'));
        } else {
            return view('products.productdetails', compact('product', 'relatedProducts'));
        }
        
    }

    public function menu() {
        $drinks = Product::select()->where('type', 'drinks')->take(8)->get();
        $desserts = Product::select()->where('type', 'desserts')->take(8)->get();
        $products = Product::select()->get();
        return view('products.menu', compact('drinks', 'desserts', 'products'));
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

    
    public function cart() {
        
        if (!Auth::check()) {
            
            return redirect()->route('login')->with('error', 'You must be logged in to add items to the cart.');
        }
        
        $cartProducts = Cart::where('user_id', Auth::id())->orderBy('id', 'desc')->get();

        $totalPrice = Cart::where('user_id', Auth::id())
                        ->sum('price');
        
        return view('products.cart', compact('cartProducts', 'totalPrice'));
    }
    public function clearCart() {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to add items to the cart.');
        }
        
        Cart::where('user_id', Auth::id())->delete();
    
        $totalPrice = 0;
        return view('products.cart', compact('totalPrice'))->with('success', 'Cart has been cleared successfully.');
    }    



    public function deleteProductFromCart($id) {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to add items to the cart.');
        }
        $deleteProductFromCart = Cart::where('prod_id', $id)
            ->where('user_id', Auth::id())
            ->delete();

        if ($deleteProductFromCart) {
            return Redirect::route('cart')->with(['delete' => 'item deleted from cart']);

        } else {
            return "Failed to delete item from cart";
        }
    }


    public function prepareCheckout(Request $request) {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to add items to the cart.');
        }
        $value = $request->price;
        $price = Session::put('price', $value);

        $newPrice = Session::get($price);

        if ($newPrice > 0) {
            return Redirect::route('checkout');

        } else {
            return "Failed to checkout cart";
        }
    }

    public function checkout() {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to add items to the cart.');
        }
        return view('products.checkout');
    }

    public function storeCheckout(Request $request) {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to add items to the cart.');
        }

        $checkout = Order::create($request->all());

        if ($checkout) {
            $this->clearCart();
            return redirect()->route('users.orders')->with('success', 'Your order is on the way!');
        } else {
            return "Failed to add item to cart";
        }
    }
    public function bookTable(Request $request) {
        
        $request->validate([
            "first_name" => "required|max:40",
            "last_name" => "required|max:40",
            "date" => "required|date|after_or_equal:today", // Ensure date is not in the past
            "time" => "required",
            "phone" => "required|max:40",
            "message" => "required"
        ]);
    
        // Check if the date is in the future
        if ($request->date > date("Y-m-d")) {
            // Create a new booking record
            $bookTable = Booking::create($request->all());
            if ($bookTable) {
                
                return redirect()->route('home')->with('success', 'Your table is booked successfully.');
            } else {
                
                return redirect()->route('home')->with('error', 'Failed to book table. Please try again.');
            }
        } else {
            
            return redirect()->route('home')->with('error', 'Please choose a date in the future.');
        }
    }    

}
