<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;


class FileController extends Controller {
    public function create(){
     
        return view('content.profiles.createfile');
        }
    public function store(Request $request) {
        $request->validate([
            'file' => 'required',
        ]);

        $files = new File();
        /* $file = $request->file('file'); //<---- Como arreglo
         */

        // Declarando arreglo

        /* Agregar un foreach para cada archivo detectado | Comprobar existencia | Guardar en arreglo | Foreach para ejectuar guardado de archivo por cada archivo detectado | F I N */
        $files = $request->file('file');
        if ($files != null) {
            foreach ($files as $file) {
                /* Aquí pondríamos un foreach para cada archivo encontrado */
                //File request
                $fileName = $file->getClientOriginalName();
                $file_path = $file->getPathName();
                //File store at folder specified ('files')
                $path = $file->storeAs('files', $fileName);
                //File's path and name to save into db
                $file_model = new File();
                $file_model->fileName = $fileName;
                $file_model->file_path = $file_path;
                $file_model->save();
                /* Aquí terminaría el foreach */
            }
            Session::flash('flash_message', 'Documento subido con Exito');
            return back()->with('success', 'Documento Guardado');
        }
    }

    public function downloadFile($id) {
        $file = File::findOrFail($id);
        return Storage::download('/files/' . $file->name);
    }
}
