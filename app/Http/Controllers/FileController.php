<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use lluminate\Support\Facades\Storages;
use Illuminate\Support\Facades\File;

class FileController extends Controller
{
    /**
     * Handle file upload and return location.
     *
     * @param  Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            if (!in_array(strtolower($request->file->getClientOriginalExtension()), array("gif", "jpeg", "jpg", "png"))) {
                header("HTTP/1.1 400 Invalid extension.");
                return;
            }

            $nombre = pathinfo($request->file->getClientOriginalName(), PATHINFO_FILENAME);
            $nombre = $nombre . "_" . time() . "." . $request->file->getClientOriginalExtension();

            $request->file->move(public_path('imagenes\noticias'), $nombre);

            return ['location' => 'http://localhost:4741/DevStudio/Proyectos/forinder/public/imagenes/noticias/' . $nombre];
        }
    }	 
}
