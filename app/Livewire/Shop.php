<?php

namespace App\Livewire;

use App\Models\Templates;
use Livewire\Component;

class Shop extends Component
{
    public $count;
    public $templates;
    public $template;

    public function mount()
    {
        $this->count = 0;
        $this->templates = Templates::get();
        $this->template = Templates::find(1);
    }

    public function render()
    {
        return view("livewire.shop");
    }

    public function add_to_cart(int $id)
    {
        $this->count++;
    }

    public function set_dialog_data($id)
    {
        $this->template = $this->templates[$id - 1];
    }
}
