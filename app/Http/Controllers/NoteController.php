<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NoteController extends Controller
{
    
    public function showNotes()
    {
        // It's better to return a view with data, rather than just the view.
        // For example, you could return a list of notes.
        $notes = Note::all();
        return view('home', compact('notes'));
    }

    
    public function create()
    {
        return view('create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|string',
            'content' => 'required|max:10000|string'
        ]);

        try {
            $note = Note::create($request->only(['title', 'content']));
            return redirect('/create')->with('status', 'Note Saved');
        } catch (\Exception $e) {
            return redirect('/create')->with('error', 'Failed to save note');
        }
    }
}
