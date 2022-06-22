<nav class="navbar navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="/pea">Percobaan Pertama</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        @auth
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Selamat Datang {{ auth()->user()->name }}</h5>
        @else
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Percobaam Pertama</h5>
        @endauth
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link " href="/pea">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pe">Bio Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/jel">Penulis Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/jenislist">Category Artikel</a>
          </li>

          @auth
          <li class="nav-item">
            <a class="nav-link" href="/admin">dashboard</a>
          </li>
          <li class="nav-item">
            <form action="logout" method="POST">
              @csrf
              <button class="nav-link" type="submit">Logout</button>
            </form>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          @endauth
         
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> --}}
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>