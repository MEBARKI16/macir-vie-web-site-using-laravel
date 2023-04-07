<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class PresentationController extends Controller
{
    //
    public function store(Request $request){
        if($request->isMethod('post')){

            $files=array();
            if($request->version=='FR'){
                array_push($files,public_path('assets/files/WL_MV_Plaquette_de_presentation_MV_2022_FR.pdf'));
            }
            elseif($request->version=='AR'){
                array_push($files,public_path('assets/files/WL_MV_Plaquette_de_presentation_MV_2022_AR.pdf'));
            }
            else{
                array_push($files,public_path('assets/files/WL_MV_Plaquette_de_presentation_MV_2022_AN.pdf'));
            }

            $data["email"] = $request->email;
            $data["title"] = "Présentation Macirvie";
            $data['nom']=$request->nom;
            $data['prenom']=$request->prenom;
            $presentation =new \App\Presentation;
            $presentation->nom=$request->nom;
            $presentation->prenom=$request->prenom;
            $presentation->nom_entreprise=$request->nom_entreprise;
            $presentation->email=$request->email;
            $presentation->version=$request->version;
            $presentation->save();

            Mail::send('emails.presentation', $data, function($message)use($data, $files) {
                $message->to($data["email"], $data["email"])
                        ->subject($data["title"]);
                $message->from('hello@macirvie.com','Macirvie');
                foreach ($files as $file){
                    $message->attach($file);
                }

            });
            return "OK";
        }
    }
}
