<div class="sidebar">
    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Hizrian
                            <span class="user-level">Administrator</span>
                        </span>
                    </a>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Data Master</h4>
                </li>
                <li class="nav-item {{ request()->is('kriteria') ? 'active' : '' }}">
                    <a href="{{ route('criteria.index') }}">
                        <i class="fas fa-th-list"></i>
                        <p>Kriteria</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('pasien') ? 'active' : '' }}">
                    <a href="{{ route('user.index') }}">
                        <i class="fas fa-th-list"></i>
                        <p>Pasien</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('rumah-sakit') ? 'active' : '' }}">
                    <a href="{{ route('hospital.index') }}">
                        <i class="fas fa-th-list"></i>
                        <p>Rumah Sakit</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Hasil Rekomendasi</h4>
                </li>
                <li class="nav-item {{ request()->is('rekomendasi') ? 'active' : '' }}">
                    <a href="{{ route('recommendation.index') }}">
                        <i class="fas fa-th-list"></i>
                        <p>Perhitungan</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
