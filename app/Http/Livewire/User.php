<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\User as ModelUser;
use Livewire\Component;

class User extends Component
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
        $query = ModelUser::query();
        $query = $query->where('name','like','%'.$this->search.'%');
        $query = $query->paginate($this->perPage);
        return view('livewire.user',compact('query'));
    }
}
