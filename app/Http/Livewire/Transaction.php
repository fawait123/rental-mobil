<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Transaction as ModelTransaction;
use App\Models\Company;
use Livewire\Component;


class Transaction extends Component
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
        $company = Company::where('user_id',auth()->user()->id)->first();
        $query = ModelTransaction::query();
        $query = $query->with(['customer','payment','property']);
        if($this->search != ''){
            $query = $query->where('name','like','%'.$this->search.'%')->where('company_id',$company->id);
        }
        $query = $query->where('company_id',$company->id);
        $query = $query->paginate($this->perPage);
        return view('livewire.transaction',compact('query'));
    }
}
