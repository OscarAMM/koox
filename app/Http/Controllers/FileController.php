<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\file_profile;
use App\Profile;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller {
    public function create($id) {
        $profile = Profile::findOrFail($id);
        $files = $profile->file_profile;
        return view('content.profiles.createfile', compact('files', 'profile'));
    }

    public function store(Request $request, $id) {
        $profile = Profile::findOrFail($id);

        $request->validate([
            'file' => 'required',
        ]);
        $files = $request->file('file');
        if (count($files)  + $profile->file_profile->count() <= 4) {

            if ($files != null) {
                foreach ($files as $file) {
                    /* Aquí pondríamos un foreach para cada archivo encontrado */
                    //File request
                    $file_model = new file_profile();
                    $fileName = $file->getClientOriginalName();
                    $file_path = $file->getPathName();
                    //File store at folder specified ('files')
                    $path = $file->storeAs('files/profiles/' . $profile->profile_name, $fileName);
                    //File's path and name to save into db
                    $file_model->fileName = $fileName;
                    $file_model->file_path = $file_path;
                    $file_model->save();
                    $file_model->profile()->attach(Profile::where('id', $profile->id)->first());
                    /* Aquí terminaría el foreach */
                }
                \Session::flash('success_message', 'Documento subido con Exito');
                return back()->with('success', 'Documento Guardado');
            }
        } else {
            \Session::flash('fail_message', 'Se alcanzó el límite de documentos permitidos.');
            return back()->with('success', 'Demasiados documentos');
        }
    }

    public function downloadFile($id) {
        $file_profile = file_profile::findOrFail($id);
        $profiles = $file_profile->profile;
        foreach ($profiles as $profile) {
            if ($file_profile->hasProfile($profile->id)) {
                return Storage::download('/files/profiles/' . $profile->profile_name . '/' . $file_profile->fileName);
            }
        }
    }

    public function delete($id) {
        $file_profile = file_profile::findOrFail($id);
        $profiles = $file_profile->profile;
        foreach ($profiles as $profile) {
            if ($file_profile->hasProfile($profile->id)) {
                Storage::delete('/files/profiles/' . $profile->profile_name . '/' . $file_profile->fileName);
            }
            $file_profile->profile()->detach();
            $file_profile->delete();
            return back()->with('success', 'Se ha eliminado el archivo');
        }
    }
}
