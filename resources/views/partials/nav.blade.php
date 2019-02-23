<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home') }}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item {{ Request::route()->getName() == 'mountains.index' ? 'active' : null }}">
              <a class="nav-link" href="{{ route('mountains.index') }}">Mountains List<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ Request::route()->getName() == 'mountains.create' ? 'active' : null }}">
              <a class="nav-link" href="{{ route('mountains.create') }}">Create</a>
            </li>
            <li class="nav-item {{ Request::route()->getName() == 'mountains.update' ? 'active' : null }}">
              <a class="nav-link" href="#">Update</a>
            </li>
          </ul>
        </div>
      </nav>
