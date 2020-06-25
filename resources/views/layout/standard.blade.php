@extends('layout.master')

@section('content')

    {{-- Header bar--}}
    @include('layout.sections.header')

    {{-- Website main content --}}
    @yield('content')
@overwrite
