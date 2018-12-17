<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::all();

        return view('admin.pages.list_coupon', ['coupons' => $coupons]);
    }

    public function add(Request $request)
    {
        Coupon::create([
            'name' => $request->input('name'),
            'code' => $request->input('code'),
            'type' => $request->input('type'),
            'total' => $request->input('total'),
            'exp_date' => $request->input('exp-date'),
            'sale_off' => $request->input('sale-off'),
            'condition' => $request->input('condition')
        ]);

        return redirect()->route('admin.list_coupon');
    }

    public function apply(Request $request)
    {
    }
}
