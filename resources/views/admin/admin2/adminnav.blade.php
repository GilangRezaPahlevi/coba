<nav class="navbar navbar-expand-lg navbar-light bg-dark shadow">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand text-light ms-2" href="/">Hidden brand</a>
      <ul class="navbar-nav  mb-2 mb-lg-0">      
      <div class="btn-group dropend">
          <button type="button" class="btn btn-outline-success" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-search"></i>
          </button>
        <ul class="dropdown-menu p-0" style="min-width: 20rem">
          <form class="d-flex">
            <button class="btn btn-outline-success" type="submit" name="search" placeholder="Search" aria-label="Search" style="display: none">Search</button>
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
          </form>
        </ul>
      </div>
    </ul>
    <h5 class="text-light position-absolute" style="right:2%;">Selamat Datang {{ auth()->user()->name }}</h5>
    </div>
  </div>
</nav>
 
 <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse" style="min-height: 800px">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column ">
          <li class="nav-item">
            <a class="nav-link text-light {{ Request::is('admin') ? 'active' : ''}}" aria-current="page" href="/admin/dashboard2">
              <i class="bi bi-shop"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light {{ Request::is('admin/mypost') ? 'active' : ''}}" href="/admin/mypost">
              <i class="bi bi-layout-text-window-reverse"></i>
              MyPost
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link text-light {{ Request::is('admin/mypost') ? 'active' : ''}}" href="/admin/mypost">
             <i class="bi bi-arrow-return-right"></i>
              Detail Post
            </a>
          </li> --}}
         <li class="nav-item">
            <a class="nav-link text-light {{ Request::is('admin/mypost/create') ? 'active' : ''}}" href="/admin/mypost/create">
              <i class="bi bi-plus-square"></i>
              New Post
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="bi bi-graph-up"></i>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/mypost">
              {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers" aria-hidden="true"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg> --}}
              <i class="bi bi-skip-start"></i>
              Dashboard 1
            </a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="post">
        <button class="nav-link border-0 bg-dark py-0 pe-0 pt-1" type="submit"><i class="bi bi-box-arrow-right"></i> Logout</button>
        {{-- <a class="nav-link px-3" href="https://getbootstrap.com/docs/5.0/examples/dashboard/#">Sign out</a> --}}
            </form>
          </li>
        </ul>
      </div>
    </nav>