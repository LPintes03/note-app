<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NoteController extends Controller
{
    
    public function showNotes()
    {
        $notes = Note::get();
       
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

        Note::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
            
        return redirect('/create')->with('status', 'Note Saved');
        
    }

    public function edit(int $id){
        $note = Note::findorFail($id);
        // return $note;
        return view('edit', compact('note'));

    }

    public function update(Request $request, int $id){

        $request->validate([
            'title' => 'required|max:255|string',
            'content' => 'required|max:10000|string'
        ]);

        Note::findOrFail($id)->update([
            'title' => $request->title,
            'content' => $request->content
        ]);
            
        return redirect()->back()->with('status', 'Note Updated');
        
    }

    public function destroy(int $id){
        $note = Note::findOrFail($id);
        $note->delete();

        return redirect()->back()->with('status', 'Note Deleted');

    }
}

