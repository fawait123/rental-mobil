<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Other as ModelOther;
use Livewire\Component;

class Other extends Component
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
        $query = ModelOther::query();
        $query = $query->with(['property.company','property.car']);
        $query = $query->where('is_show','like','%'.$this->search.'%');
        $query = $query->paginate($this->perPage);
        return view('livewire.other',compact('query'));
    }
}
