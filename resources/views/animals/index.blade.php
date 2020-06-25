@extends('layout.standard')

@section('title', 'Animals')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($animals as $animal)
                <div class="col-md-3">

                    {{-- Render a card for the animal --}}
                    <div class="card animal">

                        {{-- Image --}}
                        <img class="image" alt="Thumbnail for {{ $animal->getName() }}" title="{{ $animal->getName() }}" src="{{ $animal->getImage() }}">

                        {{-- Content --}}
                        <div class="content">

                            {{-- Name --}}
                            <div class="title"><a href="{{ route('animals.read', $animal) }}">{{ $animal->name }}</a></div>

                            {{-- Scientific name --}}
                            <div class="subtitle">{{ $animal->getScientificName() ?? 'Unknown' }}</div>

                            {{-- Description --}}
                            <div class="description">{{ Str::limit($animal->getDescription(), 100) }}</div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection