


<nav class="navbar">
    <ul class="navbar__menu">
      <li class="navbar__item">
        <a href="{{route('home')}}" class="navbar__link"><i data-feather="home"></i><span>Home</span></a>
      </li>
      <li class="navbar__item">
        <a href="{{route('create-post')}}" class="navbar__link"><i data-feather="message-square"></i><span>Post Query</span></a>
      </li>
      {{-- <li class="navbar__item">
        <a href="#" class="navbar__link"><i data-feather="users"></i><span>Customers</span></a>
      </li> --}}
      <li class="navbar__item">
        <a href="{{route('edit-profile')}}" class="navbar__link"><i data-feather="user"></i><span>Profile</span></a>
      </li>
      <li class="navbar__item">
        <a href="{{route('resolved-queries')}}" class="navbar__link"><i data-feather="archive"></i><span>Closed Queries</span></a>
      </li>
      <li class="navbar__item">
        <a href="{{route('logout')}}" class="navbar__link"><i data-feather="settings"></i><span>Logout</span></a>
      </li>
    </ul>
  </nav>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <script>
    feather.replace();
  </script>
