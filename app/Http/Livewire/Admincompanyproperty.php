<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Property as ModelProperty;
use Livewire\Component;

class Admincompanyproperty extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 10;
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
        $query = $query->paginate($this->perPage);

        return view('livewire.admincompanyproperty',compact('query'));
    }
}
