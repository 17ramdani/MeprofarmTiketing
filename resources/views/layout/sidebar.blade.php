<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('style/assets/images/mepro.jpg') }}" class="logo-icon br-3" alt="logo icon">
        </div>
        <div>
            <h3 class="logo-text">Meprofarm</h3>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="menu-label">Admin Pages</li>
        <li>
            <a href="{{ route('dashboard.index') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ route('tiketing.read') }}">
                <div class="parent-icon"><i class='bx bx-book'></i>
                </div>
                <div class="menu-title">Tiketing</div>
            </a>
        </li>
        <li>
            <a href="widgets.html">
                <div class="parent-icon"><i class='bx bx-chart'></i>
                </div>
                <div class="menu-title">Laporan </div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
