<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>

    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard </li>
        <li class=" active">
            <a href="#" class="nav-link"><i class="fas fa-fire"></i>Dashboard</a>
        </li>
        <li class="menu-header">Menu Utama</li>
        <li class="active">
            <a class="nav-link" href="{{ route('fakultas.index') }}"><i class="fas fa-square"></i>
                <span>Data Fakultas</span></a>
        </li>
        <li class="active">
            <a class="nav-link" href="{{ route('fakultas.index') }}"><i class="fas fa-square"></i>
                <span>Data Jurusan</span></a>
        </li>
        <li class="active">
            <a class="nav-link" href="{{ route('dosen.index') }}"><i class="fas fa-square"></i>
                <span>Data Dosen</span></a>
        </li>

    </ul>

</aside>
