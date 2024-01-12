{{--<h1> TEST</h1>

<select name="" id="">
    @foreach($bunit as $row)
        <option value="{{$row->bunit_id}}}">{{$row->Name}}</option>
    @endforeach
</select>

<select name="" id="">
    @foreach($lead_developer as $row)
        <option value="{{$row->developer_id}}}">{{$row->Name}}</option>
    @endforeach
</select>
--}}


@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" action="{{route('project.store')}}">
            @csrf
            <div class="card mb-3">
                <div class="card-header">Add New Project</div>
                <div class="card-body">
                    <div class="form-group  row mb-3">
                        <label for="ProjectID" class="col-sm-2 col-form-label">Project ID</label>
                        <div class="col-sm-10">
                            <input type="text" name="ProjectID" class="form-control" id="ProjectID">
                            @error('ProjectID')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group  row mb-3">
                        <label for="BUID" class="col-sm-2 col-form-label">Business Unit ID</label>
                        <div class="col-sm-10">
                            <select name="BUID" id="BUID">
                                @foreach($bunit as $row)
                                    <option value="{{$row->bunit_id}}">{{$row->BUID}}</option>
                                @endforeach
                            </select>
                            @error('BUID')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group  row mb-3">
                        <label for="Title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="Title" class="form-control" id="Title">
                            @error('Title')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group  row mb-3">
                        <label for="System_Owner" class="col-sm-2 col-form-label">System Owner</label>
                        <div class="col-sm-10">
                            <select name="System_Owner" id="System_Owner">
                                @foreach($bunit as $row)
                                    <option value="{{$row->bunit_id}}">{{$row->Name}}</option>
                                @endforeach
                            </select>
                            @error('System_Owner')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group  row mb-3">
                        <label for="Title" class="col-sm-2 col-form-label">Person In Charge</label>
                        <div class="col-sm-10">
                            <input type="text" name="PIC" class="form-control" id="PIC">
                            @error('PIC')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group  row mb-3">
                        <label for="Lead_Developer" class="col-sm-2 col-form-label">Lead Developer</label>
                        <div class="col-sm-10">
                            <select name="Lead_Developer" id="Lead_Developer">
                                @foreach($lead_developer as $row)
                                    <option value="{{$row->developer_id}}">{{$row->Name}}</option>
                                @endforeach
                            </select>
                            @error('Lead_Developer')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group  row mb-3">
                        <label for="Start_Date" class="col-sm-2 col-form-label">Start Date</label>
                        <div class="col-sm-10">
                            <input type="date" name="Start_Date" class="form-control" id="Start_Date">
                            @error('Start_Date')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group  row mb-3">
                        <label for="End_Date" class="col-sm-2 col-form-label">End Date</label>
                        <div class="col-sm-10">
                            <input type="date" name="End_Date" class="form-control" id="End_Date">
                            @error('End_Date')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group  row mb-3">
                        <label for="Duration" class="col-sm-2 col-form-label">Duration</label>
                        <div class="col-sm-10">
                            <input type="text" name="Duration" class="form-control" id="Duration">
                            @error('Duration')
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



                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-warning " href="{{route('project.index')}}">Back</a>
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection



