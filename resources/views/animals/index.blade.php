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
                        <img class="image" alt="Thumbnail for {{ $animal->name }}" title="{{ $animal->name }}" src="{{ $animal->image }}">

                        {{-- Content --}}
                        <div class="content">

                            {{-- Name --}}
                            <div class="title"><a href="{{ route('animals.read', $animal) }}">{{ $animal->name }}</a></div>

                            {{-- Scientific name --}}
                            <div class="subtitle">{{ $animal->scientific ?? 'Unknown' }}</div>

                            {{-- Description --}}
                            <div class="description">{{ Str::limit($animal->description, 100) }}</div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection