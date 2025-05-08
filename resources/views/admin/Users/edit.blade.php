@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Chỉnh sửa tài khoản</h2>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="Username" class="form-label">Tên đăng nhập</label>
            <input type="text" class="form-control" id="Username" name="Username" value="{{ old('Username', $user->Username) }}">
        </div>

        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" id="Email" name="Email" value="{{ old('Email', $user->Email) }}">
        </div>

        <div class="mb-3">
            <label for="FullName" class="form-label">Họ và tên</label>
            <input type="text" class="form-control" id="FullName" name="FullName" value="{{ old('FullName', $user->FullName) }}">
        </div>

        <div class="mb-3">
            <label for="Role" class="form-label">Vai trò</label>
            <select class="form-control" id="Role" name="Role">
                <option value="admin" {{ $user->Role == 'admin' ? 'selected' : '' }}>Quản trị viên</option>
                <option value="teacher" {{ $user->Role == 'teacher' ? 'selected' : '' }}>Giảng viên</option>
                <option value="student" {{ $user->Role == 'student' ? 'selected' : '' }}>Học viên</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="IsActive" class="form-label">Trạng thái</label>
            <select class="form-control" id="IsActive" name="IsActive">
                <option value="1" {{ $user->IsActive ? 'selected' : '' }}>Kích hoạt</option>
                <option value="0" {{ !$user->IsActive ? 'selected' : '' }}>Vô hiệu hóa</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
@endsection
