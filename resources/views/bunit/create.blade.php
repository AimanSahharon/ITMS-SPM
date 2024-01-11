@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" action="{{route('bunit.store')}}">
            @csrf
            <div class="card mb-3">
                <div class="card-header">Add New Business Unit</div>
                <div class="card-body">
                    <div class="form-group  row mb-3">
                        <label for="BUID" class="col-sm-2 col-form-label">Business Unit ID</label>
                        <div class="col-sm-10">
                            <input type="text" name="BUID" class="form-control" id="BUID">
                            @error('BUID')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group  row mb-3">
                        <label for="Name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="Name" class="form-control" id="Name">
                            @error('Name')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group  row mb-3">
                        <label for="Email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="Email" class="form-control" id="Email">
                            @error('Email')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group  row mb-3">
                        <label for="PhoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
                        <div class="col-sm-10">
                            <input type="text" name="PhoneNumber" class="form-control" id="PhoneNumber">
                            @error('PhoneNumber')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>



                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-warning " href="{{route('bunit.index')}}">Back</a>
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection
