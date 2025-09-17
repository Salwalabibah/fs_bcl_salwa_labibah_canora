

<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="/dashboard"><img src="/assets/img/malang.png" width="25px" alt=""></a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="/dashboard"><img src="/assets/img/malang.png" width="25px" alt=""></a>
    </div>
    <ul class="sidebar-menu">
        <li class="nav-item dropdown {{ request()->is('armada') ? 'active' : '' }}">
            <a href="" class="nav-link has-dropdown"><i class="fas fa-car"></i>
                <span>Armada</span></a>
            <ul class="dropdown-menu">
                <li class="{{ request()->is('Armada') ? 'active' : '' }}"><a class="nav-link"
                        href="/armada">Armada</a></li>
            </ul>
        </li>
    </ul>
</aside>
