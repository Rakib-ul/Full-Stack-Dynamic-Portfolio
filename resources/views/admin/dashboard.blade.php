@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>

    <!-- KPIs -->
    <div class="row g-3">
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card kpi-card h-100">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <div class="text-muted small">Total Projects</div>
                        <div class="h3 mb-0">24</div>
                        <div class="text-success small"><i class="bi bi-arrow-up-right"></i> +3 this month</div>
                    </div>
                    <div class="icon bg-primary">
                        <i class="bi bi-kanban"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card kpi-card h-100">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <div class="text-muted small">Blog Posts</div>
                        <div class="h3 mb-0">18</div>
                        <div class="text-success small"><i class="bi bi-arrow-up-right"></i> +2 this month</div>
                    </div>
                    <div class="icon bg-success">
                        <i class="bi bi-journal-text"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card kpi-card h-100">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <div class="text-muted small">Messages</div>
                        <div class="h3 mb-0">57</div>
                        <div class="text-danger small"><i class="bi bi-arrow-down-right"></i> -4 this week</div>
                    </div>
                    <div class="icon bg-warning">
                        <i class="bi bi-envelope"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card kpi-card h-100">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <div class="text-muted small">Profile Views</div>
                        <div class="h3 mb-0">4,821</div>
                        <div class="text-success small"><i class="bi bi-arrow-up-right"></i> +12% vs last month</div>
                    </div>
                    <div class="icon bg-info">
                        <i class="bi bi-graph-up"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts and Recent -->
    <div class="row g-3 mt-1">
        <div class="col-12 col-xl-8">
            <div class="card h-100">
                <div class="card-header bg-white d-flex align-items-center justify-content-between">
                    <strong>Traffic Overview</strong>
                    <div class="btn-group btn-group-sm" role="group">
                        <button class="btn btn-outline-secondary active">30d</button>
                        <button class="btn btn-outline-secondary">90d</button>
                        <button class="btn btn-outline-secondary">1y</button>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="trafficChart" height="90"></canvas>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="card h-100">
                <div class="card-header bg-white">
                    <strong>Tech Stack Share</strong>
                </div>
                <div class="card-body">
                    <canvas id="stackChart" height="180"></canvas>
                    <div class="text-muted small mt-3">
                        Breakdown of technologies used across published projects.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tables -->
    <div class="row g-3 mt-1">
        <div class="col-12 col-xl-7">
            <div class="card h-100">
                <div class="card-header bg-white d-flex align-items-center justify-content-between">
                    <strong>Latest Projects</strong>
                    <a href="{{ url('admin/projects/create') }}" class="btn btn-sm btn-primary">
                        <i class="bi bi-plus-lg"></i> New Project
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="table-light">
                        <tr>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Updated</th>
                            <th class="text-end">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="fw-semibold">E-commerce Storefront</div>
                                <div class="text-muted small">Laravel, Livewire, Alpine</div>
                            </td>
                            <td><span class="badge bg-success-subtle text-success">Published</span></td>
                            <td><span class="text-muted small">2 days ago</span></td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-secondary"><i class="bi bi-eye"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="fw-semibold">Portfolio Revamp</div>
                                <div class="text-muted small">Laravel, Tailwind</div>
                            </td>
                            <td><span class="badge bg-warning-subtle text-warning">Draft</span></td>
                            <td><span class="text-muted small">5 hours ago</span></td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-secondary"><i class="bi bi-eye"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="fw-semibold">Blog Platform</div>
                                <div class="text-muted small">Laravel, Vue</div>
                            </td>
                            <td><span class="badge bg-info-subtle text-info">Scheduled</span></td>
                            <td><span class="text-muted small">1 week ago</span></td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-outline-secondary"><i class="bi bi-eye"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer bg-white">
                    <a href="{{ url('admin/projects') }}" class="btn btn-sm btn-outline-secondary">View all projects</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-5">
            <div class="card h-100">
                <div class="card-header bg-white d-flex align-items-center justify-content-between">
                    <strong>Recent Messages</strong>
                    <a href="{{ url('admin/messages') }}" class="btn btn-sm btn-outline-secondary">View all</a>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex align-items-start">
                        <div class="me-3">
                            <span class="badge rounded-pill text-bg-primary"><i class="bi bi-chat-left-text"></i></span>
                        </div>
                        <div class="flex-fill">
                            <div class="fw-semibold">Freelance Inquiry</div>
                            <div class="text-muted small">“Are you available for a Laravel project next month?”</div>
                        </div>
                        <div class="text-nowrap small text-muted">2h</div>
                    </li>
                    <li class="list-group-item d-flex align-items-start">
                        <div class="me-3">
                            <span class="badge rounded-pill text-bg-success"><i class="bi bi-envelope-open"></i></span>
                        </div>
                        <div class="flex-fill">
                            <div class="fw-semibold">Site Feedback</div>
                            <div class="text-muted small">“Love the new portfolio design!”</div>
                        </div>
                        <div class="text-nowrap small text-muted">1d</div>
                    </li>
                    <li class="list-group-item d-flex align-items-start">
                        <div class="me-3">
                            <span class="badge rounded-pill text-bg-warning"><i class="bi bi-bug"></i></span>
                        </div>
                        <div class="flex-fill">
                            <div class="fw-semibold">Bug Report</div>
                            <div class="text-muted small">“Project page image not loading on mobile.”</div>
                        </div>
                        <div class="text-nowrap small text-muted">3d</div>
                    </li>
                </ul>
                <div class="card-footer bg-white d-flex gap-2">
                    <a href="{{ url('admin/messages') }}" class="btn btn-sm btn-primary"><i class="bi bi-inbox"></i> Go to Inbox</a>
                    <a href="{{ url('admin/messages?filter=unread') }}" class="btn btn-sm btn-outline-secondary"><i class="bi bi-funnel"></i> Unread</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick actions -->
    <div class="row g-3 mt-1">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body d-flex flex-wrap align-items-center gap-2 gap-md-3">
                    <span class="fw-semibold me-2">Quick Actions:</span>
                    <a href="{{ url('admin/projects/create') }}" class="btn btn-dark btn-sm"><i class="bi bi-plus-lg"></i> Add Project</a>
                    <a href="{{ url('admin/blog/create') }}" class="btn btn-outline-dark btn-sm"><i class="bi bi-pencil-square"></i> Write Post</a>
                    <a href="{{ url('admin/skills') }}" class="btn btn-outline-dark btn-sm"><i class="bi bi-stars"></i> Update Skills</a>
                    <a href="{{ url('admin/settings') }}" class="btn btn-outline-dark btn-sm"><i class="bi bi-gear"></i> Settings</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Traffic line chart
        const tctx = document.getElementById('trafficChart');
        if (tctx) {
            new Chart(tctx, {
                type: 'line',
                data: {
                    labels: Array.from({length: 12}, (_, i) => `W${i+1}`),
                    datasets: [{
                        label: 'Views',
                        data: [210, 320, 280, 400, 520, 610, 480, 690, 720, 810, 760, 890],
                        fill: true,
                        borderColor: '#6366f1',
                        backgroundColor: 'rgba(99,102,241,0.12)',
                        tension: 0.35,
                        pointRadius: 3
                    }]
                },
                options: {
                    plugins: {
                        legend: { display: false },
                        tooltip: { mode: 'index', intersect: false }
                    },
                    scales: {
                        x: { grid: { display: false } },
                        y: { beginAtZero: true, grid: { color: '#eef0f3' } }
                    }
                }
            });
        }

        // Tech stack doughnut
        const sctx = document.getElementById('stackChart');
        if (sctx) {
            new Chart(sctx, {
                type: 'doughnut',
                data: {
                    labels: ['Laravel', 'Vue', 'React', 'Tailwind', 'Other'],
                    datasets: [{
                        data: [40, 18, 22, 12, 8],
                        backgroundColor: ['#ef4444','#22c55e','#3b82f6','#6366f1','#f59e0b'],
                        borderWidth: 0
                    }]
                },
                options: {
                    cutout: '65%',
                    plugins: {
                        legend: { position: 'bottom' }
                    }
                }
            });
        }
    });
</script>
@endpush