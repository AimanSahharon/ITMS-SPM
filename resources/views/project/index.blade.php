@extends('layouts.app')
@section('content')
    <div class="container">
        @if(session('success'))
            <h6 class="alert alert-success">
                {{ session('success') }}
            </h6>
        @endif
        <div class="card-header">
            <h1>List of Projects</h1>
        </div>
        <div class="card-body">
            <a class="btn btn-primary float-end" href="{{route('project.create')}}">Add New Project</a>
            <table class="table">
                <thead>
                <tr><th>No.</th><th>Project ID</th><th>Title</th><th>Person in Charge</th><th>Start Date</th><th>End Date</th><th>Duration</th><th>Status</th><th>Action</th></tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($projects as $p)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$p->ProjectID}}</td>
                        <td>{{$p->Title}}</td>
                       {{-- <td>{{$p->BUID}}</td>--}}
                        {{--<td>{{$p->System_Owner}}</td>--}}
                        <td>{{$p->PIC}}</td>
                        {{-- <td>{{$p->Lead_Developer}}</td> --}}
                        <td>{{$p->Start_Date}}</td>
                        <td>{{$p->End_Date}}</td>
                        <td>{{$p->Duration}}</td>
                        <td>{{$p->Status}}</td>
                        <td>
                            <form action="{{route('project.destroy',$p)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-info" href="{{route('project.show',$p->id)}}">Details</a>
                                <a class="btn btn-warning" href="{{route('project.edit',$p->id)}}">Edit</a>
                                <a class="btn btn-secondary" href="{{route('project.progress',$p->id)}}">Progress Report</a>
                                <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Confirm DELETE? this student {{$p->Title}}')">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
