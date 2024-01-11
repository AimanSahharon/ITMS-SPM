@extends('layouts.app')
@section('content')
    <div class="container">
        @if(session('success'))
            <h6 class="alert alert-success">
                {{ session('success') }}
            </h6>
        @endif
        <div class="card-header">
            <h1>List of ITMS Developers</h1>
        </div>
        <div class="card-body">
            <a class="btn btn-primary float-end" href="{{route('developer.create')}}">Add New  Developer</a>
            <table class="table">
                <thead>
                <tr><th>No.</th><th>Developer ID</th><th>Name</th><th>Email</th><th>Phone Number</th><th>Action</th></tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($developers as $d)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$d->DevID}}</td>
                        <td>{{$d->Name}}</td>
                        <td>{{$d->Email}}</td>
                        <td>{{$d->PhoneNumber}}</td>
                        <td>
                            <form action="{{route('developer.destroy',$d)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-info" href="{{route('developer.show',$d->id)}}">Details</a>
                                <a class="btn btn-warning" href="{{route('developer.edit',$d->id)}}">Edit</a>
                                <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Confirm DELETE? this student {{$d->Name}}')">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
