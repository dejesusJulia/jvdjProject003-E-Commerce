<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // code
    }

    public function show(){
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function editUserProfile(User $user){
        // return view with variables to be edited
        return view('user.profile-update', compact('user'));
        
    }

    public function editManagerProfile(User $user){
        // return view with variables to be edited
        return view('manager.profile-update', compact('user'));
        
    }

    public function editAdminProfile(User $user){
        // return view with variables to be edited
        return view('admin.profile-update', compact('user'));
    }

    public function updateUserProfile(Request $request, User $user){
        // update user profile
        $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect(route('user.home'))->with('successMsg', 'Profile updated successfully!');

    }

    public function updateManagerProfile(Request $request, User $user){
        // update manager profile
        $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect(route('manager.home'))->with('successMsg', 'Profile updated successfully!');
    }

    public function updateAdminProfile(Request $request, User $user){
        // update admin profile
        $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect(route('admin.home'))->with('successMsg', 'Profile updated successfully!');
    }

    public function editRole(User $user){
        return view('admin.user-update', compact('user'));
    }

    public function updateRole(Request $request, User $user){
        // update user profile
        $user->update(['user_role' => $request->user_role]);

        return redirect(route('admin.users'))->with('successMsg', 'User role updated successfully');

    }

    public function destroy(User $user){
        // delete a USER
        $user->delete();
        return redirect()->back()->with('successMsg', 'User deleted successfully!');

    }
}
