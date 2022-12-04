<?php

namespace App\Http\Livewire\Frontend;

use Livewire\WithPagination;
use App\Models\Property as ModelProperty;
use Livewire\Component;

class Product extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $search='';
    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        $query = ModelProperty::query();
        $query = $query->with(['company','car.brand','car.type']);
        $query = $query->where('price','like','%'.$this->search.'%')->orWhereHas('car',function($qr){
            $qr->where('name','like','%'.$this->search.'%');
        });
        $query = $query->paginate($this->perPage);
        return view('livewire.frontend.product',compact('query'));
    }
}
