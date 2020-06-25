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
                        <img class="image" alt="Thumbnail for {{ $plant->getName() }}" title="{{ $plant->getName() }}" src="{{ $plant->getImage() }}">

                        {{-- Content --}}
                        <div class="content">

                            {{-- Name --}}
                            <div class="title"><a href="{{ route('plants.read', $plant) }}">{{ $plant->getName() }}</a></div>

                            {{-- Scientific name --}}
                            <div class="subtitle">{{ $plant->getScientificName() ?? 'Unknown' }}</div>

                            {{-- Description --}}
                            <div class="description">{{ Str::limit($plant->getDescription(), 100) }}</div>

                            {{-- Meta data --}}
                            <div class="meta">

                                {{-- Flags --}}
                                <div class="float-left">
                                    @include('plants.partials.flags')
                                </div>

                                {{-- Type--}}
                                <div class="type float-right {{ $plant->getType() }}"><a href="">{{ $plant->getType() }}</a></div>

                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection