<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index($searchKey) {
        $users = User::search($searchKey)->get();
        return view('search', compact('users'));
    }
}
