<?php

namespace App\Http\Controllers;

class StaticPageController extends Controller {
    public function home() {
        return view('home');
    }

    public function contacts() {
        return view('contatti');
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
}