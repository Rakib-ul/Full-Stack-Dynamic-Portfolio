<footer class="footer">
    <div class="container-fluid py-3">
        <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between gap-2">
            <div class="text-muted small">
                © {{ date('Y') }} Your Name. All rights reserved.
            </div>
            <div class="small">
                <a href="{{ url('/') }}" class="text-decoration-none me-3">View Site</a>
                <a href="{{ url('admin/settings') }}" class="text-decoration-none me-3">Privacy</a>
                <a href="{{ url('admin/settings') }}" class="text-decoration-none">Terms</a>
            </div>
        </div>
    </div>
</footer>