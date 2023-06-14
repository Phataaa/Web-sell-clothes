<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
use App\Models\product_image;
use Illuminate\Support\Facades\Session;
class ControllerAdmin extends Controller
{
    public function management_user() {
        $Seller = DB::table('users')->select()->where('role', '=', 'seller')->get();
        $Buyer = DB::table('users')->select()->where('role', '=', 'buyer')->get();
        $Admin = DB::table('users')->select()->where('role', '=', 'admin')->get();

        return view('user.admin.management_user', compact('Seller', 'Buyer', 'Admin'));
    }

    public function management_category() {
        $Category = category::all();

        return view('user.admin.management_category', compact('Category'));
    }
    public function management_product() {
        $Product = product::all();
        $Product_image = product_image::all();
        return view('user.admin.management_product', compact('Product', 'Product_image'));
    }
   
}
