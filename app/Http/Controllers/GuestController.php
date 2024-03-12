<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class GuestController extends Controller
{
    public function index():view
    {
        return \view('guest.index');
    }
}
