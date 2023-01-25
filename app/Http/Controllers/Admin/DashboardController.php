<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  
   public function index()
   {
      $totalProducts = Product::count();
      $totalCategories = Category::count();

      $totalAllUsers = User::count();
      $totalUsers = User::where('role_as','0')->count();
      $totalAdmins = User::where('role_as','1')->count();


      $todayOrders = Carbon::now()->format('d-m-Y');
      $thisMonth = Carbon::now()->format('m');
      $thisYear = Carbon::now()->format('Y');



      $totalOrders = Order::count();
      $todayOrders = Order::whereDate('created_at',$todayOrders)->count();
      $thisMonthOrders = Order::whereMonth('created_at',$thisMonth)->count();
      $thisYearOrders = Order::whereYear('created_at',$thisYear)->count();




      return view('admin.dashboard',compact('totalProducts','totalCategories','totalAllUsers','totalUsers',
                                            'totalAdmins','todayOrders','thisMonth','thisYear','totalOrders',
                                            'todayOrders','thisMonthOrders','thisYearOrders'
                                            )
                  );
   }
}