<?php

namespace App\Http\Controllers\Store;

use App\Model\Order;
use App\Model\OrderItem;
use App\Model\UserAddress;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class OrderController extends Controller
{
    public function add(Request $request)
    {
        $validator = Validator::make($request->input(), [
            'fullname' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'payment-method' => 'required'
        ]);

        if ($validator->fails()) {
            $request->flash();
            $error = $validator->errors();

            return view('store.pages.shopping-cart', ['errors' => $error]);
        }

        $user = User::where('email', $request->input('email'))->first();

        if (!$user){
            $user = User::create([
                'name' => $request->input('fullname'),
                'email' => $request->input('email'),
                'password' => bcrypt('123456'),
                'phone' => $request->input('phone')
            ]);
        }

        $userAdd = UserAddress::create([
            'user_id' => $user->id,
            'address' => $request->input('address')
        ]);

        $order = Order::create([
            'user_id' => $user->id,
            'user_address_id' => $userAdd->id,
            'order_method' => $request->input('payment-method'),
            'order_date' => date('Y-m-d'),
            'status' => 0,
            'comment' => !empty($request->input('note')) ? $request->input('note') : "No comment",
            'shipped_date' => date('Y-m-d')
        ]);

        $cart = session()->get('cart');

        foreach ($cart as $id => $product) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $id,
                'stock' => $product['quantity']
            ]);
        }

        session()->put('cart', []);

        return view('store.pages.order_success');
    }
}
