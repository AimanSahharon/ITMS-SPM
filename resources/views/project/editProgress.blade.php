<!-- editProgress.blade.php -->
{{--@extends('layouts.app')

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
--------------------------------------------------------------------------------------------------------------------------------------}}



{{--
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Progress for Project: {{ $project->Title }}</h1>
        <a class="btn btn-primary" href="{{ route('project.index') }}">Back to Projects</a>

        <!-- Display existing progress entries -->
        @foreach ($progress->get()->sortByDesc('Date_Report') as $entry)
            <div>
                <p>Report ID: {{ $entry->ReportID }}</p>
                <p>Date of Report: {{ $entry->Date_Report }}</p>
                <p>Status: {{ $entry->Status }}</p>
                <p>Description: {{ $entry->Description }}</p>

                <!-- Edit and delete buttons -->
                <div class="btn-group">
                    <a href="{{ route('project.editProgress', ['project' => $project->id, 'progress_id' => $entry->id]) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('project.deleteProgress', ['project' => $project->id, 'progress' => $entry->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Confirm DELETE?')">Delete</button>
                    </form>
                </div>
                <hr>
            </div>
        @endforeach

        <!-- Edit form -->
        @if(isset($editProgress))
            <form action="{{ route('project.updateProgress', ['project' => $project->id, 'progress' => $editProgress->id]) }}" method="post">
                @csrf
                @method('PATCH')

                <div class="card mb-3">
                    <div class="card-header">Edit Progress</div>
                    <div class="card-body">
                        <div class="form-group  row mb-3">
                            <label for="ReportID" class="col-sm-2 col-form-label">Report ID</label>
                            <div class="col-sm-10">
                                <input type="text" name="ReportID" class="form-control" id="ReportID" value="{{ $editProgress->ReportID }}" required>
                                @error('ReportID')
                                <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group  row mb-3">
                            <label for="Date_Report" class="col-sm-2 col-form-label">Date Report</label>
                            <div class="col-sm-10">
                                <input type="date" name="Date_Report" class="form-control" id="Date_Report" value="{{ $editProgress->Date_Report }}" required>
                                @error('Date_Report')
                                <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group  row mb-3">
                            <label for="Status" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select name="Status" class="form-control" id="Status" required>
                                    <option value="" selected disabled>-- Please Select Status --</option>
                                    <option value="Ahead of Schedule" {{ $editProgress->Status == 'Ahead of Schedule' ? 'selected' : '' }}>Ahead of Schedule</option>
                                    <option value="On Schedule" {{ $editProgress->Status == 'On Schedule' ? 'selected' : '' }}>On Schedule</option>
                                    <option value="Delayed" {{ $editProgress->Status == 'Delayed' ? 'selected' : '' }}>Delayed</option>
                                    <option value="Completed" {{ $editProgress->Status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group  row mb-3">
                            <label for="Description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="Description" class="form-control" id="Description" required>{{ $editProgress->Description }}</textarea>
                                @error('Description')
                                <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update Progress</button>
                </div>
            </form>
        @endif

        <!-- Form to add new progress entry -->
        <form action="{{ route('project.storeProgress', $project->id) }}" method="post">
            @csrf
            <label for="ReportID">Report ID:</label>
            <input type="text" name="ReportID" required>
            <label for="Date_Report">Date of Report:</label>
            <input type="date" name="Date_Report" required>

@endsection --}}

@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Progress for Project: {{ $project->Title }}</h1>

        <!-- Edit form -->
        @if(isset($editProgress))
            <form action="{{ route('project.updateProgress', ['project_id' => $project->id, 'progress_id' => $editProgress->id]) }}" method="post">
                @csrf
                @method('PATCH')

                <div class="card mb-3">
                    <div class="card-header">Edit Progress</div>
                    <div class="card-body">
                        <div class="form-group  row mb-3">
                            <label for="ReportID" class="col-sm-2 col-form-label">Report ID</label>
                            <div class="col-sm-10">
                                <input type="text" name="ReportID" class="form-control" id="ReportID" value="{{ $editProgress->ReportID }}" required>
                                @error('ReportID')
                                <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group  row mb-3">
                            <label for="Date_Report" class="col-sm-2 col-form-label">Date Report</label>
                            <div class="col-sm-10">
                                <input type="date" name="Date_Report" class="form-control" id="Date_Report" value="{{ $editProgress->Date_Report }}" required>
                                @error('Date_Report')
                                <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group  row mb-3">
                            <label for="Status" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select name="Status" class="form-control" id="Status" required>
                                    <option value="" selected disabled>-- Please Select Status --</option>
                                    <option value="Ahead of Schedule" {{ $editProgress->Status == 'Ahead of Schedule' ? 'selected' : '' }}>Ahead of Schedule</option>
                                    <option value="On Schedule" {{ $editProgress->Status == 'On Schedule' ? 'selected' : '' }}>On Schedule</option>
                                    <option value="Delayed" {{ $editProgress->Status == 'Delayed' ? 'selected' : '' }}>Delayed</option>
                                    <option value="Completed" {{ $editProgress->Status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group  row mb-3">
                            <label for="Description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="Description" class="form-control" id="Description" required>{{ $editProgress->Description }}</textarea>
                                @error('Description')
                                <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update Progress</button>
                </div>
            </form>
        @endif

        <!-- Form to add new progress entry -->
        <form action="{{ route('project.storeProgress', $project->id) }}" method="post">
            @csrf
            <label for="ReportID">Report ID:</label>
            <input type="text" name="ReportID" required>
            <label for="Date_Report">Date of Report:</label>
            <input type="date" name="Date_Report" required>

@endsection
