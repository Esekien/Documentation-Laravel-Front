<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Documentation;
use App\Models\Version;
use Illuminate\Http\Request;

class Welcome extends Controller
{
    public function index(){

        
        $Documentation = Documentation::with('version')->where('version_id',1)->get();
        $Version = Version::all();
        return view('index',compact('Documentation','Version'));
    }
    public function page($page){

        $Documentation = Documentation::with('version')->where('version_id',1)->get();
        $Version = Version::all();
        $pageD = Documentation::where('id',$page)->get();
        return view('index',compact('Documentation','Version','pageD'));
    }

    // public function versionpage($page,$versiona){

    //     $Documentation = Documentation::with('version')->where('version_id',$versiona)->get();
    //     $Version = Version::all();
    //     $pageD = Documentation::where('id',$page)->get();
    //     return view('index',compact('Documentation','Version','pageD'));
        
    // }

}
