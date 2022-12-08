<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Recomended as ModelRecomended;
use Livewire\Component;

class Recomended extends Component
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
        $query = ModelRecomended::query();
        $query = $query->with(['property.company','property.car']);
        $query = $query->where('is_show','like','%'.$this->search.'%');
        $query = $query->paginate($this->perPage);
        return view('livewire.recomended',compact('query'));
    }
}
