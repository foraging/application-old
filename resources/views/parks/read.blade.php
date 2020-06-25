@extends('layout.standard')

@section('title', $park->getName())

@section('content')
    <div class="container parks read">
        <div class="row">

            <div class="col-md-9">

                {{-- Summary --}}
                <div class="section summary">
                    <div class="title">{{ $park->getName() }}</div>
                    <div class="description">{{ $park->getDescription() }}</div>
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

                {{-- Animals that can be found in this park --}}
                <div class="section park animals">
                    <div class="title">Animals</div>
                    <div class="description">Below is a list of animal known to be found in this park</div>
                    <ul>
                        @foreach ($park->getAnimals() as $animal)
                            <li><a href="{{ route('animals.read', $animal) }}">{{ $animal->getName() }}</a></li>
                        @endforeach
                    </ul>
                </div>

                {{-- Plants that can be found in this park --}}
                <div class="section park plants">
                    <div class="title">Plants</div>
                    <div class="description">Below is a list of plants known to be found in this park</div>
                    <ul>
                        @foreach ($park->getPlants() as $plant)
                            <li><a href="{{ route('plants.read', $plant) }}">{{ $plant->getName() }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection