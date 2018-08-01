
<?php 
$currentRoute = Request::route()->getName();
//dd($currentRoute);
?>
<aside class="main-sidebar">

  <section class="sidebar">

    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>

      <li class="{{($currentRoute=='dashboard')?'active':''}}">
        <a href="{{route('dashboard')}}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li class="treeview">

        <a href="#">
          <i class="fa fa-users"></i> <span>User Management</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>

        <ul class="treeview-menu active">

          <li class="treeview">
            <a href=""> 
              <i class="fa fa-angle-double-right"></i> <span> Permissions </span> 
              <i class="fa fa-angle-right pull-right"></i>
            </a>
            <ul class="treeview-menu act">
              <li class="active">
                <a href="{{route('permission.add')}}">
                  <i class="fa fa-angle-double-right"></i>
                  <span>Permission Add</span>
                </a>
              </li>
              <li>
                <a href="{{route('permission.list')}}">
                  <i class="fa fa-angle-double-right"></i>
                  <span>Permission List</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="treeview">
            <a href=""> 
              <i class="fa fa-angle-double-right"></i> <span> Roles </span> 
              <i class="fa fa-angle-right pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="{{route('role.add')}}">
                  <i class="fa fa-angle-double-right"></i>
                  <span>Role Add</span>
                </a>
              </li>
              <li>
                <a href="{{route('role.list')}}">
                  <i class="fa fa-angle-double-right"></i>
                  <span>Role List</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="treeview">
            <a href=""> 
              <i class="fa fa-angle-double-right"></i> <span> Users </span> 
              <i class="fa fa-angle-right pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="{{route('user.add')}}">
                  <i class="fa fa-angle-double-right"></i>
                  <span>User Add</span>
                </a>
              </li>
              <li>
                <a href="{{route('user.list')}}">
                  <i class="fa fa-angle-double-right"></i>
                  <span>User List</span>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </li>
    </ul>
  </section>

</aside>
