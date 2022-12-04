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
                            <a href="{{ route('property.create') }}" class="btn px-20 btn-primary ">
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
                                            <span class="userDatatable-title">Company</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Brand</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Type</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Seat Capacity</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Number of Vehicles</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Fuel</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Color</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Price</span>
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
                                                    <div class="d-flex">
                                                        <div
                                                            class="userDatatable__imgWrapper d-flex align-items-center">
                                                            <a href="{{ $row->car->picture }}" target="blank"
                                                                class="profile-image rounded-circle d-block m-0 wh-38"
                                                                style="background-image:url('{{ $row->car->picture }}'); background-size: cover;"></a>
                                                        </div>
                                                        <div class="userDatatable-inline-title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>{{ $row->car->name }}</h6>
                                                            </a>
                                                            <p class="d-block mb-0">
                                                                {{ $row->car->brand->name }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        {{ $row->company->name }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        {{ $row->car->brand->name }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        {{ $row->car->type->name }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        {{ $row->car->seat_capacity }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        {{ $row->car->number_vehicles }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        {{ $row->car->fuel }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        {{ $row->car->color }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        Rp. {{ number_format($row->price, 2, ',', '.') }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                        <div
                                                            class="custom-control custom-switch switch-primary switch-md">
                                                            <input type="checkbox" class="custom-control-input is_show"
                                                                data-id="{{ $row->id }}"
                                                                id="switch-s{{ $loop->iteration }}"
                                                                {{ $row->is_show == 1 ? 'checked' : '' }}>
                                                            <label class="custom-control-label"
                                                                for="switch-s{{ $loop->iteration }}"></label>
                                                        </div>

                                                    </ul>
                                                </td>
                                            </tr>
                                            {{-- modal delete --}}
                                            <div class="modal-info-delete modal fade show"
                                                id="modal-info-delete{{ $loop->iteration }}" tabindex="-1"
                                                role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-sm modal-info" role="document">
                                                    <form action="{{ route('property.destroy', $row->id) }}"
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
                                            <td colspan="11" align="center">Data not found</td>
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

@push('customjs')
    <script>
        $(".is_show").on('change', function() {
            let id = $(this).data('id')
            let value = $(this).is(':checked') ? 1 : 0
            console.log(value)
            $.ajax({
                url: '{{ route('admin.is-show') }}',
                method: 'get',
                data: {
                    id: id,
                    value: value
                },
                success: function(res) {
                    console.log(res)
                }
            })
        })
    </script>
@endpush
