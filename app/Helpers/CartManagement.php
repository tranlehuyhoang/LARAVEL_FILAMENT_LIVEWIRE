<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Cookie;


class CartManagement
{

    public static function addItemToCart($product_id)
    {
        // Get the cart items from the cookie
        $cart_items = self::getCartItemsFromCookie();

        // Check if the item already exists in the cart
        $existing_item = null;
        foreach ($cart_items as $item) {
            if ($item['product_id'] == $product_id) {
                $existing_item = $item;
                break;
            }
        }

        // If the item does not exist, add it to the cart
        if ($existing_item === null) {
            $cart_items[] = ['product_id' => $product_id];
        }

        // Add the updated cart items to the cookie
        self::addCartItemsToCookie($cart_items);
    }


    public static function addCartItemsToCookie($cart_items)
    {
        // Encode the cart items as JSON and set the cookie
        $cookie_value = json_encode($cart_items);
        Cookie::queue('cart_items', $cookie_value, 60 * 24 * 7); // 7 days
    }


    public static function getCartItemsFromCookie()
    {
        // Check if the 'cart_items' cookie is set
        if (Cookie::has('cart_items')) {
            // Decode the cookie value and return the cart items
            $cart_items = json_decode(Cookie::get('cart_items'), true);
            return $cart_items;
        }

        return [];
    }


    public static function clearCartItems()
    {
        // Remove the 'cart_items' cookie
        Cookie::forget('cart_items');
    }
}
