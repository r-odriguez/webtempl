<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class Shop extends Controller
{
    /**
     * Display a list of products.
     */
    public function view(Request $request): View
    {
        $templates = [];

        for ($i = 0; $i < 20; $i++) {
            $templates[$i] = [
                "id" => $i,
                "title" => "Product $i",
                "description" => "Product $i",
                "author" => "Me",
                "pricingModel" => "PAID",
                "price" => 2.34,
            ];
        }

        return view("welcome", ["templates" => $templates]);
    }
}
