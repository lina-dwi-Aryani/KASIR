<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $user = User::paginate();
        return view('user.index', compact('user'))
        ->with('i', (request()->input('page', 1) - 1) *
        $user->perPage());
    }

    public function create()
    {
        $user = new User();
        return view('user.create', compact('user'));
    }

    public function store(Request $request)
    {
    
        request()->validate(User::$rules);
        $user = User::create($request->all());
        return redirect()->route('user.index')
        ->with('success', 'User berhasil ditambahkan....');
}

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:users,username,' . $user->id,
            'password' => 'required',
            'level_id' => 'required',
            'file_foto' => 'image|max:2048' // batasan ukuran gambar maksimal 2MB
        ]);

        $user->username = $request->username;
        $user->password = $request->password;
        $user->level_id = $request->level_id;

        if ($request->hasFile('file_foto')) {
            $file = $request->file('file_foto');
            $filename = $file->store('public/foto'); // simpan foto dalam direktori public/foto
            $user->file_foto = $filename;
        }

        $user->save();

        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}