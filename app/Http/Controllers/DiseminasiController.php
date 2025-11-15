<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class DiseminasiController extends Controller
{
    public function index()
    {
        return Inertia::render('Diseminasi/Index');
    }
}
