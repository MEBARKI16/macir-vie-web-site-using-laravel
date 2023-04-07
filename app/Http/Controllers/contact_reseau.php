<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\Mail;

class contact_reseau extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact_reseau');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = new Message;
        $message->vous_etes = $request->vous_etes;
        $message->nom = $request->nom;
        $message->prenom = $request->prenom;
        $message->fonction = $request->fonction;
        $message->ville = $request->ville;
        $message->numero = $request->numero;
        $message->email = $request->email;
        $message->objet = $request->objet;
        $message->message = $request->message;

        $message->save();
        Mail::to('courrier@macirvie.com')->send(new ContactMail($message));

        return redirect(route(app()->getLocale().'-contact-reseau', 'fr'))->with('successMsg', 'Votre Message a été envoyé');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
