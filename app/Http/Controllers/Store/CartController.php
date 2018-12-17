<?php

namespace App\Http\Controllers\Store;


use App\Http\Controllers\Controller;
use App\Model\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
	public function index()
	{
		return view('store.pages.shopping-cart');
	}

	public function add($productId)
	{
		$product = Product::find($productId);

		$cart = session()->get('cart');

		if (isset($cart[$productId])) {
			$cart[$productId]['quantity']++;
		} else {
			$cart[$productId] = [
				'id' => $product->id,
				'name' => $product->name,
				'price' => $product->price,
				'photo' => $product->image,
				'quantity' => 1
			];
		}

		session()->put('cart', $cart);

		return redirect()->back();

	}

	public function update(Request $request, $productId = null, $quantity = null)
	{
		$cart = session()->get('cart');

		if ($request->method() == 'POST') {
			$products = $request->input();

			foreach ($products as $id => $quantity) {
				if (is_numeric($id)){
					$cart[$id]['quantity'] = $quantity;
				}
			}

			session()->put('cart', $cart);

			return redirect()->back();
		}
	}

	public function delete($productId)
	{
		$cart = session()->get('cart');

		unset($cart[$productId]);

		session()->put('cart', $cart);

		return redirect()->back();
	}
}
