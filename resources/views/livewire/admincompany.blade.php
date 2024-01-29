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
                        {{-- <div class="action-btn mt-sm-0 mt-15">
                            <a href="{{ route('brand.create') }}" class="btn px-20 btn-primary ">
                                <i class="las la-plus fs-16"></i>Add New
                            </a>
                        </div> --}}
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
                                            <span class="userDatatable-title">Name</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Email</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Telp</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Address</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Location</span>
                                        </th>
                                        {{-- <th>
                                            <span class="userDatatable-title float-right">action</span>
                                        </th> --}}
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
                                                    <div class="d-flex">
                                                        <div
                                                            class="userDatatable__imgWrapper d-flex align-items-center">
                                                            <a href="{{ $row->picture }}" target="blank"
                                                                class="profile-image rounded-circle d-block m-0 wh-38"
                                                                style="background-image:url('{{ $row->picture }}'); background-size: cover;"></a>
                                                        </div>
                                                        <div class="userDatatable-inline-title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>{{ $row->name }}</h6>
                                                            </a>
                                                            <p class="d-block mb-0">
                                                                {{ $row->owner->name ?? null }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        {{ $row->email }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        {{ $row->telp }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        {{ $row->address }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        <a href="" class="preview" data-toggle="modal"
                                                            data-target="#modal-preview{{ $loop->iteration }}">view</a>
                                                    </div>
                                                </td>
                                                {{-- <td>
                                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                        <li>
                                                            <a href="{{ route('admin.company.property') }}?company_id={{ $row->id }}"
                                                                class="remove">
                                                                <i class="fa fa-eye text-secondary"></i>
                                                        </li>
                                                    </ul>
                                                </td> --}}
                                            </tr>
                                            {{-- modal delete --}}
                                            <div class="modal-preview modal fade show"
                                                id="modal-preview{{ $loop->iteration }}" tabindex="-1" role="dialog"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-sm modal-info" role="document">
                                                    <form action="{{ route('brand.destroy', $row->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                {!! $row->location !!}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-danger btn-outlined btn-sm"
                                                                    data-dismiss="modal">Close</button>
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
