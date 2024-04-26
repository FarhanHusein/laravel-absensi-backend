<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">seinh31</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">31</a>
        </div>
        <ul class="sidebar-menu">

            <li class="nav-item  ">
                <a href="#"class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>

            <li class="nav-item  ">
                <a href="{{ route('users.index') }}"
                    class="nav-link "><i class="fas fa-columns"></i>
                    <span>Users</span></a>
            </li>

            <li class="nav-item">
                <a href="{{ route('companies.show', 1) }}" class="nav-link">
                    <i class="fas fa-columns"></i>
                    <span>Company</span>
                </a>
            </li>

    </aside>
</div>
