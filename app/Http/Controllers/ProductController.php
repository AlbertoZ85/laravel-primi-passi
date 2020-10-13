<?php

namespace App\Http\Controllers;

class ProductController extends Controller {
    protected $products;

    public function __construct() {
        $this->products = config('db');
    }

    public function products() {
        $cards = config('db');

        $long = [];
        $short = [];
        $veryShort = [];

        foreach ($cards as $key => $card) {
            if ($card['tipo'] == 'lunga') {
                $long[] = $card;
            } elseif ($card['tipo'] == 'corta') {
                $short[] = $card;
            } elseif ($card['tipo'] == 'cortissima') {
                $veryShort[] = $card;
            }
        }
        return view('prodotti', compact('long', 'short', 'veryShort'));
    }

    public function show($id) {
        if (!array_key_exists($id, $this->products)) {
            abort(404);
        }
        $card = $this->products[$id];
        return view('show', compact('card'));
    }
}