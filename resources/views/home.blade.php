@extends('layouts.app')

@section('content')
    @if (auth()->user()->role == 'admin')
        @include('card-admin')
    @else
        @include('card-retail')
    @endif
@endsection
