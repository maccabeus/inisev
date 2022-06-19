<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtcleController extends Controller
{
    public  function index(Request $request) {
        return "done";
    }
    public  function create(Request $request) {
        return  $request;
    }
}
