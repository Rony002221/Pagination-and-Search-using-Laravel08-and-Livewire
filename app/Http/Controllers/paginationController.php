<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class paginationController extends Controller
{
    public function showAllUser()
    {

        $var = User::paginate(10);
        
        return view('showAllUser', compact('var'));
    }
}
