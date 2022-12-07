<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StrikingDash</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/bootstrap/bootstrap.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/daterangepicker.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/fontawesome.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/footable.standalone.min.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/fullcalendar@5.2.0.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/jquery-jvectormap-2.0.5.css">

    <link rel="stylesheet"
        href="{{ asset('assets/backend/assets/vendor_assets') }}/css/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/leaflet.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/line-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/MarkerCluster.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/MarkerCluster.Default.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/select2.min.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/slick.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/star-rating-svg.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/trumbowyg.min.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/wickedpicker.min.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/style.css') }}">

    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/backend/img/favicon.png') }}">
</head>

<body>
    <main class="main-content">

        <div class="signUP-admin">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                        <div class="signUP-admin-left position-relative">
                            <div class="signUP-overlay">
                                <img class="svg signupTop" src="{{ asset('assets/backend/img/svg') }}/signuptop.svg"
                                    alt="img" />
                                <img class="svg signupBottom"
                                    src="{{ asset('assets/backend/img/svg') }}/signupbottom.svg" alt="img" />
                            </div>
                            <div class="signUP-admin-left__content">
                                <div
                                    class="text-capitalize mb-md-30 mb-15 d-flex align-items-center justify-content-md-start justify-content-center">
                                    <a class="wh-36 bg-primary text-white radius-md mr-10 content-center"
                                        href="index.html">a</a>
                                    <span class="text-dark">admin</span>
                                </div>
                                <h1>Bootstrap 4 React Web Application</h1>
                            </div>
                            <div class="signUP-admin-left__img">
                                <img class="img-fluid svg"
                                    src="{{ asset('assets/backend/img/svg') }}/signupIllustration.svg"
                                    alt="img" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-8">
                        <div class="signUp-admin-right  p-md-40 p-10">
                            <div
                                class="signUp-topbar d-flex align-items-center justify-content-md-end justify-content-center mt-md-0 mb-md-0 mt-20 mb-1">
                                <p class="mb-0">
                                    Already have an account?
                                    <a href="{{ route('frontend.login') }}" class="color-primary">
                                        Sign in
                                    </a>
                                </p>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-10 col-md-12 ">
                                    <div class="edit-profile mt-md-25 mt-0">
                                        <div class="card border-0">
                                            <div class="card-header border-0  pb-md-15 pb-10 pt-md-20 pt-10 ">
                                                <div class="edit-profile__title">
                                                    <h6>Sign up to <span class="color-primary">Admin</span></h6>
                                                </div>
                                            </div>
                                            <form action="{{ route('frontend.register.store') }}" method="post">
                                                @csrf
                                                <div class="card-body">
                                                    <div class="edit-profile__body">
                                                        <div class="form-group mb-20">
                                                            <label for="identity_type">Identity Type</label>
                                                            <select name="identity_type"
                                                                class="form-control @error('identity_type') is-invalid @enderror"
                                                                id="identitiy_type">
                                                                <option value="">pilih</option>
                                                                <option value="ktp">KTP</option>
                                                                <option value="sim">SIM</option>
                                                                <option value="passport">PASSPORT</option>
                                                            </select>
                                                            @error('identity_type')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <label for="identity_number">Identity Number</label>
                                                            <input type="text"
                                                                class="form-control @error('identity_number') is-invalid @enderror"
                                                                name="identity_number"
                                                                value="{{ old('identity_number') }}"
                                                                id="identity_number" placeholder="Identity Number">
                                                            @error('name')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <label for="name">Name</label>
                                                            <input type="text"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                name="name" value="{{ old('name') }}"
                                                                id="name" placeholder="Full Name">
                                                            @error('name')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <label for="gender">Gender</label>
                                                            <select name="gender" id="gender"
                                                                class="form-control @error('gender') is-invalid @enderror">
                                                                <option value="">pilih</option>
                                                                <option value="laki-laki">Laki Laki</option>
                                                                <option value="perempuan">Perempuan</option>
                                                            </select>
                                                            @error('gender')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <label for="place">Place of birthdate</label>
                                                            <input type="text"
                                                                class="form-control @error('place') is-invalid @enderror"
                                                                value="{{ old('place') }}" name="place"
                                                                id="place" placeholder="place">
                                                            @error('place')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <label for="birthdate">Birthdate</label>
                                                            <input type="date"
                                                                class="form-control @error('birthdate') is-invalid @enderror"
                                                                value="{{ old('birthdate') }}" name="birthdate"
                                                                id="birthdate" placeholder="birthdate">
                                                            @error('birthdate')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <label for="username">Username</label>
                                                            <input type="text"
                                                                class="form-control @error('username') is-invalid @enderror"
                                                                value="{{ old('username') }}" name="username"
                                                                id="username" placeholder="Username">
                                                            @error('username')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <label for="email">Email Adress</label>
                                                            <input type="text"
                                                                class="form-control @error('email') is-invalid @enderror"
                                                                name="email" value="{{ old('email') }}"
                                                                id="email" placeholder="name@example.com">
                                                            @error('email')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <label for="telp">Telp.</label>
                                                            <input type="text"
                                                                class="form-control @error('telp') is-invalid @enderror"
                                                                name="telp" value="{{ old('telp') }}"
                                                                id="telp" placeholder="082xxxxx">
                                                            @error('telp')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mb-15">
                                                            <label for="password-field">Password</label>
                                                            <div class="position-relative">
                                                                <input id="password-field" type="password"
                                                                    class="form-control @error('password') is-invalid @enderror"
                                                                    name="password" placeholder="Password">
                                                                @error('password')
                                                                    <div class="invalid-feedback">{{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-15">
                                                            <label for="password-field">Confirm Password</label>
                                                            <div class="position-relative">
                                                                <input id="password-field" type="password"
                                                                    class="form-control" name="password_confirmation"
                                                                    placeholder="Confirm Password">
                                                                <span
                                                                    class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <label for="picture">Picture</label>
                                                            <input type="file"
                                                                class="form-control @error('picture') is-invalid @enderror"
                                                                value="{{ old('picture') }}"
                                                                onchange="loadFile(event)">
                                                            <input type="hidden" name="picture" id="picture">
                                                            @error('picture')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <label for="address">Address</label>
                                                            <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror" cols="30"
                                                                rows="10"></textarea>
                                                            @error('address')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="signUp-condition">
                                                            <div class="checkbox-theme-default custom-checkbox ">
                                                                <input
                                                                    class="checkbox  @error('term') is-invalid @enderror"
                                                                    name="term" type="checkbox" id="check-1">
                                                                <label for="check-1">
                                                                    <span class="checkbox-text">Creating an account
                                                                        means
                                                                        you’re okay
                                                                        with our <a href="#"
                                                                            class="color-secondary">Terms of
                                                                            Service</a> and <a href="#"
                                                                            class="color-secondary">Privacy
                                                                            Policy</a>
                                                                        my preference</span>
                                                                </label>
                                                                @error('term')
                                                                    <span class="text-danger">Accept privacy and
                                                                        policy.</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                            <button type="submit"
                                                                class="btn btn-primary btn-default btn-squared mr-15 text-capitalize lh-normal px-50 py-15 signUp-createBtn signIn-createBtn">
                                                                Create Account
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </main>
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
    <div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>

    <!-- inject:js-->

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery/jquery-3.5.1.min.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery/jquery-ui.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/bootstrap/popper.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/bootstrap/bootstrap.min.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/moment/moment.min.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/accordion.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/autoComplete.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/Chart.min.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/charts.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/daterangepicker.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/drawer.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/dynamicBadge.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/dynamicCheckbox.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/feather.min.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/footable.min.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/fullcalendar@5.2.0.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/google-chart.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery-jvectormap-2.0.5.min.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery-jvectormap-world-mill-en.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery.countdown.min.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery.filterizr.min.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery.magnific-popup.min.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery.mCustomScrollbar.min.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery.peity.min.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery.star-rating-svg.min.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/leaflet.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/leaflet.markercluster.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/loader.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/message.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/moment.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/muuri.min.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/notification.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/popover.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/select2.full.min.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/slick.min.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/trumbowyg.min.js"></script>

    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/wickedpicker.min.js"></script>

    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/drag-drop.js"></script>

    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/footable.js"></script>

    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/full-calendar.js"></script>

    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/googlemap-init.js"></script>

    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/icon-loader.js"></script>

    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/jvectormap-init.js"></script>

    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/leaflet-init.js"></script>

    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/main.js"></script>
    <!-- endinject-->

    <script>
        const loadFile = function(event) {
            if (!event.target.files || !event.target.files[0]) return;
            const file = event.target.files;
            const fileName = file[0].name;
            const fileSize = file[0].size;
            const type = file[0].type.split('/')
            if (type[0] !== 'image') {
                $('#modal-info-error').modal('show');
                $("input[type='file']").val('')
            } else {
                const FR = new FileReader();
                FR.addEventListener("load", function(evt) {
                    const base64Data = evt.target.result
                    document.getElementById('picture').value = base64Data
                });
                FR.readAsDataURL(event.target.files[0]);
            }
        };
    </script>
</body>

</html>
