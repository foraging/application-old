<?php

namespace App\Http\Controllers;

use App\Models\Park;
use Illuminate\View\View;

class ParkController extends Controller
{
    /**
     * Show the edit page
     *
     * @param Park $park
     *
     * @return View
     */
    public function edit(Park $park)
    {
        return view('parks.edit', [
            'park' => $park
        ]);
    }

    /**
     * Show the index page
     *
     * @return View
     */
    public function index()
    {
        return view('parks.index', [
            'parks' => Park::orderBy('name')->get()
        ]);
    }

    /**
     * Show the read page
     *
     * @param Park $park
     *
     * @return View
     */
    public function read(Park $park)
    {
        return view('parks.read', [
            'park' => $park
        ]);
    }
}
