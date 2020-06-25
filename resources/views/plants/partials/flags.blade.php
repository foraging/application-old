<div class="flags">

    {{-- Available in the spring? --}}
    @if ($plant->spring)
        <i title="This plant is available in the spring" class="flag spring yes fa fa-tree" aria-hidden="true"></i>
    @else
        <i title="This plant is not available in the spring" class="flag spring no fa fa-tree" aria-hidden="true"></i>
    @endif

    {{-- Available in the summer? --}}
    @if ($plant->summer)
        <i title="This plant is available in the summer" class="flag summer yes fa fa-sun" aria-hidden="true"></i>
    @else
        <i title="This plant is not available in the summer" class="flag summer no fa fa-sun" aria-hidden="true"></i>
    @endif

    {{-- Available in the autumn? --}}
    @if ($plant->autumn)
        <i title="This plant is available in the autumn" class="flag autumn yes fab fa-canadian-maple-leaf" aria-hidden="true"></i>
    @else
        <i title="This plant is not available in the autumn" class="flag autumn no fab fa-canadian-maple-leaf" aria-hidden="true"></i>
    @endif

    {{-- Available in the winter? --}}
    @if ($plant->winter)
        <i title="This plant is available in the winter" class="flag winter yes fa fa-snowflake" aria-hidden="true"></i>
    @else
        <i title="This plant is not available in the winter" class="flag winter no fa fa-snowflake" aria-hidden="true"></i>
    @endif

    {{-- Poisonous flag--}}
    @if ($plant->poisonous)
        <i title="This plant is poisonous" class="flag poisonous yes fas fa-skull" aria-hidden="true"></i>
    @else
        <i title="This plant is not poisonous" class="flag poisonous no fas fa-skull" aria-hidden="true"></i>
    @endif

    {{-- Edible flag--}}
    @if ($plant->edible)
        <i title="This plant is edible" class="flag edible yes fas fa-utensils" aria-hidden="true"></i>
    @else
        <i title="This plant is not edible" class="flag edible no fas fa-utensils" aria-hidden="true"></i>
    @endif


</div>