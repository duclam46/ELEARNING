@extends('admin.layouts.app')
@section('title', 'Create User')
@section('content')
    <div class="card">
        <h1>Create User</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="Username" class="form-label">Username</label>
                <input type="text" name="Username" id="Username" class="form-control @error('Username') is-invalid @enderror" value="{{ old('Username') }}">
                @error('Username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="email" name="Email" id="Email" class="form-control @error('Email') is-invalid @enderror" value="{{ old('Email') }}">
                @error('Email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="FullName" class="form-label">Fullname</label>
                <input type="text" name="FullName" id="FullName" class="form-control @error('FullName') is-invalid @enderror" value="{{ old('FullName') }}">
                @error('FullName')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" name="Password" id="Password" class="form-control @error('Password') is-invalid @enderror">
                @error('Password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Role" class="form-label">Role</label>
                <select name="Role" id="Role" class="form-control @error('Role') is-invalid @enderror">
                    <option value="">Select Role</option>
                    <option value="admin" {{ old('Role') == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="user" {{ old('Role') == 'user' ? 'selected' : '' }}>User</option>
                </select>
                @error('Role')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="IsActive" class="form-label">Active</label>
                <!-- Thêm trường ẩn để gửi giá trị 0 nếu checkbox không được chọn -->
                <input type="hidden" name="IsActive" value="0">
                <input type="checkbox" name="IsActive" id="IsActive" value="1" {{ old('IsActive') ? 'checked' : '' }}>
                @error('IsActive')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection