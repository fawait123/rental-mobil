@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-30">
            <div class="card">
                <div class="card-body">
                    <form action="{{ isset($id) ? route('property.update', $property->id) : route('property.store') }}"
                        method="post" id="add-car">
                        @csrf
                        @if (isset($id))
                            @method('put')
                            <input type="hidden" name="car_id" value="{{ $property->car->id }}">
                        @endif
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                value="{{ isset($id) ? $property->car->name : old('name') }}" name="name"
                                placeholder="Name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="transmisi">Transmisi</label>
                            <select name="transmisi" id="transmisi"
                                class="form-control @error('transmisi') is-invalid @enderror" placeholder="Transmisi">
                                <option value="">pilih</option>
                                <option value="manual"
                                    {{ (isset($id) ? ($property->car->transmisi == 'manual' ? 'selected' : '') : old('transmisi') == 'manual') ? 'selected' : '' }}>
                                    Manual</option>
                                <option value="matic"
                                    {{ (isset($id) ? ($property->car->transmisi == 'matic' ? 'selected' : '') : old('transmisi') == 'matic') ? 'selected' : '' }}>
                                    Matic</option>
                            </select>
                            @error('transmisi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="transmisi">Fuel</label>
                            <select name="fuel" id="fuel" class="form-control @error('fuel') is-invalid @enderror"
                                placeholder="Fuel">
                                <option value="">pilih</option>
                                <option value="solar"
                                    {{ (isset($id) ? ($property->car->fuel == 'solar' ? 'selected' : '') : old('fuel') == 'solar') ? 'selected' : '' }}>
                                    Solar</option>
                                <option value="bensin"
                                    {{ (isset($id) ? ($property->car->fuel == 'bensin' ? 'selected' : '') : old('fuel') == 'bensin') ? 'selected' : '' }}>
                                    Bensin</option>
                            </select>
                            @error('fuel')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="transmisi">Seat Capacity</label>
                            <input type="text" class="form-control @error('seat_capacity') is-invalid @enderror"
                                value="{{ isset($id) ? $property->car->seat_capacity : old('seat_capacity') }}"
                                name="seat_capacity" placeholder="Seat Capacity">
                            @error('seat_capacity')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="transmisi">Color</label>
                            <input type="text" class="form-control @error('color') is-invalid @enderror" name="color"
                                value="{{ isset($id) ? $property->car->color : old('color') }}" placeholder="Color">
                            @error('color')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="transmisi">Number Vehicles</label>
                            <input type="text" class="form-control @error('number_vehicles') is-invalid @enderror"
                                value="{{ isset($id) ? $property->car->number_vehicles : old('number_vehicles') }}"
                                name="number_vehicles" placeholder="Number of Vihicles">
                            @error('number_vehicles')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="transmisi">Type</label>
                            <select name="type" id="type" class="form-control @error('type') is-invalid @enderror"
                                placeholder="Type">
                                <option value="">pilih</option>
                                @foreach ($type as $item)
                                    <option value="{{ $item->id }}"
                                        {{ (isset($id) ? ($item->id == $property->car->type_id ? 'selected' : '') : old('type') == $item->id) ? 'selected' : '' }}>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="transmisi">Brand</label>
                            <select name="brand" id="brand" class="form-control @error('brand') is-invalid @enderror"
                                placeholder="Brand">
                                <option value="">pilih</option>
                                @foreach ($brand as $item)
                                    <option value="{{ $item->id }}"
                                        {{ (isset($id) ? ($item->id == $property->car->brand_id ? 'selected' : '') : old('brand') == $item->id) ? 'selected' : '' }}>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('brand')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="transmisi">Picture</label>
                            <input type="file" class="form-control @error('picture') is-invalid @enderror" name="picture"
                                onchange="loadFile(event)">
                            @error('picture')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <input type="hidden" id="pictureConvert"
                                value="{{ isset($id) ? $property->car->picture : old('picture') }}" class="form-control"
                                name="picture">
                        </div>
                        <div class="form-group">
                            <label for="transmisi">Price</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"
                                placeholder="Price to show" value="{{ isset($id) ? $property->price : old('price') }}">
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
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
@endsection

@push('customjs')
    <script>
        const loadFile = function(event) {
            if (!event.target.files || !event.target.files[0]) return;
            const file = event.target.files;
            const type = file[0].type.split('/')
            if (type[0] !== 'image') {
                $('#modal-info-error').modal('show');
            } else {
                const FR = new FileReader();
                FR.addEventListener("load", function(evt) {
                    const base64Data = evt.target.result
                    console.log(base64Data)
                    document.getElementById('pictureConvert').value = base64Data
                });
                FR.readAsDataURL(event.target.files[0]);
            }
        };
    </script>
@endpush
