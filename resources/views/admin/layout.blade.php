<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin') • Portfolio</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        :root{
            --sidebar-width: 280px;
        }
        html, body{
            height: 100%;
        }
        body{
            font-family: 'Inter', system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji","Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
            background: #f6f7fb;
        }
        .app{
            min-height: 100%;
            display: flex;
        }
        /* Sidebar */
        .app-sidebar{
            width: var(--sidebar-width);
            flex: 0 0 var(--sidebar-width);
            background: #101828;
            color: #e5e7eb;
            position: sticky;
            top: 0;
            height: 100vh;
            overflow-y: auto;
            box-shadow: 0 0 0 1px rgba(255,255,255,0.03) inset;
        }
        .app-sidebar .brand{
            display: flex; align-items: center; gap: .6rem;
            padding: 1.1rem 1.25rem;
            border-bottom: 1px solid rgba(255,255,255,0.06);
        }
        .app-sidebar .brand .logo{
            width: 36px; height: 36px; border-radius: 8px;
            background: linear-gradient(135deg,#6366f1,#22d3ee);
            display:flex; align-items:center; justify-content:center;
            color:#fff; font-weight:700;
        }
        .app-sidebar .nav-link{
            color: #cbd5e1;
            border-radius: .5rem;
            padding: .6rem .9rem;
            display: flex; align-items: center; gap: .7rem;
            font-weight: 500;
        }
        .app-sidebar .nav-link:hover{
            background: rgba(255,255,255,0.06);
            color: #fff;
        }
        .app-sidebar .nav-link.active{
            background: linear-gradient(90deg, rgba(99,102,241,0.18), rgba(34,211,238,0.18));
            color: #fff;
        }
        .app-sidebar .section-title{
            font-size: .75rem;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: #94a3b8;
            padding: 1rem 1.25rem .4rem;
        }

        /* Main */
        .app-main{
            flex: 1 1 auto;
            min-width: 0;
            display: flex;
            flex-direction: column;
        }
        .app-topbar{
            position: sticky; top: 0; z-index: 1030;
            background: #ffffff;
            border-bottom: 1px solid #eef0f3;
            padding: .65rem 1rem;
        }
        .topbar-search{
            max-width: 400px;
        }
        .app-content{
            padding: 1.25rem;
        }
        .footer{
            border-top: 1px solid #eef0f3;
            background: #ffffff;
        }

        /* Collapsed sidebar */
        body.sidebar-collapsed .app-sidebar{
            width: 84px; flex-basis: 84px;
        }
        body.sidebar-collapsed .app-sidebar .link-text{
            display: none;
        }
        body.sidebar-collapsed .app-content,
        body.sidebar-collapsed .app-topbar{
            padding-left: 0;
        }

        /* Cards */
        .kpi-card .icon{
            width: 44px; height: 44px;
            border-radius: 10px;
            display:flex; align-items:center; justify-content:center;
            color:#fff;
        }
        .card{
            border: 1px solid #eef0f3;
            border-radius: 14px;
        }

        @media (max-width: 992px){
            .app{ flex-direction: column; }
            .app-sidebar{ position: relative; height: auto; width: 100%; }
            body.sidebar-collapsed .app-sidebar{ width: 100%; }
        }
    </style>

    @stack('styles')
</head>
<body>
<div class="app">
    <!-- Sidebar -->
    @include('admin.components.sidebar')

    <!-- Main -->
    <div class="app-main">
        <!-- Topbar -->
        <header class="app-topbar">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-2">
                    <button id="sidebarToggle" class="btn btn-outline-secondary btn-sm">
                        <i class="bi bi-layout-sidebar-inset"></i>
                    </button>
                    <h1 class="h5 mb-0">@yield('title', 'Dashboard')</h1>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <form class="d-none d-md-block">
                        <div class="input-group topbar-search">
                            <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                            <input type="search" class="form-control" placeholder="Search…">
                        </div>
                    </form>
                    <div class="dropdown">
                        <button class="btn btn-light border rounded-pill px-3 d-flex align-items-center gap-2" data-bs-toggle="dropdown">
                            <img src="https://api.dicebear.com/7.x/identicon/svg?seed=md" alt="avatar" width="24" height="24" class="rounded-circle">
                            <span class="d-none d-sm-inline">Admin</span>
                            <i class="bi bi-chevron-down small"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><h6 class="dropdown-header">Signed in as</h6></li>
                            <li><span class="dropdown-item-text fw-semibold">admin@portfolio.local</span></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="#">
                                    @csrf
                                    <button class="dropdown-item text-danger"><i class="bi bi-box-arrow-right me-2"></i>Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <!-- Content -->
        <main class="app-content">
            @yield('content')
        </main>

        <!-- Footer -->
        @include('admin.components.footer')
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js" defer></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.getElementById('sidebarToggle');
        toggle?.addEventListener('click', () => {
            document.body.classList.toggle('sidebar-collapsed');
            localStorage.setItem('sidebar-collapsed', document.body.classList.contains('sidebar-collapsed') ? '1' : '0');
        });
        if (localStorage.getItem('sidebar-collapsed') === '1') {
            document.body.classList.add('sidebar-collapsed');
        }
    });
</script>

@stack('scripts')
</body>
</html>