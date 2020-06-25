@extends('layout.standard')

@section('title', $animal->name)

@section('content')
    <div class="container animals read">
        <div class="row">

            <div class="col-md-9">

                {{-- Summary --}}
                <div class="section animal summary">
                    <div class="title">{{ $animal->name }}</div>
                    <div class="subtitle">{{ $animal->scientific }}</div>
                    <div class="description">
                        <p>{{ $animal->description }}</p>
                        <div class="clearfix"></div>
                    </div>
                </div>

                {{-- Locations --}}
                <div class="section locations">
                    <div class="title">Known locations</div>
                    <div class="map">
                        <div id="map"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">

                {{-- Parks this can be found in --}}
                <div class="section animal trails">
                    <div class="title">Parks</div>
                    <div class="description">Below is a list of parks that this animal can be found in</div>
                    <ul>
                        @foreach ($animal->parks as $park)
                            <li><a href="{{ route('parks.read', $park) }}">{{ $park->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection