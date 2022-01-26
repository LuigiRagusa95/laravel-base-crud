<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('comics.index') }}">Comics</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <button class="btn bg-primary  p-0 px-2">
                        <a class="nav-link p-1 px-2 text-light" href="{{ route('comics.create') }}">Add</a>
                    </button>
                </li>
            </ul>
        </div>
    </nav>
</header>