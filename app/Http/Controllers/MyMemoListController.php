<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyMemoListController extends Controller
{
    //
    public function index(Request $request)
    {
        $memos = \App\PagesModels\MyMemoList::where('active', 1)
            ->orderBy('date', 'DESC')
            ->get();
        return view('mymemo', compact("memos"));
    }
}
