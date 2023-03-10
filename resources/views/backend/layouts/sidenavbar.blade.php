<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="{{route('dashboard')}}">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <span>Dashboard</span>
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-columns"></i>
                </div>
                Posts
                <div class="sb-sidenav-collapse-arrow">
                    <i class="fas fa-angle-down"></i>
                </div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('post.index')}}">Posts List</a>
                    <a class="nav-link" href="{{route('categorie.index')}}">Cagegorys List</a>
                    <a class="nav-link" href="{{route('tag.index')}}">Tags List</a>
                </nav>
            </div>


            <div class="sb-sidenav-menu-heading">Addons</div>
            <a class="nav-link" href="{{route('gs.show')}}">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-chart-area"></i>
                </div>
                Genaral Setting
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        {{Auth::user()->name}}
    </div>
</nav>