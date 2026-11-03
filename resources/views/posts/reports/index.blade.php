<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Blog Post Reports</title>

</head>

<body class="bg-light">
    @include('navbar')
    <div class="card col-md-8 mx-auto my-4 shadow-sm justify-content-center">
        <div class="card-body text-center">
            <h1 class="h2">Blog Post Reports</h1>
            <p class="text-secondary">Filter your blog posts and download a PDF or CSV report.</p>
            @if ($errors->any())
                <div class="alert alert-danger text-start">
                    <strong>Please correct the following:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('posts.reports.index') }}" method="GET" class="bg-light rounded p-3">
                <div class="d-flex flex-wrap justify-content-center align-items-end gap-3">
                    <div class="text-start">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input class="form-control" type="date" id="start_date" name="start_date" value="{{ old('start_date', $startDate) }}">
                    </div>
                    <div class="text-start">
                        <label for="end_date" class="form-label">End Date</label>
                        <input class="form-control" type="date" id="end_date" name="end_date" value="{{ old('end_date', $endDate) }}">
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Generate Report</button>
                        <a href="{{ route('posts.reports.index') }}" class="btn btn-outline-secondary">
                            Reset Filters
                        </a>
                    </div>
                </div>
            </form>
            <p>
                <strong>Period:</strong>
                {{ $startDate ?: 'Beginning' }}
                to
                {{ $endDate ?: 'Present' }}
            </p>
        </div>
    </div>

    <div class="card col-md-8 mx-auto my-4 shadow-sm">
        <div class="card-body">
            <h2>Total Posts: {{ $totalPosts }}</h2>
            <div class="actions">
                <a class="btn btn-primary"
                    href="{{ route('posts.reports.pdf', [
                        'start_date' => $startDate,
                        'end_date' => $endDate,
                    ]) }}">
                    Export PDF
                </a>
                <a class="btn btn-success"
                    href="{{ route('posts.reports.csv', [
                        'start_date' => $startDate,
                        'end_date' => $endDate,
                    ]) }}">
                    Export CSV
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Body Preview</th>
                            <th>Created Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($post->body, 100) }}</td>
                                <td>{{ $post->created_at->format('M d, Y') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No posts found for the selected dates.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white">
            <a href="{{ route('posts.index') }}" class="text-decoration-none">Back to Blog Posts</a>
        </div>
    </div>


</body>

</html>
