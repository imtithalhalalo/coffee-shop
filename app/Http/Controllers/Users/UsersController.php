<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Product\Booking;
use App\Models\Product\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    
    public function displayOrders() {
        $orders = Order::where("user_id", Auth::id())->orderBy("created_at","desc")->paginate(10);

        return view("users.orders", compact("orders"));
    }

    public function displayBookings() {
        $bookings = Booking::where("user_id", Auth::id())->orderBy("created_at","desc")->paginate(10);

        return view("users.bookings", compact("bookings"));
    }

}
