<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FolderController extends Controller
{
    public function create_folder(Request $request){
        $request->validate([
            'name' => 'required|unique:folders,name'
        ]);

        $folder = DB::table('folders')->insert($request->all());

        return $folder;

    }
}
