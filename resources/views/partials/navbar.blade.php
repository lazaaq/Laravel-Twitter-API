<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Twitter API</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/tweet-lookup" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tweet Lookup
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/tweet-lookup#single">Single Tweet</a></li>
            <li><a class="dropdown-item" href="/tweet-lookup#multiple">Multiple Tweets</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/users-lookup" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Users Lookup
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/users-lookup#byId">User By ID</a></li>
            <li><a class="dropdown-item" href="/users-lookup#byIds">Users By ID</a></li>
            <li><a class="dropdown-item" href="/users-lookup#byUsername">User By Username</a></li>
            <li><a class="dropdown-item" href="/users-lookup#byUsernames">Users By Username</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/manage-tweets" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Manage Tweets
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/manage-tweets#create">Create a Tweet</a></li>
            <li><a class="dropdown-item" href="/manage-tweets#delete">Delete a Tweet</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>