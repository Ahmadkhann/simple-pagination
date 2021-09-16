<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DataTableContoller extends Controller
{
    public function index() {

        $user = DB::table('users')->paginate(20);
        return view('datatable', compact('user'));

    }
}
