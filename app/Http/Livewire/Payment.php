<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\PaymentDetail as ModelPaymentDetail;
use Livewire\Component;

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
        $query = $query->where('status','like','%'.$this->search.'%');
        $query = $query->paginate($this->perPage);
        return view('livewire.payment',compact('query'));
    }
}
