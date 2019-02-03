<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(){
    return view('helloworld');
    }
}
