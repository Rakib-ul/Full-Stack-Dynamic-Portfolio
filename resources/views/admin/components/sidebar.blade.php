<aside class="app-sidebar">
    <div class="brand">
        <div class="logo">P</div>
        <div class="d-flex flex-column">
            <strong>Portfolio Admin</strong>
            <small class="text-secondary">Laravel Dashboard</small>
        </div>
    </div>

    <nav class="p-3 pt-2">
        <div class="section-title">Main</div>
        <ul class="nav flex-column gap-1">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin') || request()->is('admin/dashboard') ? 'active' : '' }}"
                   href="{{ url('admin/dashboard') }}">
                    <i class="bi bi-speedometer2"></i>
                    <span class="link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/projects*') ? 'active' : '' }}"
                   href="{{ url('admin/projects') }}">
                    <i class="bi bi-kanban"></i>
                    <span class="link-text">Projects</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/skills*') ? 'active' : '' }}"
                   href="{{ url('admin/skills') }}">
                    <i class="bi bi-stars"></i>
                    <span class="link-text">Skills</span>
                </a>
            </li>
        </ul>

        <div class="section-title">Content</div>
        <ul class="nav flex-column gap-1">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/blog*') ? 'active' : '' }}"
                   href="{{ url('admin/blog') }}">
                    <i class="bi bi-journal-text"></i>
                    <span class="link-text">Blog</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/messages*') ? 'active' : '' }}"
                   href="{{ url('admin/messages') }}">
                    <i class="bi bi-envelope"></i>
                    <span class="link-text">Messages</span>
                </a>
            </li>
        </ul>

        <div class="section-title">System</div>
        <ul class="nav flex-column gap-1">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}"
                   href="{{ url('admin/users') }}">
                    <i class="bi bi-people"></i>
                    <span class="link-text">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/settings*') ? 'active' : '' }}"
                   href="{{ url('admin/settings') }}">
                    <i class="bi bi-gear"></i>
                    <span class="link-text">Settings</span>
                </a>
            </li>
        </ul>

        <hr class="border-secondary my-3 opacity-25">
        <div class="small text-secondary px-2">
            <i class="bi bi-lightning-charge-fill text-warning"></i>
            <span class="ms-1">Tip: Use the toggle in the topbar to collapse the sidebar.</span>
        </div>
    </nav>
</aside>