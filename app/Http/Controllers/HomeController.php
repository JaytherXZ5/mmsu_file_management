<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function getDataHome(){
        $folders = DB::table('folders')->get();
        $files = DB::table('files')->orderBy('id', 'desc')->get();
        return [
            'folders' => $folders,
            'files' => $files
        ];
    }
}
