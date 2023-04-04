<div>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="../../dist/img/Polinema.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 1">
            <span class="brand-text font-weight-light">Bryan Tosin Saputro/09</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-4">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="{{Route('profile')}}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Profile Page
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{Route('bayis.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-database"></i>
                            <p>
                                Data Posyandu Bayi
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</div>
