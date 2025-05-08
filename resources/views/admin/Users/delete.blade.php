@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Xác nhận xóa người dùng</h2>

    <div class="alert alert-warning">
        <p>Bạn có chắc chắn muốn xóa người dùng <strong>{{ $user->FullName }}</strong> ({{ $user->Email }}) không?</p>
    </div>

    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <a href="{{ route('users.index') }}" class="btn btn-secondary">Hủy</a>
        <button type="submit" class="btn btn-danger">Xóa</button>
    </form>
</div>
@endsection
