<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function add(Request $request, $id, $quantity)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Produit non trouvé');
        }

        $cart = $request->session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => $quantity,
                "price" => $product->price,
                "photo" => $product->image
            ];
        }

        $request->session()->put('cart', $cart);
        return redirect()->route('cart');
    }

    public function update(Request $request, $id)
    {
        if ($id && $request->quantity) {
            $cart = $request->session()->get('cart');
            $cart[$id]["quantity"] = $request->quantity;
            $request->session()->put('cart', $cart);
        }

        return redirect()->route('cart');
    }

    public function remove(Request $request, $id)
    {
        $cart = $request->session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            $request->session()->put('cart', $cart);
        }

        return redirect()->route('cart');
    }

    public function checkout(Request $request)
    {
        // Validation des informations de paiement
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'required|string|max:255',
            'postal_code' => 'required|digits:5',
            'card_number' => 'required|regex:/\d{4}-\d{4}-\d{4}-\d{4}/',
            'cvc' => 'required|digits:3',
        ]);
    
        // Si validation réussie
        $request->session()->forget('cart');
        return response()->json(['success' => 'Commande validée avec succès !']);
    }
    
}