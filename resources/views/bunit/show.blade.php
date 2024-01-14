@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h1>Business Unit Details</h1></div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Business Unit ID</td>
                        <td>{{$bunit->BUID}}</td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>{{$bunit->Name}}</td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>{{$bunit->Email}}</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>{{$bunit->PhoneNumber}}</td>
                    </tr>

                    <tr>
                    <td>Projects requested</td>
                    <td>
                        <table class="table table-bordered">
                            @php($i=1)
                            <tr><th>No.</th><th>Project ID</th><th>Title</th><th>Start Date</th><th>End Date</th><th>Duration</th><th>Status</th><th>Person in Charge</th></tr>
                            @foreach($bunit->projects as $p)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$p->ProjectID}}</td>
                                        <td>{{$p->Title}}</td>
                                        <td>{{$p->Start_Date}}</td>
                                        <td>{{$p->End_Date}}</td>
                                        <td>{{$p->Duration}}</td>
                                        <td>{{$p->Status}}</td>
                                        <td>{{$p->PIC}}</td>
                                    </tr>
                            @endforeach
                        </table>
                    </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="text-center mt-3">
            <a class="btn btn-warning " href="{{route('bunit.index')}}">Back</a>
            <a class="btn btn-primary" href="{{route('bunit.edit',$bunit->id)}}">Edit Details</a>
        </div>
    </div>
@endsection
