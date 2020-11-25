<?php

namespace App\Http\Controllers;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $profile = Profile::all();
        return view('content.index', compact('profile'));
    }

    public function create(){
        $ticket =Profile::all();
        $user = Auth::user();
        return view('content.profiles.create');
        }

    public function store(){

        $request->validate([
            'profile'=>'required',
            'content'=>'required',
        ]);

        $profile = new Profile();
        $profile->profile_name = $request->profile_name;
        $profile->profile_content= $request->profile_content;
        $profile->status = $request->status;
        if(Questions::where('profile', $request->profile)->exists()){
            return back()->with('error', 'el perfil ya se encuentra registrado.');
        }else{
            $profile->save();
        }
        return redirect()->route('content_index')->with('succes','se ha agregado el perfil con exito');

    }

    public function edit($id){
        $profile = Profile::findOrFail($id);
        return view('content.edit', compact('profile'));
    }

    public function update(){
        $profile = Questions::findOrFail($id);
        $profile->profile_name = $request->profile_name;
        $profile->profile_content = $request->profile_content;
        $profile->status = $profile->status;
        $profile->update();
        return redirect()->route('questions_index')->with('succes', 'Se ha actualizado el perfil');
        
    }

    public function profile_status ($id){
        $profile = Profile::findOrFail($id);
        if($profile->status == "Active"){
            $profile->status = "Inactive";
            $profile->update();
            return back()->with('Success', 'Se ha inhabilitado el perfil.');
        }else{
            $profile->status = "Active";
            $profile->update();
            return back()->with('success', 'Se ha habilitado el perfil.');
        }
    }

}
