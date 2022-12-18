<?php

namespace App\Http\Livewire\Admin;

use Livewire\WithPagination;
use App\Models\PaymentDetail as ModelPaymentDetail;
use App\Models\Company;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PaymentExport;

class Payment extends Component
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
        $query = ModelPaymentDetail::query();
        $query = $query->with(['payment.transaction','midtrans']);
        if($this->search != ''){
            $query = $query->where('status','like','%'.$this->search.'%');
        }
        $query = $query->paginate($this->perPage);
        return view('livewire.admin.payment',compact('query'));
    }

    public function download()
    {
        $query = ModelPaymentDetail::query();
        $query = $query->with(['payment.transaction','midtrans']);
        if($this->search != ''){
            $query = $query->where('status','like','%'.$this->search.'%');
        }
        $query = $query->get();
        return Excel::download(new PaymentExport($query), 'report-payment'.date('YmdHis').'.xlsx');
    }
}
