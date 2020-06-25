@extends('layout.standard')

@section('title', 'Parks')

@section('content')
    <div class="container parks">
        <div class="row">
            @foreach($parks as $park)
                <div class="col-md-3">

                    {{-- Render a card for the park --}}
                    <div class="card park">
                        <img class="image" alt="Thumbnail for {{ $park->name }}" title="{{ $park->name }}" src="{{ $park->image }}">
                        <div class="content">
                            <p class="title"><a href="{{ route('parks.read', $park) }}">{{ $park->name }}</a></p>
                            <p class="description">{{ Str::limit($park->description, 100) }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">9 minutes ago</small>
                                <div class="btn-group">
                                    <a href="{{ route('parks.edit', $park) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection