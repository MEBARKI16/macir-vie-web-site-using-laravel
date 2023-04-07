<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PagesModels\MyMemo;

class MyMemoController extends Controller
{
    function download(Request $request)
    {
        $memo = new MyMemo();
        $memo->nom = $request->nom;
        $memo->prenom = $request->prenom;
        $memo->email = $request->email;
        $memo->version = $request->version;
        $memo->date = date('Y-m-d H:i:s');
        $memo->adresse_ip = $request->ip();
        $memo->save();

        $currentMemo = \App\PagesModels\MyMemoList::find($request->version);
        return response()->json([
            'currentMemo' => $currentMemo,
        ]);
    }
}
