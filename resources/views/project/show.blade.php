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
                        <td>Methodology</td>
                        <td>{{$project->Methodology}}</td>
                    </tr>
                    <tr>
                        <td>System Platform</td>
                        <td>{{$project->System_Platform}}</td>
                    </tr>
                    <tr>
                        <td>Deployment Type</td>
                        <td>{{$project->Deployment_Type}}</td>
                    </tr>
                    <tr>
                        <!-- ... (existing code) ... -->

                    <tr>
                        <td>Business Unit</td>
                        <td>
                            <table class="table table-bordered">
                                @php($i=1)
                                <tr><th>No.</th><th>Business Unit ID</th><th>Name</th><th>Action</th></tr>
                                @foreach($project->bunits as $b)
                                    @if($i == 1)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$b->BUID}}</td>
                                            <td>{{$b->Name}}</td>
                                            <td>
                                                <a href="{{ route('dropBunit', ['project_id' => $project->id, 'bunit_id' => $b->id]) }}" class="btn btn-danger">Drop</a>
                                            </td>
                                        </tr>
                                    @endif
                                    @php($i++)
                                @endforeach
                                <form action="{{ route('addToBunit', $project->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="bunits">Select Business Unit:</label>
                                        <select name="bunits" class="form-control">
                                            @foreach($allBunits as $bunit)
                                                <option value="{{ $bunit->id }}">{{ $bunit->Name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-success">Add Bunit</button>
                                    {{--<a class="btn btn-danger" href="{{route('dropAllDevelopers', $project->id)}}">Drop All</a> --}}
                                </form>
                            </table>

                        </td>
                    </tr>

                    <tr>
                        <td>Lead Developer</td>
                        <td>
                            <table class="table table-bordered">
                                @php($i=1)
                                <tr><th>No.</th><th>Developer ID</th><th>Name</th><th>Action</th></tr>
                                @foreach($project->leaddevelopers as $d)
                                    @if($i == 1)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$d->DevID}}</td>
                                            <td>{{$d->Name}}</td>
                                            <td>
                                                <a href="{{ route('dropLeadDeveloper', ['project_id' => $project->id, 'developer_id' => $d->id]) }}" class="btn btn-danger">Drop</a>
                                            </td>
                                        </tr>
                                    @endif
                                    @php($i++)
                                @endforeach
                                <form action="{{ route('addToLeadDeveloper', $project->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="developers">Select Lead Developers:</label>
                                        <select name="developers" class="form-control">
                                            @foreach($allDevelopers as $developer)
                                                <option value="{{ $developer->id }}">{{ $developer->Name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-success">Add Lead Developers</button>
                                    {{--<a class="btn btn-danger" href="{{route('dropAllDevelopers', $project->id)}}">Drop All</a> --}}
                                </form>
                            </table>

                        </td>
                    </tr>

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

                {{-----------------------------------------------------------------------------------------------------}}
{{--
                <form action="{{ route('addToLeadDeveloper', $project->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="developers">Select Developers:</label>
                        <select name="developers[]" class="form-control" multiple>
                            @foreach($allDevelopers as $developer)
                                <option value="{{ $developer->id }}">{{ $developer->Name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Add Developers</button>
                    <a class="btn btn-danger" href="{{route('dropAllDevelopers', $project->id)}}">Drop All</a>

                </form> --}}



                <!-- Add Lead Developer Section -->
               {{-- <div class="form-group">
                    <label for="developer">Lead Developer:</label>
                    <select name="developer" class="form-control">
                        @foreach($allDevelopers as $developer)
                            <option value="{{ $developer->id }}">{{ $developer->Name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="button" class="btn btn-primary" onclick="addLeadDeveloper()">Add Lead Developer</button>
                <div id="leadDeveloperRow" class="mt-3" style="display: none;">
                    <strong>Lead Developer:</strong> <span id="leadDeveloperName"></span>
                </div> --}}
                {{---------------------------------------------------------------------------------------------------------------------}}

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
