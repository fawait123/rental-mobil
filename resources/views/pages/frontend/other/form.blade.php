@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-30">
            <div class="card">
                <div class="card-body">
                    <form action="{{ isset($id) ? route('other.update', $other->id) : route('other.store') }}" method="post">
                        @csrf
                        @if (isset($id))
                            @method('put')
                        @endif
                        <div class="form-group mb-25">
                            <label for="name">Select item</label>
                            <select name="property_id" id="property_id"
                                class="form-control @error('property_id') is-invalid @enderror">
                                <option value="">pilih</option>
                                @foreach ($property as $item)
                                    <option value="{{ $item->id }}"
                                        {{ (isset($id) ? ($other->property_id == $item->id ? 'selected' : '') : old('property_id') == $item->id) ? 'selected' : '' }}>
                                        {{ $item->company->name . ' - ' . $item->car->name . ' - ' . $item->car->number_vehicles }}
                                    </option>
                                @endforeach
                            </select>
                            @error('property_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-25">
                            <label for="is_show">Is Show</label>
                            <select name="is_show" id="is_show"
                                class="form-control @error('is_show') is-invalid @enderror">
                                <option value="">pilih</option>
                                <option value="1"
                                    {{ (isset($id) ? ($other->is_show == '1' ? 'selected' : '') : old('is_show') == '1') ? 'selected' : '' }}>
                                    Yes</option>
                                <option value="0"
                                    {{ (isset($id) ? ($other->is_show == '0' ? 'selected' : '') : old('is_show') == '0') ? 'selected' : '' }}>
                                    No</option>
                            </select>
                            @error('is_show')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-25">
                            <button type="submit"
                                class="btn btn-primary btn-lg">{{ isset($id) ? 'Update' : 'Create' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
