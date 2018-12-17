<?php

namespace App\Services;


use App\Model\Product;

class CartService
{
    protected $product;

    /**
     * CartService constructor.
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Get cart list
     *
     * @return mixed
     */
    public function getCart()
    {
        return session()->get('cart');
    }

    /**
     * Add product to Cart
     *
     * @param int $id
     */
    public function addProductToCart($id)
    {
        $product = $this->product->find($id);

        if (!$product) {

            abort(404);
        }

        $cart = session()->get('cart');

        // If cart is empty then this the first product
        if (!$cart) {
            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->image
                ]
            ];
        }

        // If cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            // If item not exist in cart then add to cart with quantity = 1
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "photo" => $product->image
            ];
        }

        session()->put('cart', $cart);
    }

    /**
     * Add product to Cart
     *
     * @param int $id
     * @param int $quantity
     * @return bool
     */
    public function updateProductToCart($id, $quantity)
    {
        if ($id && $quantity)
        {
            $cart = session()->get('cart');
            $cart[$id]["quantity"] = $quantity;
            session()->put('cart', $cart);

            return true;
        }

        return false;
    }

    /**
     * Remove product from Cart
     *
     * @param int $id
     * @return bool
     */
    public function removeProductFromCart($id)
    {
        if ($id) {
            $cart = session()->get('cart');

            if (isset($cart[$id])) {

                unset($cart[$id]);

                session()->put('cart', $cart);

                return true;
            }
        }

        return false;
    }
}