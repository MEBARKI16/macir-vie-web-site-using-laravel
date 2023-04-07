<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Concours;
use Symfony\Component\Console\Input\Input;

class ConcoursPochette extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('concours');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'tel' => 'required|unique:concours_pochette',
            'file' => 'required'
        ]);

        $file_name = $request->nom . '_' . $request->prenom . '.' . request()->file->getClientOriginalExtension();

        $request->file->move(public_path('uploads/' . $request->tel), $file_name);
        $file = new Concours;
        $file->nom = $request->nom;
        $file->prenom = $request->prenom;
        $file->email = $request->email;
        $file->tel = $request->tel;
        $file->file = $file_name;
        $file->edition = "Printemps";
        $file->save();

        return response()->json(['success' => 'Successfully uploaded.']);
    }
}
