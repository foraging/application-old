@extends('layout.master')

@section('content')

    {{-- Header bar--}}
    @include('layout.sections.header')

    {{-- Website main content --}}
    <div class="container">
        @yield('content')
    </div>
@overwrite
