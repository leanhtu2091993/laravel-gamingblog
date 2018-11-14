<?php

namespace App\Http\Controllers\Store;


use App\Http\Controllers\Controller;
use App\Services\CartService;
use Illuminate\Http\Request;

/**
 * Class CartController
 * @package App\Http\Controllers\Store
 *
 * @author bienhoang <bienhoanggiang@gmail.com>
 */
class CartController extends Controller
{
	protected $cartService;

	public function __construct(CartService $cartService)
	{
		$this->cartService = $cartService;
	}

	/**
	 * Show Cart page
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$cart = session()->get('cart');

		return view('store.pages.cart', ['cart' => $cart]);
	}

	/**
	 * Add product to Cart
	 *
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function addToCart($id)
	{
		$this->cartService->addProductToCart($id);

		return redirect()->back()->with('success', 'Product added to cart successfully!');
	}

	/**
	 * Update product in Cart
	 *
	 * @param Request $request
	 */
	public function update(Request $request)
	{
		$id = $request->input('id');
		$quantity = $request->input('quantity');

		if ($this->cartService->updateProductToCart($id, $quantity)) {
			session()->flash('success', 'Cart updated successfully');
		}
	}

	/**
	 * Remove product from Cart
	 *
	 * @param Request $request
	 */
	public function remove(Request $request)
	{
		$id = $request->input('id');

		if ($this->cartService->removeProductFromCart($id)) {
			session()->flash('success', 'Product removed successfully');
		}
	}
}
