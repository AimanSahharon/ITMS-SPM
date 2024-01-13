@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h1>Project Details</h1></div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Project ID</td>
                        <td>{{$project->ProjectID}}</td>
                    </tr>
                    <tr>
                        <td>Project Title</td>
                        <td>{{$project->Title}}</td>
                    </tr>
                    <tr>
                        <td>Person in Charge</td>
                        <td>{{$project->PIC}}</td>
                    </tr>
                    <tr>
                        <td>Start Date</td>
                        <td>{{$project->Start_Date}}</td>
                    </tr>
                    <tr>
                        <td>End Date</td>
                        <td>{{$project->End_Date}}</td>
                    </tr>
                    <tr>
                        <td>Duration</td>
                        <td>{{$project->Duration}}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>{{$project->Status}}</td>
                    </tr>
                    <tr>
                        <!-- ... (existing code) ... -->
                    <tr>
                        <td>Developers working on this Project</td>
                        <td>
                            <table class="table table-bordered">
                                @php($i=1)
                                <tr><th>No.</th><th>Developer ID</th><th>Name</th><th>Action</th></tr>
                                @foreach($project->developers as $d)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$d->DevID}}</td>
                                        <td>{{$d->Name}}</td>
                                        <td>
                                            <a href="{{ route('dropDeveloper', ['project_id' => $project->id, 'developer_id' => $d->id]) }}" class="btn btn-danger">Drop</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </td>
                    </tr>
                </table>

                <!-- Add Subjects Form -->
                <form action="{{ route('addToDeveloper', $project->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="developers">Select Developers:</label>
                        <select name="developers[]" class="form-control" multiple>
                            @foreach($allDevelopers as $developer)
                                <option value="{{ $developer->id }}">{{ $developer->Name }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{--<div class="text-center mt-2">
                        <button type="submit" class="btn btn-success">Add Developers</button>
                    </div> --}}
                    <button type="submit" class="btn btn-success">Add Developers</button>
                    <a class="btn btn-danger" href="{{route('dropAllDevelopers', $project->id)}}">Drop All</a>

                </form>

                <!-- Drop All Button -->
               {{-- <div class="text-center mt-3">
                <button type="submit" class="btn btn-success">Add Developers</button>
                <a class="btn btn-danger" href="{{route('dropAllDevelopers', $project->id)}}">Drop All</a>
                </div> --}}

            </div>
        </div>
        <div class="text-center mt-3">
            <a class="btn btn-warning " href="{{route('project.index')}}">Back</a>
            <a class="btn btn-primary" href="{{route('project.edit',$project->id)}}">Edit Details</a>
        </div>
    </div>
@endsection
