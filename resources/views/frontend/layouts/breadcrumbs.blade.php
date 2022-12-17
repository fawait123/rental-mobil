@php
    $path = Request::path();
    $path = explode('/', $path);
@endphp
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title" style="text-transform: uppercase">{{ $path[0] }}</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('welcome') }}">Home</a></li>
                            @for ($i = 0; $i < count($path); $i++)
                                <li>{{ $path[$i] }}</li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->
