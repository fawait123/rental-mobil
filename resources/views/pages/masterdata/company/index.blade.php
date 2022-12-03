@extends('layouts.app')
@section('content')
    @if ($company)
        <div class="row">
            <div class="cos-lg-3 col-md-4  ">
                <aside class="profile-sider">
                    <!-- Profile Acoount -->
                    <div class="card mb-25">
                        <div class="card-body text-center pt-sm-30 pb-sm-0  px-25 pb-0">

                            <div class="account-profile">
                                <div class="ap-img w-100 d-flex justify-content-center">
                                    <!-- Profile picture image-->
                                    <img class="ap-img__main rounded-circle mb-3  wh-120 d-flex bg-opacity-primary"
                                        src="{{ $company->picture }}" alt="profile">
                                </div>
                                <div class="ap-nameAddress pb-3 pt-1">
                                    <h5 class="ap-nameAddress__title">{{ $company->name }}</h5>
                                    <p class="ap-nameAddress__subTitle fs-14 m-0">{{ $company->owner->name }}</p>
                                    <p class="ap-nameAddress__subTitle fs-14 m-0">
                                        <span data-feather="map-pin"></span>{{ $company->address }}
                                    </p>
                                </div>
                            </div>

                            <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                <div class="profile-overview d-flex justify-content-between flex-wrap">
                                    <div class="po-details">
                                        <h6 class="po-details__title pb-1">$72,572</h6>
                                        <span class="po-details__sTitle">Total Revenue</span>
                                    </div>
                                    <div class="po-details">
                                        <h6 class="po-details__title pb-1">3,257</h6>
                                        <span class="po-details__sTitle">order</span>
                                    </div>
                                    <div class="po-details">
                                        <h6 class="po-details__title pb-1">74</h6>
                                        <span class="po-details__sTitle">Products</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Profile Acoount End -->

                    <!-- Profile User Bio -->
                    <div class="card mb-25">
                        <div class="user-info border-bottom">
                            <div class="card-header border-bottom-0 pt-sm-25 pb-sm-0  px-md-25 px-3">
                                <div class="profile-header-title">
                                    Contact info
                                </div>
                            </div>
                            <div class="card-body pt-md-1 pt-0">
                                <div class="user-content-info">
                                    <p class="user-content-info__item">
                                        <span data-feather="mail"></span>{{ $company->email }}
                                    </p>
                                    <p class="user-content-info__item">
                                        <span data-feather="phone"></span>{{ $company->telp }}
                                    <p class="user-content-info__item mb-0">
                                        <span data-feather="globe"></span>www.example.com
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="user-skils border-bottom">
                            <div class="card-header border-bottom-0 pt-sm-25 pb-sm-0  px-md-25 px-3">
                                <div class="profile-header-title">
                                    Skills
                                </div>
                            </div>
                            <div class="card-body pt-md-1 pt-0">
                                <ul class="user-skils-parent">
                                    <li class="user-skils-parent__item">
                                        <a href="#">UI/UX</a>
                                    </li>
                                    <li class="user-skils-parent__item">
                                        <a href="#">Branding</a>
                                    </li>
                                    <li class="user-skils-parent__item">
                                        <a href="#">product design</a>
                                    </li>
                                    <li class="user-skils-parent__item">
                                        <a href="#">Application</a>
                                    </li>
                                    <li class="user-skils-parent__item mb-0">
                                        <a href="#">web design</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="db-social border-bottom">
                            <div class="card-header border-bottom-0 pt-sm-25 pb-sm-0  px-md-25 px-3">
                                <div class="profile-header-title">
                                    Social Profiles
                                </div>
                            </div>
                            <div class="card-body pt-md-1 pt-0">
                                <ul class="db-social-parent mb-0">
                                    <li class="db-social-parent__item">
                                        <a class="color-facebook hover-facebook wh-44 fs-22" href="#">
                                            <i class="lab la-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="db-social-parent__item">
                                        <a class="color-twitter hover-twitter wh-44 fs-22" href="#">
                                            <i class="lab la-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="db-social-parent__item">
                                        <a class="color-ruby hover-ruby  wh-44 fs-22" href="#">
                                            <i class="las la-basketball-ball"></i>
                                        </a>
                                    </li>
                                    <li class="db-social-parent__item">
                                        <a class="color-instagram hover-instagram wh-44 fs-22" href="#">
                                            <i class="lab la-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Profile User Bio End -->
                </aside>
            </div>
            <div class="col">
                <!-- Tab Menu -->
                <div class="ap-tab ap-tab-header">
                    {{-- <div class="ap-tab-header__img">
                <img src="img/ap-header.png" alt="ap-header" class="img-fluid w-100">
            </div> --}}
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31682.753058268918!2d110.12349545!3d-6.968667049999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1670071693015!5m2!1sid!2sid"
                        width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="ap-tab-wrapper">
                        <ul class="nav px-25 ap-tab-main" id="ap-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="ap-overview-tab" data-toggle="pill" href="#dashboard"
                                    role="tab" aria-controls="ap-overview" aria-selected="true">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="car-tab" data-toggle="pill" href="#addCar" role="tab"
                                    aria-controls="addCar" aria-selected="true">Add Car</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="timeline-tab" data-toggle="pill" href="#property"
                                    role="tab" aria-controls="timeline" aria-selected="false">Property</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="activity-tab" data-toggle="pill" href="#report" role="tab"
                                    aria-controls="activity" aria-selected="false">Report</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Tab Menu End -->
                <div class="tab-content mt-25" id="ap-tabContent">
                    @include('pages.masterdata.company.dashboard')
                    @include('pages.masterdata.company.property')
                    @include('pages.masterdata.company.report')
                    @include('pages.masterdata.company.add-car')
                </div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ isset($id) ? route('company.update', $company->id) : route('company.store') }}"
                            method="post">
                            @csrf
                            @if (isset($id))
                                @method('put')
                            @endif
                            <div class="form-group mb-25">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}" name="name" id="name"
                                    placeholder="Company Name">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-25">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" name="email" id="email" placeholder="Email">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-25">
                                <label for="telp">Telp</label>
                                <input type="text" class="form-control @error('telp') is-invalid @enderror"
                                    value="{{ old('telp') }}" name="telp" id="telp" placeholder="Telp">
                                @error('telp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-25">
                                <label for="address">Address</label>
                                <textarea name="address" placeholder="Address" id="address" class="form-control" cols="30" rows="10">{{ old('address') }}</textarea>
                                @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-25">
                                <label for="location">Location, <a href="" data-toggle="modal"
                                        data-target="#modal-preview">Preview</a></label>
                                <textarea name="location" placeholder="Location" id="location" class="form-control" cols="30"
                                    rows="10">{{ old('location') }}</textarea>
                                @error('location')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="add-product__body-img px-sm-40 px-20">
                                <label for="upload" class="file-upload__label">
                                    <span class="upload-product-img px-10 d-block">
                                        <span class="file-upload">
                                            <span data-feather="upload"></span>
                                            <input id="upload" onchange="loadFile(event)" class="file-upload__input"
                                                type="file">
                                        </span>
                                        <span class="pera">Drag and drop an image</span>
                                        <span>or <a href="#" class="color-secondary">Browse</a> to choose a
                                            file</span>
                                    </span>
                                </label>
                                <div class="upload-product-media d-flex justify-content-between align-items-center mt-25"
                                    id="preview">
                                </div>
                                <input type="hidden" name="picture" id="picture">
                            </div>
                            <!-- End: product body -->
                            <div class="form-group mb-25">
                                <button type="submit"
                                    class="btn btn-primary btn-lg">{{ isset($id) ? 'Update' : 'Create' }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- modal --}}
        <div class="modal-info-error modal fade show" id="modal-info-error" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-sm modal-info" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-info-body d-flex">
                            <div class="modal-info-icon danger">
                                <span data-feather="x-circle"></span>
                            </div>
                            <div class="modal-info-text">
                                <p>Oops input only image...</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ends: .modal-info-error -->
        {{-- modal --}}
        <div class="modal-info-error modal fade show" id="modal-preview" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-sm modal-info" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="map-preview"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ends: .modal-info-error -->
    @endif
@endsection

@push('customjs')
    <script>
        const loadFile = function(event) {
            if (!event.target.files || !event.target.files[0]) return;
            const file = event.target.files;
            const fileName = file[0].name;
            const fileSize = file[0].size;
            let output = document.getElementById('preview');
            const type = file[0].type.split('/')
            if (type[0] !== 'image') {
                $('#modal-info-error').modal('show');
            } else {
                const FR = new FileReader();
                FR.addEventListener("load", function(evt) {
                    const base64Data = evt.target.result
                    document.getElementById('picture').value = base64Data
                    let preview = `
                <div class="upload-media-area d-flex">
                                        <img src="${base64Data}"
                                            alt="img" id="preview">
                                        <div class=" upload-media-area__title  d-flex flex-wrap align-items-center ml-10">
                                            <div>
                                                <p>${fileName}</p>
                                                <span>${fileSize} KB</span>
                                            </div>
                                            <div class="upload-media-area__btn">
                                                <button type="button" id="remove"
                                                    class="transparent rounded-circle wh-50 border-0 color-danger">
                                                    <span data-feather="trash-2" class="text-danger">Delete</span></button>
                                            </div>
                                        </div>
                                    </div>
                `;
                    output.innerHTML = preview
                });
                FR.readAsDataURL(event.target.files[0]);
            }
        };

        $(document).on('click', '#remove', function() {
            $(this).parent().parent().parent().remove();
            $("#picture").val('')
        })
        $(document).on('input', '#location', function() {
            let val = $(this).val()
            $("#map-preview").html(val)
        })
    </script>
@endpush
