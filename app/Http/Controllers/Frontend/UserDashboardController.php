<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        // $totalOrder = Order::where('user_id', Auth::user()->id)->count();
        // $pendingOrder = Order::where('user_id', Auth::user()->id)
        //     ->where('order_status', 'pending')->count();
        // $completeOrder = Order::where('user_id', Auth::user()->id)
        // ->where('order_status', 'delivered')->count();
        // $reviews = ProductReview::where('user_id', Auth::user()->id)->count();
        // $wishlist = Wishlist::where('user_id', Auth::user()->id)->count();

        // return view('frontend.dashboard.dashboard', compact(
        //     'totalOrder',
        //     'pendingOrder',
        //     'completeOrder',
        //     'reviews',
        //     'wishlist'
        // ));
        return view('frontend.dashboard.dashboard');
    }
}
