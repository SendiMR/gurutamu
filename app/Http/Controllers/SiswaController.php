<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
class SiswaController extends Controller
{
    //
    public function index(){
        $title ="Ini adalah halaman siswa dari controller";
        $data = Siswa::$data;
        
        return view('siswa.index',compact('title','data'));
    }
}
