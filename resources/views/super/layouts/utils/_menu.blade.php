<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('assets/super/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
      </div>
    </div>

    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU</li>

      <li class="{{ is_active('super.dashboard.*') ? 'active' : '' }}"><a href="{{ route('super.dashboard.index') }}"><i
            class="fa fa-dashboard"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="{{ is_active('super.blog.*') ? 'active' : '' }}"><a href="{{ route('super.blog.index') }}"><i
            class="fa fa-commenting-o"></i> <span>Blog</span></a></li>
      
     

    </ul>
  </section>
</aside>
