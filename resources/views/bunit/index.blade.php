@extends('layouts.app')
@section('content')
    <div class="container">
        @if(session('success'))
            <h6 class="alert alert-success">
                {{ session('success') }}
            </h6>
        @endif
        <div class="card-header">
            <h1>List of Business Units</h1>
        </div>
        <div class="card-body">
            <a class="btn btn-primary float-end" href="{{route('bunit.create')}}">Add New Business Unit</a>
            <table class="table">
                <thead>
                <tr><th>No.</th><th>Business Unit ID</th><th>Name</th><th>Email</th><th>Phone Number</th><th>Action</th></tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($bunits as $b)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$b->BUID}}</td>
                        <td>{{$b->Name}}</td>
                        <td>{{$b->Email}}</td>
                        <td>{{$b->PhoneNumber}}</td>
                        <td>
                            <form action="{{route('bunit.destroy',$b)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-info" href="{{route('bunit.show',$b->id)}}">Details</a>
                                <a class="btn btn-warning" href="{{route('bunit.edit',$b->id)}}">Edit</a>
                                <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Confirm DELETE? this student {{$b->Name}}')">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
