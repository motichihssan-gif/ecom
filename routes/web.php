<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/produits/{cat}', function ($cat) {
    $produits = [];

    if ($cat == 'hicking') {
        $produits = [
            ["nom" => "Sac à dos", "prix" => "200 DH", "image" => "sacados.jpg"],
            ["nom" => "Tente", "prix" => "300 DH", "image" => "tente.jpg"],
            ["nom" => "Montre GPS", "prix" => "150 DH", "image" => "montre.jpg"]
        ];
    } elseif ($cat == 'electromenager') {
        $produits = [
            ["nom" => "Machine à laver", "prix" => "3 000 DH", "image" => "machinealaver.jpg"],
            ["nom" => "Four", "prix" => "1 500 DH", "image" => "four.jpg"],
            ["nom" => "Micro-onde", "prix" => "1 000 DH", "image" => "micronde.jpg"]
        ];
    }

    return view('Produits', [
        'products' => $produits,
        'categorie' => $cat
    ]);
});