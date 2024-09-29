<?php

namespace App\Http\Controllers;
use App\Models\Note;
use Illuminate\View\View;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function showNotes() {
        $notes = Note::all();
        return view('home', ['note'=>$notes]); 

    }
}
