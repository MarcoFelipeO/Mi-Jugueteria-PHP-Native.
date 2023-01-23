<!-- Sidebar Nav -->
<aside id="sidebar" class="js-custom-scroll side-nav">
    <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
        <!-- Title -->
        <li class="sidebar-heading h6">Panel Principal</li>
        <!-- End Title -->

        <!-- Dashboard -->
        <li class="side-nav-menu-item active">
            
            <a class="side-nav-menu-link media align-items-center" href="<?php echo constant('URL'); ?>desk/">
              
                <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-dashboard"></i>
                </span>
                    
                <span class="side-nav-fadeout-on-closed media-body">Panel Principal</span>

            </a>
        </li>
        <!-- End Dashboard -->

        <!-- Title -->
        <li class="sidebar-heading h6">usuarios</li>
        <!-- End Title -->

        <!-- Users -->
        <li class="side-nav-menu-item side-nav-has-menu">
            
            <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subUsers">
                
                <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-user"></i>
                </span>

                <span class="side-nav-fadeout-on-closed media-body">Usuarios</span>

                <span class="side-nav-control-icon d-flex">
                    <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                </span>

                <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
            </a>

            <!-- Users: subUsers -->
            <ul id="subUsers" class="side-nav-menu side-nav-menu-second-level mb-0">
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link" href="<?php echo constant('URL'); ?>users/">
                        Lista de usuarios
                    </a>
                </li>
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link" href="<?php echo constant('URL'); ?>users/?Ins=Form-New-User">
                        Añadir usuario
                    </a>
                </li>
            </ul>
            <!-- End Users: subUsers -->

        </li>
        <!-- End Users -->

        <!-- Title -->
        <li class="sidebar-heading h6"><hr></li>
        <!-- End Title -->

        <!-- Zones -->
        <li class="side-nav-menu-item side-nav-has-menu">
            
            <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subTools">
                
                <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-pin-2"></i>
                </span>

                <span class="side-nav-fadeout-on-closed media-body">Zonas turisticas</span>

                <span class="side-nav-control-icon d-flex">
                    <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                </span>

                <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
            </a>

            <!-- Zones: subTools -->
            <ul id="subTools" class="side-nav-menu side-nav-menu-second-level mb-0">
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link" href="<?php echo constant('URL'); ?>zone/">
                        Lista de zonas
                    </a>
                </li>
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link" href="<?php echo constant('URL'); ?>zone/?Ins=Form-New-Zone">
                        Añadir zona
                    </a>
                </li>
            </ul>
            <!-- End Zones: subTools -->

        </li>
        <!-- End Zones -->

    </ul>
</aside>
<!-- End Sidebar Nav -->