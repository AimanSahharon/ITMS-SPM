<!-- progress.blade.php -->
{{--@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Progress for Project: {{ $project->Title }}</h1>
        <a class="btn btn-primary" href="{{ route('project.index') }}">Back to Projects</a>

        <!-- Display existing progress entries -->
        @foreach ($progress as $entry)
            <div>
                <p>Report ID: {{ $entry->ReportID }}</p>
                <p>Date of Report: {{ $entry->Date_Report }}</p>
                <p>Status: {{ $entry->Status }}</p>
                <p>Description: {{ $entry->Description }}</p>
                <!-- Add edit and delete links here if needed -->
                <hr>
            </div>
        @endforeach

        <!-- Form to add new progress entry -->
        <form action="{{ route('project.storeProgress', $project->id) }}" method="post">
            @csrf
            <label for="ReportID">Report ID:</label>
            <input type="text" name="ReportID" required>
            <label for="Date_Report">Date of Report:</label>
            <input type="date" name="Date_Report" required>
            <label for="Status">Status:</label>
            <input type="text" name="Status" required>
            <label for="Description">Description:</label>
            <textarea name="Description" required></textarea>
            <button type="submit">Submit Progress</button>
        </form>
    </div>
@endsection

--}}


{{--
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Progress for Project: {{ $project->Title }}</h1>
        <a class="btn btn-primary" href="{{ route('project.index') }}">Back to Projects</a>

        <!-- Display existing progress entries -->
        @foreach ($progress->sortByDesc('Date_Report') as $entry)
            <div>
                <p>Report ID: {{ $entry->ReportID }}</p>
                <p>Date of Report: {{ $entry->Date_Report }}</p>
                <p>Status: {{ $entry->Status }}</p>
                <p>Description: {{ $entry->Description }}</p>
                <!-- Add edit and delete buttons here -->
                <div class="btn-group">
                    <a href="{{ route('project.editProgress', ['project_id' => $project->id, 'progress_id' => $entry->id]) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('project.deleteProgress', ['project' => $project->id, 'progress' => $entry->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </div>
                <hr>
            </div>
        @endforeach

        <!-- Form to add new progress entry -->
        <form action="{{ route('project.storeProgress', $project->id) }}" method="post">
            @csrf
            <label for="ReportID">Report ID:</label>
            <input type="text" name="ReportID" required>
            <label for="Date_Report">Date of Report:</label>
            <input type="date" name="Date_Report" required>
            <label for="Status">Status:</label>
            <input type="text" name="Status" required>
            <label for="Description">Description:</label>
            <textarea name="Description" required></textarea>
            <button type="submit">Submit Progress</button>
        </form>

        <!-- Back button -->
        <a class="btn btn-secondary mt-3" href="{{ route('project.show', $project->id) }}">Back to Project Details</a>
    </div>
@endsection --}}

<!-- progress.blade.php -->
{{--
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Progress for Project: {{ $project->Title }}</h1>
        <a class="btn btn-primary" href="{{ route('project.index') }}">Back to Projects</a>

        <!-- Display existing progress entries -->
        @foreach ($progress as $entry)
            <div>
                <p>Report ID: {{ $entry->ReportID }}</p>
                <p>Date of Report: {{ $entry->Date_Report }}</p>
                <p>Status: {{ $entry->Status }}</p>
                <p>Description: {{ $entry->Description }}</p>
                <!-- Add edit and delete buttons here -->
                <div class="btn-group">
                    <a href="{{ route('project.editProgress', ['project_id' => $project->id, 'progress_id' => $entry->id]) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('project.deleteProgress', ['project_id' => $project->id, 'progress_id' => $entry->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Confirm DELETE?')">Delete</button>
                    </form>
                </div>
                <hr>
            </div>
        @endforeach

        <!-- Form to add new progress entry -->
        <form action="{{ route('project.storeProgress', $project->id) }}" method="post">
            @csrf
            <label for="ReportID">Report ID:</label>
            <input type="text" name="ReportID" required>
            <label for="Date_Report">Date of Report:</label>
            <input type="date" name="Date_Report" required>
            <label for="Status">Status:</label>
            <input type="text" name="Status" required>
            <label for="Description">Description:</label>
            <textarea name="Description" required></textarea>
            <button type="submit">Submit Progress</button>
        </form>

        <!-- Back button -->
        <a class="btn btn-secondary mt-3" href="{{ route('project.show', $project->id) }}">Back to Project Details</a>
    </div>
@endsection
--}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Progress for Project: {{ $project->Title }}</h1>
        <a class="btn btn-primary" href="{{ route('project.index') }}">Back to Projects</a>

        <!-- Display existing progress entries -->
        @foreach ($progress->sortByDesc('Date_Report') as $entry)
            <div>
                <p>Report ID: {{ $entry->ReportID }}</p>
                <p>Date of Report: {{ $entry->Date_Report }}</p>
                <p>Status: {{ $entry->Status }}</p>
                <p>Description: {{ $entry->Description }}</p>
                <!-- Add edit and delete links here if needed -->
                <hr>
            </div>
        @endforeach

        <!-- Form to add new progress entry -->
        <form action="{{ route('project.storeProgress', $project->id) }}" method="post">
            @csrf
            <label for="ReportID">Report ID:</label>
            <input type="text" name="ReportID" required>
            <label for="Date_Report">Date of Report:</label>
            <input type="date" name="Date_Report" required>
            <label for="Status">Status:</label>
            <input type="text" name="Status" required>
            <label for="Description">Description:</label>
            <textarea name="Description" required></textarea>
            <button type="submit">Submit Progress</button>
        </form>
    </div>
@endsection
