<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileTrakeController extends Controller
{
    public function index()
    {
        
        return view ('profiletrake');
    }
    public function user()
    {
        
        return view ('user');
    }
    public function store(Request $request)
    {
        dd($request->all());
        
    }
}
