<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Property as ModelProperty;
use Livewire\Component;

class Property extends Component
{
    public $search = '';
    public $perPage = 10;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        $query = ModelProperty::query();
        $query = $query->with(['company','car.brand','car.type']);
        $query = $query->where('price','like','%'.$this->search.'%');
        $query = $query->whereHas('company',function($qr){
            $qr->where('user_id',auth()->user()->id);
        });
        $query = $query->paginate($this->perPage);

        return view('livewire.property',compact('query'));
    }
}
