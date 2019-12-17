<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class UserController extends Controller
{

    // public function construct()
    // {
    //      $this->middleware('auth');
    // }

    public function profile()
    {
        return response()->json(['user' => Auth::user()], 200);
    }

     public function showAllUsers()
     {
        return response()->json(User::all());
     }

     public function showOneUser($id)
     {
         return response()->json(User::find($id));
     }

    public function create(Request $request)
    {
        $user = User::create($request->all());

        return response()->json($user, 201);
    }

     public function update($id, Request $request)
     {
        $user = User::findOrFail($id);
        $user->update($user->all());

        return response()->json($user, 200);
     }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}