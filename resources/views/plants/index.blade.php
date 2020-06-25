@extends('layout.standard')

@section('title', 'Plants')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($plants as $plant)
                <div class="col-md-3">

                    {{-- Render a card for the plant --}}
                    <div class="card plant">

                        {{-- Image --}}
                        <img class="image" alt="Thumbnail for {{ $plant->name }}" title="{{ $plant->name }}" src="{{ $plant->image }}">

                        {{-- Content --}}
                        <div class="content">

                            {{-- Name --}}
                            <div class="title"><a href="{{ route('plants.read', $plant) }}">{{ $plant->name }}</a></div>

                            {{-- Scientific name --}}
                            <div class="subtitle">{{ $plant->scientific ?? 'Unknown' }}</div>

                            {{-- Description --}}
                            <div class="description">{{ Str::limit($plant->description, 100) }}</div>

                            {{-- Meta data --}}
                            <div class="meta">

                                {{-- Flags --}}
                                <div class="float-left">
                                    @include('plants.partials.flags')
                                </div>

                                {{-- Type--}}
                                <div class="type float-right {{ $plant->type }}"><a href="">{{ $plant->type }}</a></div>

                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection