<!-- editProgress.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Progress for Project: {{ $project->Title }}</h1>
        <a class="btn btn-primary" href="{{ route('project.index') }}">Back to Projects</a>

        <!-- Display existing progress entry to edit -->
        <div>
            <form action="{{ route('project.updateProgress', ['project' => $project->id, 'progress' => $progress->id]) }}" method="post">
                @csrf
                @method('PATCH')
                <label for="ReportID">Report ID:</label>
                <input type="text" name="ReportID" value="{{ $progress->ReportID }}" required>
                <label for="Date_Report">Date of Report:</label>
                <input type="date" name="Date_Report" value="{{ $progress->Date_Report }}" required>
                <label for="Status">Status:</label>
                <input type="text" name="Status" value="{{ $progress->Status }}" required>
                <label for="Description">Description:</label>
                <textarea name="Description" required>{{ $progress->Description }}</textarea>
                <button type="submit" class="btn btn-primary">Update Progress</button>
            </form>
        </div>

        <!-- Back button -->
        <a class="btn btn-secondary mt-3" href="{{ route('project.progress', $project->id) }}">Back to Progress</a>
    </div>
@endsection
