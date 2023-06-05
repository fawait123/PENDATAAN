<ul>
    <li>
        <div class="menu-title">DASHBOARDS</div>

        <ul>
            <li>
                <a href="{{ route('home') }}" class="{{ Request::is('home') ? 'active' : '' }}">
                    <div class="tooltip-item in-active" data-bs-toggle="tooltip" data-bs-placement="right" title=""
                        data-bs-original-title="Analytics" aria-label="Analytics"></div>

                    <span>
                        <span class="submenu-item-icon">
                            <i class="fa fa-tachometer-alt"></i>
                        </span>

                        <span>Dashbboard</span>
                    </span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <div class="menu-title">MASTER DATA</div>
        <ul>
            <li>
                <a href="{{ route('user.index') }}" class="{{ Request::is('user*') ? 'active' : '' }}">
                    <div class="tooltip-item in-active" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="" data-bs-original-title="E-Commerce" aria-label="User"></div>

                    <span>
                        <span class="submenu-item-icon">
                            <i class="fa fa-user"></i>
                        </span>

                        <span>User</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('ruang.index') }}" class="{{ Request::is('ruang*') ? 'active' : '' }}">
                    <div class="tooltip-item in-active" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="" data-bs-original-title="E-Commerce" aria-label="User"></div>

                    <span>
                        <span class="submenu-item-icon">
                            <i class="fa fa-person-booth"></i>
                        </span>

                        <span>Ruang</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('peminjam.index') }}" class="{{ Request::is('peminjam*') ? 'active' : '' }}">
                    <div class="tooltip-item in-active" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="" data-bs-original-title="E-Commerce" aria-label="User"></div>

                    <span>
                        <span class="submenu-item-icon">
                            <i class="fa fa-hands-helping"></i>
                        </span>

                        <span>Peminjam</span>
                    </span>
                </a>
            </li>
        </ul>
    </li>
</ul>
