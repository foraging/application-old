<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\View\View;

class PlantController extends Controller
{
    /**
     * Show the edit page
     *
     * @param Plant $plant
     *
     * @return View
     */
    public function edit(Plant $plant)
    {
        return view('plants.edit', [
            'plant' => $plant
        ]);
    }

    /**
     * Show the index page
     *
     * @return View
     */
    public function index()
    {
        return view('plants.index', [
            'plants' => Plant::orderBy('name')->get()
        ]);
    }

    /**
     * Show the read page
     *
     * @param Plant $plant
     *
     * @return View
     */
    public function read(Plant $plant)
    {
        return view('plants.read', [
            'plant' => $plant
        ]);
    }
}
