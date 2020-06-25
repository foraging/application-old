<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\View\View;

class AnimalController extends Controller
{
    /**
     * Show the edit page
     *
     * @param Animal $animal
     *
     * @return View
     */
    public function edit(Animal $animal)
    {
        return view('animals.edit', [
            'animal' => $animal
        ]);
    }

    /**
     * Show the index page
     *
     * @return View
     */
    public function index()
    {
        return view('animals.index', [
            'animals' => Animal::orderBy('name')->get()
        ]);
    }

    /**
     * Show the read page
     *
     * @param Animal $animal
     *
     * @return View
     */
    public function read(Animal $animal)
    {
        return view('animals.read', [
            'animal' => $animal
        ]);
    }
}
