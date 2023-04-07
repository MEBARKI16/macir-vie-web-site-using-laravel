<?php

namespace App\Http\Controllers;

use App\AppLang;
use Illuminate\Http\Request;

class AppliLangController extends Controller
{
    public function getIfAfterCachedDate($cachedDate) {
        $langs = AppLang::all();
        if ($cachedDate == "null") return response()->json($langs);
        foreach ($langs as $lang) {
            if ($lang->created_at > $cachedDate || $lang->updated_at > $cachedDate) {
                return response()->json($langs);
            }
        }

        return response()->json($data = ["message" => "UP-TO-DATE"]);
    }
}
