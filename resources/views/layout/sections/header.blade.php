<nav class="navbar navbar-expand-lg bg-primary">

    {{-- Title --}}
    <a class="navbar-brand" href="{{route('home')}}"><i class="fa fa-tree" aria-hidden="true"></i> {{ config('app.name') }}</a>

    {{-- Mobile button --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation-links" aria-controls="navigation-links" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    {{-- Navigation links --}}
    <div class="collapse navbar-collapse" id="navigation-links">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Parks <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Trails</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Plants</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Animals</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Groups</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Community</a>
            </li>
        </ul>

        {{-- Search form--}}
        <form class="form-inline my-2 my-lg-0">
            <div class="input-group">
                <input class="form-control" type="search" placeholder="Search">
                <div class="input-group-append">
                    <button class="btn btn-success" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>
</nav>