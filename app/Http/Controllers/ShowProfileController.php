<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return "Bir metodli kontroller";
    }
}
