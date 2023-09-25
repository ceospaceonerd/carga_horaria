<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 sidebar">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 site-logo-container">
            <h3 class="text-center site-logo">SISCARGHO</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <ul class="menu">
                <?php $page = Request::segment(1); ?>
                <li class="menu-link {{ ($page == 'dashboard') ? 'active' : '' }}">
                    <a href="/dashboard"><span class="fa fa-dashboard"></span><span class="text">Tablero</span></a>
                </li>
                <li class="menu-link {{ ($page == 'rooms') ? 'active' : '' }}">
                    <a href="/rooms"><span class="fa fa-home"></span><span class="text">Grado</span></a>
                </li>
                <li class="menu-link {{ ($page == 'courses') ? 'active' : '' }}">
                    <a href="/courses"><span class="fa fa-book"></span><span class="text">Asignaturas</span></a>
                </li>
                <li class="menu-link {{ ($page == 'professors') ? 'active' : '' }}">
                    <a href="/professors"><span class="fa fa-graduation-cap"></span><span class="text">Docentes</span></a>
                </li>
                <li class="menu-link {{ ($page == 'classes') ? 'active' : '' }}">
                    <a href="/classes"><span class="fa fa-users"></span><span class="text">Classes</span></a>
                </li>
                <li class="menu-link {{ ($page == 'timeslots') ? 'active' : '' }}">
                    <a href="/timeslots"><span class="fa fa-clock-o"></span><span class="text">Periodos</span></a>
                </li>
                <li class="menu-link {{ ($page == 'my_account') ? 'active' : '' }}">
                    <a href="/my_account"><span class="fa fa-user"></span><span class="text">Mi Cuenta</span></a>
                </li>
                <li class="menu-link">
                    <a href="/logout"><span class="fa fa-sign-out"></span><span class="text">Salir del sistema</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>