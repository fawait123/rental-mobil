<?php

namespace App\Http\Livewire\Frontend;

use Livewire\WithPagination;
use App\Models\Property as ModelProperty;
use Livewire\Component;
use App\Models\Customer;
use App\Models\Transaction;

class Product extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $search='';
    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        $query = ModelProperty::query();
        $query = $query->with(['company','car.brand','car.type']);
        if($this->search != ''){
            $query = $query->where('price','like','%'.$this->search.'%')->orWhereHas('car',function($qr){
                $qr->where('name','like','%'.$this->search.'%');
            })->where('is_show',true);
        }
        $query = $query->where('is_show',true);
        $query = $query->paginate($this->perPage);
        // transaction
        $transaction = [];
        if(auth()->user()){
            $customer = Customer::where('user_id',auth()->user()->id)->first();
            $transaction = Transaction::with(['property.car','payment'])->where('customer_id',$customer->id)->where('status','process')->get();
        }
        return view('livewire.frontend.product',[
            'query' => $query,
            'transaction' => $transaction
        ]);
    }
}
