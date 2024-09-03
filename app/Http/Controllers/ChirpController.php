<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ChirpController extends Controller
{
    /**
     * Display a Listing of the resource
     */

    public function index(): View
    {
        return view('chirps', [
            //
        ]);
        }
}
