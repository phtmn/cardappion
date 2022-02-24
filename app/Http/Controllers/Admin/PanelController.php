<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;

class PanelController extends Controller
{
    public function index()
    {

        return view('admin.index');
    }

}
