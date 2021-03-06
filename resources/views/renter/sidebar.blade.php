<nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="{{asset('home')}}">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('create-room')}}">
                  <span data-feather="file"></span>
                  Add new Room / Apartament
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('rooms')}}">
                  <span data-feather="shopping-cart"></span>
                  All rooms / apartaments 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('settings')}}">
                  <span data-feather="users"></span>
                  Information settings
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('support-team')}}">
                  <span data-feather="users"></span>
                  Support Team and Admin
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('support-admin')}}">
                  <span data-feather="bar-chart-2"></span>
                  Support Admin
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('support-accounting')}}">
                  <span data-feather="layers"></span>
                  Support Accounting Management
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Reservation</span>
              <a class="d-flex align-items-center text-muted" href="">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="{{route('active-reservations')}}">
                  <span data-feather="file-text"></span>
                  Your confirmed reservations
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('dropped-reservations')}}">
                  <span data-feather="file-text"></span>
                  Dropped reservations
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>
          </div>
        </nav>