<?php

namespace App\Livewire;

use Livewire\Component;

class Shop extends Component
{
    public $count = 0;
    public $templates = [
        [
            "id" => 0,
            "title" => "Product 0",
            "description" => "Product 0",
            "author" => "Me",
            "pricingModel" => "PAID",
            "price" => 2.34,
        ],
        [
            "id" => 1,
            "title" => "Product 1",
            "description" => "Product 1",
            "author" => "Me",
            "pricingModel" => "PAID",
            "price" => 2.34,
        ],
        [
            "id" => 2,
            "title" => "Product 2",
            "description" => "Product 2",
            "author" => "Me",
            "pricingModel" => "PAID",
            "price" => 2.34,
        ]
    ];

    public function render()
    {
        return view("livewire.shop");
    }

    public function add_to_cart(int $id)
    {
        array_splice($this->templates, $id, 1);
        $this->count++;
    }
}
