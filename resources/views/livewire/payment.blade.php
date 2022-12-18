<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="contact-breadcrumb">
                <div class="breadcrumb-main add-contact justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center add-contact__title justify-content-center mr-sm-25">
                            <h4 class="text-capitalize fw-500 breadcrumb-title">Data List</h4>
                            <span class="sub-title ml-sm-25 pl-sm-25"></span>
                        </div>
                        <div class="action-btn mt-sm-0 mt-15">
                            <button wire:click="download" class="btn px-20 btn-primary ">
                                <i class="las la-download fs-16"></i>Download
                            </button>
                        </div>
                    </div>
                    <div class="breadcrumb-main__wrapper">

                        <form action="/" class="d-flex align-items-center add-contact__form my-sm-0 my-2">
                            <span data-feather="search"></span>
                            <input wire:model="search" class="form-control mr-sm-2 border-0 box-shadow-none"
                                type="search" placeholder="Search by Name" aria-label="Search">
                        </form>

                    </div>
                </div>

            </div>
            <!-- ends: contact-breadcrumb -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mb-30">
            <div class="card">
                <div class="card-body">
                    <div class="userDatatable global-shadow border-0 bg-white w-100">
                        <div class="table-responsive">
                            <table class="table mb-0 table-borderless">
                                <thead>
                                    <tr class="userDatatable-header">
                                        <th>
                                            <span class="userDatatable-title">No</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Invoice</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Customer Name</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Payment Type</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Nominal</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Status</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($query) > 0)
                                        @foreach ($query as $row)
                                            <tr>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $loop->iteration }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        {{ $row->payment->transaction->invoice ?? '' }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        {{ $row->payment->transaction->name ?? '' }}
                                                    </div>
                                                </td>
                                                @if ($row->payment->type == 'payment gateway')
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span
                                                                style="text-transform: uppercase">{{ $row->midtrans->bank }}</span>,
                                                            {{ $row->midtrans->va_number }}
                                                        </div>
                                                    </td>
                                                @else
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            {{ $row->payment->type }}
                                                        </div>
                                                    </td>
                                                @endif
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        Rp. {{ number_format($row->nominal, 2, ',', '.') }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        {{ $row->status }}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="3" align="center">Data not found</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex justify-content-sm-end justify-content-start pt-25">

                        <nav class="atbd-page ">
                            <ul class="atbd-pagination d-flex">
                                <li class="atbd-pagination__item">
                                    {!! $query->links() !!}
                                </li>
                                <li class="atbd-pagination__item">
                                    <div class="paging-option">
                                        <select wire:model="perPage" name="page-number" class="page-selection">
                                            <option value="10" selected>10/page</option>
                                            <option value="20">20/page</option>
                                            <option value="50">50/page</option>
                                            <option value="100">100/page</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </nav>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
