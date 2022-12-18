<?php

namespace App\Http\Livewire;

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
        $company = Company::where('user_id',auth()->user()->id)->first();
        if($this->search != ''){
            $query = $query->where('status','like','%'.$this->search.'%')->whereHas('payment.transaction',function($qr)use($company){
                $qr->where('company_id',$company->id);
            });
        }
        $query = $query->whereHas('payment.transaction',function($qr)use($company){
            $qr->where('company_id',$company->id);
        });
        $query = $query->paginate($this->perPage);
        return view('livewire.payment',compact('query'));
    }

    public function download()
    {
        $query = ModelPaymentDetail::query();
        $query = $query->with(['payment.transaction','midtrans']);
        $company = Company::where('user_id',auth()->user()->id)->first();
        if($this->search != ''){
            $query = $query->where('status','like','%'.$this->search.'%')->whereHas('payment.transaction',function($qr)use($company){
                $qr->where('company_id',$company->id);
            });
        }
        $query = $query->whereHas('payment.transaction',function($qr)use($company){
            $qr->where('company_id',$company->id);
        });
        $query = $query->get();
        return Excel::download(new PaymentExport($query), 'report-payment'.date('YmdHis').'.xlsx');
    }
}
