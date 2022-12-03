<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Type as ModelType;
use Livewire\Component;

class Type extends Component
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
        $query = ModelType::query();
        $query = $query->where('name','like','%'.$this->search.'%');
        $query = $query->paginate($this->perPage);
        return view('livewire.type',compact('query'));
    }
}
