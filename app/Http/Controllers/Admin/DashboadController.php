<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboadController extends Controller
{
    public function index() {
        $title = 'Dashboard';
        return view('backend.dashboard', compact('title'));
    }
}
