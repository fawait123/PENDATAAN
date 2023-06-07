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
                <a href="{{ route('peminjam.index') }}"
                    class="{{ Request::is('peminjam') || Request::is('peminjam/*') ? 'active' : '' }}">
                    <div class="tooltip-item in-active" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="" data-bs-original-title="E-Commerce" aria-label="User"></div>

                    <span>
                        <span class="submenu-item-icon">
                            <i class="fa fa-hands-helping"></i>
                        </span>

                        <span>Peminjam</span>
                    </span>
                </a>
            <li>
                <a href="{{ route('asalAset.index') }}" class="{{ Request::is('asalAset*') ? 'active' : '' }}">
                    <div class="tooltip-item in-active" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="" data-bs-original-title="E-Commerce" aria-label="User"></div>

                    <span>
                        <span class="submenu-item-icon">
                            <i class="fa fa-warehouse"></i>
                        </span>

                        <span>Asal Aset</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('jenisAset.index') }}" class="{{ Request::is('jenisAset*') ? 'active' : '' }}">
                    <div class="tooltip-item in-active" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="" data-bs-original-title="E-Commerce" aria-label="User"></div>

                    <span>
                        <span class="submenu-item-icon">
                            <i class="fa fa-umbrella"></i>
                        </span>

                        <span>Jenis Aset</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('aset.index') }}" class="{{ Request::is('aset*') ? 'active' : '' }}">
                    <div class="tooltip-item in-active" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="" data-bs-original-title="E-Commerce" aria-label="User"></div>

                    <span>
                        <span class="submenu-item-icon">
                            <i class="fa fa-tv"></i>
                        </span>

                        <span>Aset</span>
                    </span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <div class="menu-title">TRANSAKSI</div>

        <ul>
            <li>
                <a href="{{ route('peminjaman.index') }}" class="{{ Request::is('peminjaman*') ? 'active' : '' }}">
                    <div class="tooltip-item in-active" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="" data-bs-original-title="Analytics" aria-label="Analytics"></div>

                    <span>
                        <span class="submenu-item-icon">
                            <i class="fa fa-marker"></i>
                        </span>

                        <span>Peminjaman</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('pengembalian.index') }}"
                    class="{{ Request::is('pengembalian*') ? 'active' : '' }}">
                    <div class="tooltip-item in-active" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="" data-bs-original-title="Analytics" aria-label="Analytics"></div>

                    <span>
                        <span class="submenu-item-icon">
                            <i class="fa fa-book"></i>
                        </span>

                        <span>Pengembalian</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('penghapusan.index') }}" class="{{ Request::is('penghapusan*') ? 'active' : '' }}">
                    <div class="tooltip-item in-active" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="" data-bs-original-title="Analytics" aria-label="Analytics"></div>

                    <span>
                        <span class="submenu-item-icon">
                            <i class="fa fa-trash-alt"></i>
                        </span>

                        <span>Penghapusan</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('mutasi.index') }}" class="{{ Request::is('mutasi*') ? 'active' : '' }}">
                    <div class="tooltip-item in-active" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="" data-bs-original-title="Analytics" aria-label="Analytics"></div>

                    <span>
                        <span class="submenu-item-icon">
                            <i class="fa fa-bus"></i>
                        </span>

                        <span>Mutasi</span>
                    </span>
                </a>
            </li>
        </ul>
    </li>
</ul>
