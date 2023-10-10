<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('accueil') }}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Accueil</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="briefcase"></i>
                        <span data-key="t-components">Rechercher</span>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('import') }}">
                            <i data-feather="home"></i>
                            <span data-key="t-dashboard">importer les données</span>
                        </a></li>
                        <li><a href="{{ route('search') }}">
                            <i data-feather="home"></i>
                            <span data-key="t-dashboard">liste des clients</span>
                        </a></li>
                    </ul>

                </li>

            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
