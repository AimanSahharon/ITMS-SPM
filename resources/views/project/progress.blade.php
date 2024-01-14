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
    <form method="POST" action="{{route('project.storeProgress', $project->id)}}">
        @csrf
        <div class="card mb-3">
            <div class="card-header">Add New Progress</div>
            <div class="card-body">
                <div class="form-group  row mb-3">
                    <label for="ReportID" class="col-sm-2 col-form-label">Report ID</label>
                    <div class="col-sm-10">
                        <input type="text" name="ReportID" class="form-control" id="ReportID" required>
                        @error('ReportID')
                        <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>

                <div class="form-group  row mb-3">
                    <label for="Date_Report" class="col-sm-2 col-form-label">Date Report</label>
                    <div class="col-sm-10">
                        <input type="date" name="Date_Report" class="form-control" id="Date_Report" required>
                        @error('Date_Report')
                        <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>

                <div class="form-group  row mb-3">
                    <label for="Status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <input type="text" name="Status" class="form-control" id="Status">
                        @error('Status')
                        <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>

                <div class="form-group  row mb-3">
                    <label for="Description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea type="text" name="Description" class="form-control" id="Description"></textarea>
                        @error('Description')
                        <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>



            </div>
        </div>
        <div class="text-center">
            <a class="btn btn-warning " href="{{route('project.index')}}">Back</a>
            <input class="btn btn-primary" type="submit" value="Submit">
        </div>
    </form>
</div>
@endsection

--}}

@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Progress for Project: {{ $project->Title }}</h1>
        {{--<a class="btn btn-primary" href="{{ route('project.index') }}">Back to Projects</a> --}}

        <!-- Display existing progress entries -->
        @foreach ($progress->sortByDesc('Date_Report') as $entry)
            <div>
                <p>Report ID: {{ $entry->ReportID }}</p>
                <p>Date of Report: {{ $entry->Date_Report }}</p>
                <p>Status: {{ $entry->Status }}</p>
                <p>Description: {{ $entry->Description }}</p>

                <div class='btn-group'>
                {{--<a href="{{ route('project.editProgress', ['project' => $project->id, 'progress' => $entry->id]) }}" class="btn btn-primary">Edit</a> --}}

                <form action="{{ route('project.deleteProgress', ['project' => $project->id, 'progress' => $entry->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </div>

                <hr>
            </div>
        @endforeach
        <div class="container">
            <form method="POST" action="{{route('project.storeProgress', $project->id)}}"> {{--class="sticky-form">--}}
                @csrf
                <div class="card mb-3">
                    <div class="card-header">Add New Progress</div>
                    <div class="card-body">
                        <div class="form-group  row mb-3">
                            <label for="ReportID" class="col-sm-2 col-form-label">Report ID</label>
                            <div class="col-sm-10">
                                <input type="text" name="ReportID" class="form-control" id="ReportID" required>
                                @error('ReportID')
                                <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group  row mb-3">
                            <label for="Date_Report" class="col-sm-2 col-form-label">Date Report</label>
                            <div class="col-sm-10">
                                <input type="date" name="Date_Report" class="form-control" id="Date_Report" required>
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
                                    <option value="Ahead of Schedule">Ahead of Schedule</option>
                                    <option value="On Schedule">On Schedule</option>
                                    <option value="Delayed">Delayed</option>
                                    <option value="Completed">Completed</option>
                                </select>
                                {{--<input type="text" name="Status" class="form-control" id="Status">
                                @error('Status')
                                <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                                @enderror --}}

                            </div>
                        </div>

                        <div class="form-group  row mb-3">
                            <label for="Description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="Description" class="form-control" id="Description"></textarea>
                                @error('Description')
                                <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>



                    </div>
                </div>
                <div class="text-center">
                    <a class="btn btn-warning " href="{{route('project.index')}}">Back</a>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </form>
        </div>
        {{--<style>
            .sticky-form {
                position: fixed;
                top: 45%;
                left: 30%;
                bottom:0;
                width: 50%;
                background-color: #f1f1f1;
                padding: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                z-index: 1000;
            }

             .container {
                margin-bottom: 420px; /* Adjust this margin to make space for the fixed form */
            }
        </style> --}}

    </div>
@endsection


