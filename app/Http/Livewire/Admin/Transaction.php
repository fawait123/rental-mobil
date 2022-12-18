<?php

namespace App\Http\Livewire\Admin;

use Livewire\WithPagination;
use App\Models\Transaction as ModelTransaction;
use App\Models\Company;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TransactionExport;

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
        $query = ModelTransaction::query();
        $query = $query->with(['customer','payment','property']);
        if($this->search != ''){
            $query = $query->where('name','like','%'.$this->search.'%')->where('status','completed');
        }
        $query = $query->where('status','completed');
        $query = $query->paginate($this->perPage);
        return view('livewire.admin.transaction',compact('query'));
    }


    public function download()
    {
        $query = ModelTransaction::query();
        $query = $query->with(['customer','payment','property']);
        if($this->search != ''){
            $query = $query->where('name','like','%'.$this->search.'%')->where('status','completed');
        }
        $query = $query->where('status','completed');
        $query = $query->paginate($this->perPage);
        return Excel::download(new TransactionExport($query), 'report-transaction'.date('YmdHis').'.xlsx');
    }
}
