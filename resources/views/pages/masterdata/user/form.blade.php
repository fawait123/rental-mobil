@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-30">
            <div class="card">
                <div class="card-body">
                    <form action="{{ isset($id) ? route('user.update', $user->id) : route('user.store') }}" method="post">
                        @csrf
                        @if (isset($id))
                            @method('put')
                        @endif
                        <div class="form-group mb-25">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                value="{{ isset($id) ? $user->name : old('name') }}" name="name" id="name"
                                placeholder="Name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-25">
                            <label for="email">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                value="{{ isset($id) ? $user->email : old('email') }}" name="email" id="email"
                                placeholder="Email">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-25">
                            <label for="username">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                value="{{ isset($id) ? $user->username : old('username') }}" name="username" id="username"
                                placeholder="Username">
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-25">
                            <label for="telp">Telp</label>
                            <input type="text" class="form-control @error('telp') is-invalid @enderror"
                                value="{{ isset($id) ? $user->telp : old('telp') }}" name="telp" id="telp"
                                placeholder="Telp">
                            @error('telp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-25">
                            <label for="is_active">Status</label>
                            <select name="is_active" id="is_active" class="form-control">
                                <option value="">pilih</option>
                                <option value="1"
                                    {{ (isset($id) ? ($user->is_active == 1 ? 'selected' : '') : old('is_active') == '1') ? 'selected' : '' }}>
                                    Active</option>
                                <option value="0"
                                    {{ (isset($id) ? ($user->is_active == 0 ? 'selected' : '') : old('is_active') == '0') ? 'selected' : '' }}>
                                    Inactive</option>
                            </select>
                            @error('is_active')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        @if (!isset($id))
                            <div class="form-group mb-25">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" id="password" placeholder="Password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-25">
                                <label for="password">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="password"
                                    placeholder="Password">
                            </div>
                        @endif
                        <div class="form-group mb-25">
                            <button user="submit"
                                class="btn btn-primary btn-lg">{{ isset($id) ? 'Update' : 'Create' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
