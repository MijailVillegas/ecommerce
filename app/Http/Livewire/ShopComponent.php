<?php

namespace App\Http\Livewire;

use App\Models\Articulo;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $articulos = Articulo::paginate(12);

        return view('livewire.shop-component',['articulos'=>$articulos])->layout("layouts.base");
    }
}
