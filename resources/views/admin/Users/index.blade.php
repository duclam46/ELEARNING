@extends('admin.layouts.app')
@section('title', 'Users')
@section('content')
    <div class="card">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h1>User List</h1>
        <div class="mb-3">
            <a href="{{ route('users.create') }}" class="btn btn-primary">Create User</a>
        </div>
        <div>
            <table class="table table-bordered table-striped mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Fullname</th>
                        <th>Role</th>
                        <th>Is Active</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->fullname }}</td>
                            <td>{{ $item->role }}</td>
                            <td>{{ $item->isActive ? 'Yes' : 'No' }}</td>
                            <td>{{ $item->created_at ? $item->created_at->format('Y-m-d H:i:s') : 'N/A' }}</td>
                            
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">No users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function confirmDelete(id) {
            if (confirm('Are you sure you want to delete this user?')) {
                document.getElementById('form-delete-' + id).submit();
            }
        }
    </script>
@endsection