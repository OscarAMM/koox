<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use Spatie\Permission\Models\Role;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = User::all();
        return view('auth.index', compact('user'));
    }
    public function create()
    {
        $profile = Role::all();
        return view('auth.create', compact('profile'));
    }
    public function store(UserRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->assignRole($request->profile);
        if (User::where('email', $request->email)->exists()) {
            return back()->with('info', "El correo se encuentra registrado");
        } else {
            $user->save();
            return redirect()->route('user_index')->with('success', 'Se ha registrado con éxito el usuario.');
        }
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $profile = Role::all();
        return view('auth.edit', compact('user', 'profile'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'profile' => 'required',
        ]);
        $user = User::findOrFail($id);
        $user->roles()->detach();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->assignRole($request->profile);
        $user->update();
        return redirect()->route('user_index')->with('succes', 'Se ha modificado el usuario con éxito.');
    }
    public function user_status($id)
    {
        $user = User::findOrFail($id);
        if ($user->status == "enable") {
            $user->status = "disable";
            $user->password = bcrypt(Str::random(10));
            $user->update();
            return back()->with('success', 'Se ha deshabilitado el usuario con éxito.');
        } else {
            $user->status = "enable";
            $user->password = bcrypt('53cr37@1');
            $user->update();
            return back()->with('success', 'Se ha habilitado el usuario con éxito.');
        }
    }
    public function user_profile($id){
        $user = User::findOrFail($id);
        $profiles = $user->getRoleNames();
        return view('auth.profile', compact('user', 'profiles'));
    }
    public function user_edit_form($id){
        $user = User::findOrFail($id);
        return view('auth.public_edit', compact('user'));
    }
    public function user_public_edit(Request $request, $id){
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password){
            $user->password = bcrypt($request->password);
        }
        $user->update();
        return back()->with('success', 'El perfil se ha actualizado con éxito.');
    }
}
