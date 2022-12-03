<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Brand as ModelBrand;
use Livewire\Component;

class Brand extends Component
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
        $query = ModelBrand::query();
        $query = $query->where('name','like','%'.$this->search.'%');
        $query = $query->paginate($this->perPage);
        return view('livewire.brand',compact('query'));
    }
}
