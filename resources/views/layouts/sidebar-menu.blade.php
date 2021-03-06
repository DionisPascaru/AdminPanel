<nav class="mt-2 left-menu">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
          <router-link to="/dashboard" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt blue"></i>
          <p>Dashboard</p>
        </router-link>
        <router-link to="/users" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt blue"></i>
          <p>Users</p>
        </router-link>
      </li>

{{--      @can('isAdmin')--}}
{{--        <li class="nav-item">--}}
{{--          <router-link to="/users" class="nav-link">--}}
{{--            <i class="fa fa-users nav-icon blue"></i>--}}
{{--            <p>Users</p>--}}
{{--          </router-link>--}}
{{--        </li>--}}
{{--      @endcan--}}

      <li class="nav-item">
        <a href="#" class="nav-link" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <p>
            {{ __('Logout') }}
          </p>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </li>
    </ul>
  </nav>
