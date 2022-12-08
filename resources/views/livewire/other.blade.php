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
                            <a href="{{ route('other.create') }}" class="btn px-20 btn-primary ">
                                <i class="las la-plus fs-16"></i>Add New
                            </a>
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
                                            <span class="userDatatable-title">Company Name</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Car</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Number Vehicles</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Is Show</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title float-right">action</span>
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
                                                        {{ $row->property->company->name }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        {{ $row->property->car->name }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        {{ $row->property->car->number_vehicles }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        <span
                                                            class="bg-opacity-{{ $row->is_show == 1 ? 'success' : 'danger' }}  color-{{ $row->is_show == 1 ? 'success' : 'danger' }} rounded-pill userDatatable-content-status active">{{ $row->is_show == 1 ? 'Show' : 'Unshow' }}</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                        {{-- <li>
                                                            <a href="#" class="view">
                                                                <span data-feather="eye"></span></a>
                                                        </li> --}}
                                                        <li>
                                                            <a href="{{ route('other.edit', $row->id) }}"
                                                                class="edit">
                                                                <i class="fa fa-edit text-primary"></i>
                                                            </a>

                                                        </li>
                                                        <li>
                                                            <a href="#" class="remove" data-toggle="modal"
                                                                data-target="#modal-info-delete{{ $loop->iteration }}">
                                                                <i class="fa fa-trash text-danger"></i>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            {{-- modal delete --}}
                                            <div class="modal-info-delete modal fade show"
                                                id="modal-info-delete{{ $loop->iteration }}" tabindex="-1"
                                                role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-sm modal-info" role="document">
                                                    <form action="{{ route('other.destroy', $row->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="modal-info-body d-flex">
                                                                    <div class="modal-info-icon warning">
                                                                        <span data-feather="info"></span>
                                                                    </div>

                                                                    <div class="modal-info-text">
                                                                        <h6>Do you Want to delete these items?</h6>
                                                                        <p>Data will be deleted...</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-danger btn-outlined btn-sm"
                                                                    data-dismiss="modal">No</button>
                                                                <button type="submit"
                                                                    class="btn btn-success btn-outlined btn-sm">Yes</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            {{-- end modal delete --}}
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
                                    {{-- <a href="#" class="atbd-pagination__link pagination-control"><span
                                            class="la la-angle-left"></span></a>
                                    <a href="#" class="atbd-pagination__link"><span
                                            class="page-number">1</span></a>
                                    <a href="#" class="atbd-pagination__link active"><span
                                            class="page-number">2</span></a>
                                    <a href="#" class="atbd-pagination__link"><span
                                            class="page-number">3</span></a>
                                    <a href="#" class="atbd-pagination__link pagination-control"><span
                                            class="page-number">...</span></a>
                                    <a href="#" class="atbd-pagination__link"><span
                                            class="page-number">12</span></a>
                                    <a href="#" class="atbd-pagination__link pagination-control"><span
                                            class="la la-angle-right"></span></a>
                                    <a href="#" class="atbd-pagination__option">
                                    </a> --}}
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
