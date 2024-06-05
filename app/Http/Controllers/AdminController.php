<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('admin.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            // tambahkan validasi lain yang diperlukan
        ]);

        Admin::create($validated);
        return redirect()->route('admin.index')->with('success', 'Admin created successfully.');
    }

    public function show(Admin $admin)
    {
        return view('admin.show', compact('admin'));
    }

    public function edit(Admin $admin)
    {
        return view('admin.edit', compact('admin'));
    }

    public function update(Request $request, Admin $admin)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins,email,' . $admin->id,
            // tambahkan validasi lain yang diperlukan
        ]);

        $admin->update($validated);
        return redirect()->route('admin.index')->with('success', 'Admin updated successfully.');
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('admin.index')->with('success', 'Admin deleted successfully.');
    }
}
