<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){

            // Caracteres permitidos en el identificador
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $transactionID = '';

        // Generar caracteres aleatorios
        for ($i = 0; $i < $charactersLength; $i++) {
            $transactionID .= $characters[rand(0, $charactersLength - 1)];
        }

        return view('checkout', compact('transactionID'));
    }
}
