<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Twitter API</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link @if(Route::current()->getName() == 'home') active @endif" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <li class="nav-item dropdown">
            <a href="/timelines" class="nav-link @if(Route::current()->getName() == 'timelines') active @endif">Timelines</a>
          </li>
        </li>
        <li class="nav-item dropdown">
          <li class="nav-item dropdown">
            <a href="/users-lookup" class="nav-link @if(Route::current()->getName() == 'users-lookup') active @endif">Users Lookup</a>
          </li>
        </li>
        <li class="nav-item dropdown">
          <a href="/search-tweets" class="nav-link @if(Route::current()->getName() == 'search-tweets') active @endif">Search Tweets</a>
        </li>
      </ul>
    </div>
  </div>
</nav>