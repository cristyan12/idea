<?php

namespace App\Http\Controllers;

use App\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function getIdeas()
    {
        return Idea::orderBy('id', 'DESC')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required'
        ]);

        Idea::create($request->only('description'));

        return;
    }
}
