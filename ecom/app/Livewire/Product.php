<?php

namespace App\Livewire;

use Livewire\Component;

class Product extends Component
{

    public $productId;
    /**
     * @param  mixed  $productId
     * @return never
     */
    public function mount($productId)
    {
    }

    public function render()
    {
        return view('livewire.product')->layout('layouts.guest');
    }
}:q
