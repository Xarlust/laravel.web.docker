<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FileUpload extends Controller
{
    public function createForm(){
        return view('file-upload');
    }

    public function fileUpload(Request $request){
        $request->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        ]);



        if($request->file()) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');



            return back()
                ->with('success','File has been uploaded.')
                ->with('file', $fileName);
        }
    }

}
