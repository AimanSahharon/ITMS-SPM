@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User Management</h1>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>User Level</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form method="POST" action="{{ route('admin.update', $user->id) }}">
                            @csrf
                            @method('PATCH')

                            <div class="input-group">
                                <select name="user_level" class="form-control">
                                    <option value="0" {{ $user->user_level == 0 ? 'selected' : '' }}>Admin</option>
                                    <option value="1" {{ $user->user_level == 1 ? 'selected' : '' }}>Manager</option>
                                    <option value="2" {{ $user->user_level == 2 ? 'selected' : '' }}>Lead Developer</option>
                                    <option value="3" {{ $user->user_level == 3 ? 'selected' : '' }}>Developer</option>
                                    <option value="4" {{ $user->user_level == 3 ? 'selected' : '' }}>Business Unit</option>
                                </select>
                                <button type="submit" class="btn btn-primary ml-2">Update</button>
                            </div>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('user.destroy', $user->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
