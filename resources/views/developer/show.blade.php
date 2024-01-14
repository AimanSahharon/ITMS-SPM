@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h1>Developer Details</h1></div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Developer ID</td>
                        <td>{{$developer->DevID}}</td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>{{$developer->Name}}</td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>{{$developer->Email}}</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>{{$developer->PhoneNumber}}</td>
                    </tr>

                        <td>Projects they are working on</td>
                        <td>
                            <table class="table table-bordered">
                                @php($i=1)
                                <tr><th>No.</th><th>Project ID</th><th>Title</th><th>Start Date</th><th>End Date</th><th>Duration</th><th>Status</th><th>Person in Charge</th><th>Methodology</th><th>System Platform</th><th>Deployment Type</th></tr>
                                @foreach($developer->projects as $p)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$p->ProjectID}}</td>
                                            <td>{{$p->Title}}</td>
                                            <td>{{$p->Start_Date}}</td>
                                            <td>{{$p->End_Date}}</td>
                                            <td>{{$p->Duration}}</td>
                                            <td>{{$p->Status}}</td>
                                            <td>{{$p->PIC}}</td>
                                            <td>{{$p->Methodology}}</td>
                                            <td>{{$p->System_Platform}}</td>
                                            <td>{{$p->Deployment_Type}}</td>
                                        </tr>
                                @endforeach
                            </table>

                        </td>
                    </tr>

                    <tr>
                        <td>Projects they are Lead Developer</td>
                        <td>
                            <table class="table table-bordered">
                                @php($i=1)
                                <tr><th>No.</th><th>Project ID</th><th>Title</th><th>Start Date</th><th>End Date</th><th>Duration</th><th>Status</th><th>Person in Charge</th><th>Methodology</th><th>System Platform</th><th>Deployment Type</th></tr>
                                @foreach($developer->leadprojects as $ld)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$ld->ProjectID}}</td>
                                            <td>{{$ld->Title}}</td>
                                            <td>{{$ld->Start_Date}}</td>
                                            <td>{{$ld->End_Date}}</td>
                                            <td>{{$ld->Duration}}</td>
                                            <td>{{$ld->Status}}</td>
                                            <td>{{$ld->PIC}}</td>
                                            <td>{{$ld->Methodology}}</td>
                                            <td>{{$ld->System_Platform}}</td>
                                            <td>{{$ld->Deployment_Type}}</td>
                                        </tr>
                                @endforeach
                            </table>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="text-center mt-3">
            <a class="btn btn-warning " href="{{route('developer.index')}}">Back</a>
            <a class="btn btn-primary" href="{{route('developer.edit',$developer->id)}}">Edit Details</a>
        </div>
    </div>
@endsection
