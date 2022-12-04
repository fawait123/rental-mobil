<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Company as ModelCompany;
use Livewire\Component;

class Admincompany extends Component
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
        $query = ModelCompany::query();
        $query = $query->with('owner');
        $query = $query->where('name','like','%'.$this->search.'%');
        $query = $query->paginate($this->perPage);
        return view('livewire.admincompany',compact('query'));
    }
}
