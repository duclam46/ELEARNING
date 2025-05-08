<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Hiển thị danh sách người dùng.
     */
    public function index()
    {
        $users = $this->user->latest('id')->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Hiển thị form tạo người dùng mới.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Lưu người dùng mới vào cơ sở dữ liệu.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Username' => 'nullable|string|max:255',
            'Email' => 'nullable|email|max:255',
            'FullName' => 'nullable|string|max:255',
            'Password' => 'required|string|min:6',
            'Role' => 'nullable|string|max:50',
            'IsActive' => 'required|boolean',
        ]);

        $this->user->create([
            'Username' => $request->Username,
            'Email' => $request->Email,
            'FullName' => $request->FullName,
            'Password' => bcrypt($request->Password),
            'Role' => $request->Role,
            'IsActive' => $request->IsActive,
            'CreatedAt' => now(),
        ]);

        return redirect()->route('users.index')->with('success', 'Thêm người dùng thành công.');
    }

    /**
     * Hiển thị form chỉnh sửa người dùng.
     */
    public function edit(string $id)
    {
        $user = $this->user->findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Cập nhật người dùng.
     */
    public function update(Request $request, string $id)
    {
        $user = $this->user->findOrFail($id);

        $request->validate([
            'Username' => 'nullable|string|max:255',
            'Email' => 'nullable|email|max:255',
            'FullName' => 'nullable|string|max:255',
            'Password' => 'nullable|string|min:6',
            'Role' => 'nullable|string|max:50',
            'IsActive' => 'required|boolean',
        ]);

        $data = $request->only(['Username', 'Email', 'FullName', 'Role', 'IsActive']);

        if ($request->filled('Password')) {
            $data['Password'] = bcrypt($request->Password);
        }

        $user->update($data);

        return redirect()->route('users.index')->with('success', 'Cập nhật người dùng thành công.');
    }

    /**
     * Xóa người dùng.
     */
    public function destroy(string $id)
    {
        $user = $this->user->findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Xóa người dùng thành công.');
    }
}
