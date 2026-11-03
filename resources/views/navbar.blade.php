
<header class="bg-white border-bottom">
    <div class="container py-4 d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3">
        <div>
            <a href="{{ route('posts.index') }}" class="text-decoration-none">
                <p class="text-primary text-uppercase fw-semibold small mb-1">The Blog</p>
                <h1 class="h2 mb-0">Latest posts</h1>
            </a>
        </div>
        <div>
            <a href="{{ route('posts.create') }}" class="btn btn-primary px-4">Create a post</a>
            <a href="{{ route('posts.reports.index') }}" class="btn btn-outline-secondary">View Reports</a>
        </div>
    </div>
</header>
